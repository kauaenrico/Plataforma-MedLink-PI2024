#!/bin/bash

backupfolder=/opt/backups
sqlfile=$backupfolder/all-database-$(date +%d-%m-%Y_%H-%M-%S).sql

header(){
clear
echo "###############################################"
echo ""
}

header
echo "Iniciando backup do MySQL"
echo "#"


# Verifica se o diretório /opt/backups existe, senão, cria-o
if [ ! -d "/opt/backups" ]; then
    echo "Diretório de backups não encontrado. Criando..."
    echo "#"
    sudo mkdir -p /opt/backups
    echo "Diretório de backups criado em /opt/backups"
    echo "#"
fi

# Cria o dump SQL
header
echo "Gerando dump do MySQL"
echo "#"
sudo mysqldump -u admin -punisal@2024 --all-databases > $sqlfile 

echo "Backup concluído. Arquivo de dump criado em /opt/backups."