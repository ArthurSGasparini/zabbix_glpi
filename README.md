\# Ambiente Integrado Zabbix e GLPI com Docker



Este projeto consiste na orquestração de um ambiente de TI completo contendo o \*\*GLPI\*\* (Sistema de Gestão de Serviços de TI - ITSM) e o \*\*Zabbix\*\* (Sistema de Monitoramento), utilizando o Docker Compose.



O objetivo principal deste laboratório é manter os dois sistemas rodando na mesma rede Docker e integrá-los para que falhas identificadas pelo Zabbix (como erros em rotinas de backup) abram chamados automaticamente no GLPI.



\## Pré-requisitos



\* \*\*Docker Desktop\*\* rodando na máquina host (Windows/Linux/Mac).



\* \*\*PowerShell\*\* ou Terminal para execução dos comandos.



\## 1. Estrutura de Diretórios



Para garantir a persistência dos dados e organizar o projeto, criamos diretórios específicos para atuar como volumes (\*bind mounts\*) dos contêineres.



No PowerShell, crie a estrutura com o seguinte comando:



```

mkdir glpi-data, db-glpi-data, zabbix-data, db-zabbix-data, scripts



```



\## 2. Variáveis de Ambiente e Segurança



Para manter as credenciais seguras e fora do código-fonte, utilizamos um arquivo `.env`.



Crie um arquivo chamado `.env` na raiz do projeto com o seguinte conteúdo:



```

\# ==============================

\# CONFIGURAÇÕES DO GLPI

\# ==============================

GLPI\_DB\_ROOT\_PASSWORD=glpi\_root\_secure\_pass

GLPI\_DB\_DATABASE=glpidb

GLPI\_DB\_USER=glpi\_user

GLPI\_DB\_PASSWORD=glpi\_secure\_pass

GLPI\_TIMEZONE=America/Sao\_Paulo



\# ==============================

\# CONFIGURAÇÕES DO ZABBIX

\# ==============================

ZABBIX\_DB\_ROOT\_PASSWORD=zabbix\_root\_secure\_pass

ZABBIX\_DB\_DATABASE=zabbix

ZABBIX\_DB\_USER=zabbix

ZABBIX\_DB\_PASSWORD=zabbix\_secure\_pass

ZABBIX\_TIMEZONE=America/Sao\_Paulo



```



\*\*Importante:\*\* Crie também um arquivo `.gitignore` e adicione a linha `.env` dentro dele para evitar subir senhas para o repositório no GitHub.



\## 3. Arquivo Docker Compose



Crie o arquivo `docker-compose.yml` na raiz do projeto. Ele centraliza a subida dos dois sistemas e os conecta através de uma rede \*bridge\* chamada `ti-network`.



