# Ambiente Integrado Zabbix e GLPI com Docker

Este projeto consiste na orquestração de um ambiente de TI completo contendo o **GLPI** (Sistema de Gestão de Serviços de TI - ITSM) e o **Zabbix** (Sistema de Monitoramento), utilizando o Docker Compose.

O objetivo principal deste laboratório é manter os dois sistemas rodando na mesma rede Docker e integrá-los para que falhas identificadas pelo Zabbix (como erros em rotinas de backup) abram chamados automaticamente no GLPI.

## Pré-requisitos

* **Docker Desktop** rodando na máquina host (Windows/Linux/Mac).

* **PowerShell** ou Terminal para execução dos comandos.

## 1. Estrutura de Diretórios

Para garantir a persistência dos dados e organizar o projeto, criamos diretórios específicos para atuar como volumes (*bind mounts*) dos contêineres.

No PowerShell, crie a estrutura com o seguinte comando:

```
mkdir glpi-data, db-glpi-data, zabbix-data, db-zabbix-data, scripts

```

## 2. Variáveis de Ambiente e Segurança

Para manter as credenciais seguras e fora do código-fonte, utilizamos um arquivo `.env`.

Crie um arquivo chamado `.env` na raiz do projeto com o seguinte conteúdo:

```
# ==============================
# CONFIGURAÇÕES DO GLPI
# ==============================
GLPI_DB_ROOT_PASSWORD=glpi_root_secure_pass
GLPI_DB_DATABASE=glpidb
GLPI_DB_USER=glpi_user
GLPI_DB_PASSWORD=glpi_secure_pass
GLPI_TIMEZONE=America/Sao_Paulo

# ==============================
# CONFIGURAÇÕES DO ZABBIX
# ==============================
ZABBIX_DB_ROOT_PASSWORD=zabbix_root_secure_pass
ZABBIX_DB_DATABASE=zabbix
ZABBIX_DB_USER=zabbix
ZABBIX_DB_PASSWORD=zabbix_secure_pass
ZABBIX_TIMEZONE=America/Sao_Paulo

```

**Importante:** Crie também um arquivo `.gitignore` e adicione a linha `.env` dentro dele para evitar subir senhas para o repositório no GitHub.

## 3. Arquivo Docker Compose

Crie o arquivo `docker-compose.yml` na raiz do projeto. Ele centraliza a subida dos dois sistemas e os conecta através de uma rede *bridge* chamada `ti-network`.

```
services:
  # ==============================
  # STACK GLPI
  # ==============================
  glpi-db:
    image: mariadb:10.11
    container_name: glpi-db
    environment:
      - MYSQL_ROOT_PASSWORD=${GLPI_DB_ROOT_PASSWORD}
      - MYSQL_DATABASE=${GLPI_DB_DATABASE}
      - MYSQL_USER=${GLPI_DB_USER}
      - MYSQL_PASSWORD=${GLPI_DB_PASSWORD}
    volumes:
      - ./db-glpi-data:/var/lib/mysql
    networks:
      - ti-network
    restart: unless-stopped

  glpi:
    image: diouxx/glpi:latest
    container_name: glpi
    ports:
      - "80:80"
    environment:
      - TIMEZONE=${GLPI_TIMEZONE}
    volumes:
      - ./glpi-data:/var/www/html/glpi
    depends_on:
      - glpi-db
    networks:
      - ti-network
    restart: unless-stopped

  # ==============================
  # STACK ZABBIX
  # ==============================
  zabbix-db:
    image: mariadb:10.11
    container_name: zabbix-db
    environment:
      - MYSQL_ROOT_PASSWORD=${ZABBIX_DB_ROOT_PASSWORD}
      - MYSQL_USER=${ZABBIX_DB_USER}
      - MYSQL_PASSWORD=${ZABBIX_DB_PASSWORD}
      - MYSQL_DATABASE=${ZABBIX_DB_DATABASE}
    volumes:
      - ./db-zabbix-data:/var/lib/mysql
    networks:
      - ti-network
    restart: unless-stopped

  zabbix-server:
    image: zabbix/zabbix-server-mysql:alpine-7.0-latest
    container_name: zabbix-server
    environment:
      - DB_SERVER_HOST=zabbix-db
      - MYSQL_USER=${ZABBIX_DB_USER}
      - MYSQL_PASSWORD=${ZABBIX_DB_PASSWORD}
    ports:
      - "10051:10051"
    depends_on:
      - zabbix-db
    networks:
      - ti-network
    restart: unless-stopped

  zabbix-web:
    image: zabbix/zabbix-web-nginx-mysql:alpine-7.0-latest
    container_name: zabbix-web
    environment:
      - DB_SERVER_HOST=zabbix-db
      - MYSQL_USER=${ZABBIX_DB_USER}
      - MYSQL_PASSWORD=${ZABBIX_DB_PASSWORD}
      - ZBX_SERVER_HOST=zabbix-server
      - PHP_TZ=${ZABBIX_TIMEZONE}
    ports:
      - "8081:8080" # Porta alterada para 8081 para evitar conflitos no host
    depends_on:
      - zabbix-server
    networks:
      - ti-network
    restart: unless-stopped

  zabbix-agent:
    image: zabbix/zabbix-agent:alpine-7.0-latest
    container_name: zabbix-agent
    environment:
      - ZBX_HOSTNAME=Zabbix server
      - ZBX_SERVER_HOST=zabbix-server
    networks:
      - ti-network
    restart: unless-stopped

networks:
  ti-network:
    driver: bridge

```

## 4. Executando o Ambiente

Para iniciar todos os contêineres, execute o comando:

```
docker compose up -d

```

### 5. Acesso aos Sistemas

Alguns navegadores forçam a utilização de HTTPS ao digitar `localhost`. Para evitar o erro `ERR_SSL_PROTOCOL_ERROR`, utilize o IP local diretamente (sem HTTPS):

* **GLPI:** Acesse `http://127.0.0.1`

  * Login padrão: `glpi` / Senha: `glpi`

* **Zabbix:** Acesse `http://127.0.0.1:8081`

  * Login padrão: `Admin` (A maiúsculo) / Senha: `zabbix`

## 6. Troubleshooting e Correções Comuns (Lições Aprendidas)

* **Conflito de Porta:** Se a porta `8080` já estiver em uso no Windows, o contêiner `zabbix-web` falhará ao iniciar. A solução foi alterar o mapeamento no `docker-compose.yml` para `8081:8080`.

* **Erro de Acesso ao Banco de Dados (Zabbix Server desligando):** Se os contêineres foram iniciados primeiro sem o arquivo `.env` e depois alterados, as senhas antigas ficam salvas nas pastas físicas. O MariaDB não atualiza a senha de bancos já criados.

  * *Solução:* Derrubar o ambiente (`docker compose down`), deletar as pastas físicas `db-zabbix-data` e `db-glpi-data`, recriá-las e subir os contêineres novamente (`docker compose up -d`) para forçar a criação com as novas senhas do `.env`.