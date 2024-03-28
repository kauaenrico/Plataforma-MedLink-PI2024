#!/bin/bash

header(){
clear
echo "###############################################"
echo ""
}

header
echo "Iniciando backup do diretório /etc/apache2..."
echo "#"


# Verifica se o diretório /opt/backups existe, senão, cria-o
if [ ! -d "/opt/backups" ]; then
    echo "Diretório de backups não encontrado. Criando..."
    echo "#"
    sudo mkdir -p /opt/backups
    echo "Diretório de backups criado em /opt/backups"
    echo "#"
fi

# Obtém a data atual
data=$(date +"%Y-%m-%d")

# Cria o arquivo ZIP com o diretório /etc/apache2 compactado e redireciona a saída para o arquivo de log
header
echo "Compactando o diretório /etc/apache2..."
echo "#"
sudo zip -r "/opt/backups/apache2_bkp_${data}.zip" /etc/apache2 > /opt/backups/backup_apache2.log 2>&1

echo "Backup concluído. Arquivo ZIP criado em /opt/backups."
