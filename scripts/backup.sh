#!/bin/bash

# Diretórios e Configurações
BACKUP_DIR="/var/backups/ti"
DATE=$(date +%Y%m%d_%H%M%S)
LOG_FILE="$BACKUP_DIR/backup_$DATE.log"

# Cria a pasta de backups se não existir
mkdir -p "$BACKUP_DIR"

echo "=== Início do Backup: $(date) ===" > "$LOG_FILE"

# 1. Backup do Banco de Dados do GLPI
docker exec glpi-db mariadb-dump -u glpi_user -pglpi_secure_pass glpidb > "$BACKUP_DIR/glpi_db_$DATE.sql" 2>> "$LOG_FILE"
if [ $? -eq 0 ]; then
    echo "[SUCESSO] Dump do banco GLPI concluído." >> "$LOG_FILE"
else
    echo "[ERRO] Falha no dump do banco GLPI." >> "$LOG_FILE"
    ERRO=1
fi

# 2. Backup do Banco de Dados do Zabbix
docker exec zabbix-db mariadb-dump -u zabbix -pzabbix_secure_pass zabbix > "$BACKUP_DIR/zabbix_db_$DATE.sql" 2>> "$LOG_FILE"
if [ $? -eq 0 ]; then
    echo "[SUCESSO] Dump do banco Zabbix concluído." >> "$LOG_FILE"
else
    echo "[ERRO] Falha no dump do banco Zabbix." >> "$LOG_FILE"
    ERRO=1
fi

# 3. Compactação das pastas de dados (Volumes)
tar -czf "$BACKUP_DIR/glpi_files_$DATE.tar.gz" -C . glpi-data 2>> "$LOG_FILE"
tar -czf "$BACKUP_DIR/zabbix_files_$DATE.tar.gz" -C . zabbix-data 2>> "$LOG_FILE"

# 4. Avaliação Final e Envio para o Zabbix (Zabbix Sender)
if [ -z "$ERRO" ]; then
    echo "[STATUS] Backup realizado com sucesso total." >> "$LOG_FILE"
    # Envia 1 (Sucesso) para o item Trapper do Zabbix
    docker exec zabbix-agent zabbix_sender -z zabbix-server -s "Servidor GLPI" -k backup.glpi.status -o 1
else
    echo "[STATUS] O backup terminou com erros." >> "$LOG_FILE"
    # Envia 0 (Falha) para disparar a trigger e abrir o chamado no GLPI
    docker exec zabbix-agent zabbix_sender -z zabbix-server -s "Servidor GLPI" -k backup.glpi.status -o 0
fi

echo "=== Fim do Backup: $(date) ===" >> "$LOG_FILE"