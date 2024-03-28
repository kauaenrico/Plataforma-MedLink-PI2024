#!/bin/bash
data=$(date +"%Y-%m-%d %H:%M:%S")
cd /var/www/html/UNISAL_Proj_5
git pull
echo "[$data] Pull UNISAL_Proj_5 Ok!" > /opt/scripts/pull_status.log