```

services:

&#x20; # ==============================

&#x20; # STACK GLPI

&#x20; # ==============================

&#x20; glpi-db:

&#x20;   image: mariadb:10.11

&#x20;   container\_name: glpi-db

&#x20;   environment:

&#x20;     - MYSQL\_ROOT\_PASSWORD=${GLPI\_DB\_ROOT\_PASSWORD}

&#x20;     - MYSQL\_DATABASE=${GLPI\_DB\_DATABASE}

&#x20;     - MYSQL\_USER=${GLPI\_DB\_USER}

&#x20;     - MYSQL\_PASSWORD=${GLPI\_DB\_PASSWORD}

&#x20;   volumes:

&#x20;     - ./db-glpi-data:/var/lib/mysql

&#x20;   networks:

&#x20;     - ti-network

&#x20;   restart: unless-stopped



&#x20; glpi:

&#x20;   image: diouxx/glpi:latest

&#x20;   container\_name: glpi

&#x20;   ports:

&#x20;     - "80:80"

&#x20;   environment:

&#x20;     - TIMEZONE=${GLPI\_TIMEZONE}

&#x20;   volumes:

&#x20;     - ./glpi-data:/var/www/html/glpi

&#x20;   depends\_on:

&#x20;     - glpi-db

&#x20;   networks:

&#x20;     - ti-network

&#x20;   restart: unless-stopped



&#x20; # ==============================

&#x20; # STACK ZABBIX

&#x20; # ==============================

&#x20; zabbix-db:

&#x20;   image: mariadb:10.11

&#x20;   container\_name: zabbix-db

&#x20;   environment:

&#x20;     - MYSQL\_ROOT\_PASSWORD=${ZABBIX\_DB\_ROOT\_PASSWORD}

&#x20;     - MYSQL\_USER=${ZABBIX\_DB\_USER}

&#x20;     - MYSQL\_PASSWORD=${ZABBIX\_DB\_PASSWORD}

&#x20;     - MYSQL\_DATABASE=${ZABBIX\_DB\_DATABASE}

&#x20;   volumes:

&#x20;     - ./db-zabbix-data:/var/lib/mysql

&#x20;   networks:

&#x20;     - ti-network

&#x20;   restart: unless-stopped



&#x20; zabbix-server:

&#x20;   image: zabbix/zabbix-server-mysql:alpine-7.0-latest

&#x20;   container\_name: zabbix-server

&#x20;   environment:

&#x20;     - DB\_SERVER\_HOST=zabbix-db

&#x20;     - MYSQL\_USER=${ZABBIX\_DB\_USER}

&#x20;     - MYSQL\_PASSWORD=${ZABBIX\_DB\_PASSWORD}

&#x20;   ports:

&#x20;     - "10051:10051"

&#x20;   depends\_on:

&#x20;     - zabbix-db

&#x20;   networks:

&#x20;     - ti-network

&#x20;   restart: unless-stopped



&#x20; zabbix-web:

&#x20;   image: zabbix/zabbix-web-nginx-mysql:alpine-7.0-latest

&#x20;   container\_name: zabbix-web

&#x20;   environment:

&#x20;     - DB\_SERVER\_HOST=zabbix-db

&#x20;     - MYSQL\_USER=${ZABBIX\_DB\_USER}

&#x20;     - MYSQL\_PASSWORD=${ZABBIX\_DB\_PASSWORD}

&#x20;     - ZBX\_SERVER\_HOST=zabbix-server

&#x20;     - PHP\_TZ=${ZABBIX\_TIMEZONE}

&#x20;   ports:

&#x20;     - "8081:8080" # Porta alterada para 8081 para evitar conflitos no host

&#x20;   depends\_on:

&#x20;     - zabbix-server

&#x20;   networks:

&#x20;     - ti-network

&#x20;   restart: unless-stopped



&#x20; zabbix-agent:

&#x20;   image: zabbix/zabbix-agent:alpine-7.0-latest

&#x20;   container\_name: zabbix-agent

&#x20;   environment:

&#x20;     - ZBX\_HOSTNAME=Zabbix server

&#x20;     - ZBX\_SERVER\_HOST=zabbix-server

&#x20;   networks:

&#x20;     - ti-network

&#x20;   restart: unless-stopped



networks:

&#x20; ti-network:

&#x20;   driver: bridge



```



\## 4. Executando o Ambiente



Para iniciar todos os contêineres, execute o comando:



```

docker compose up -d



```



\### 5. Acesso aos Sistemas



Alguns navegadores forçam a utilização de HTTPS ao digitar `localhost`. Para evitar o erro `ERR\_SSL\_PROTOCOL\_ERROR`, utilize o IP local diretamente (sem HTTPS):



\* \*\*GLPI:\*\* Acesse `http://127.0.0.1`



&#x20; \* Login padrão: `glpi` / Senha: `glpi`



\* \*\*Zabbix:\*\* Acesse `http://127.0.0.1:8081`



&#x20; \* Login padrão: `Admin` (A maiúsculo) / Senha: `zabbix`



\## 6. Troubleshooting e Correções Comuns (Lições Aprendidas)



\* \*\*Conflito de Porta:\*\* Se a porta `8080` já estiver em uso no Windows, o contêiner `zabbix-web` falhará ao iniciar. A solução foi alterar o mapeamento no `docker-compose.yml` para `8081:8080`.



\* \*\*Erro de Acesso ao Banco de Dados (Zabbix Server desligando):\*\* Se os contêineres foram iniciados primeiro sem o arquivo `.env` e depois alterados, as senhas antigas ficam salvas nas pastas físicas. O MariaDB não atualiza a senha de bancos já criados.



&#x20; \* \*Solução:\* Derrubar o ambiente (`docker compose down`), deletar as pastas físicas `db-zabbix-data` e `db-glpi-data`, recriá-las e subir os contêineres novamente (`docker compose up -d`) para forçar a criação com as novas senhas do `.env`.

