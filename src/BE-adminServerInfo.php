<?php
// Executar Git Pull Log
$gitpull_run = shell_exec('cat /opt/scripts/pull_cron.log');

// Informações do Sistema Operacional
$so_name = php_uname('s');
$so_host = php_uname('n');
$so_version = php_uname('v');
$so_machine = php_uname('m');
$so_release = php_uname('r');

// Espaço em Disco
$disk_total = round(disk_total_space("/") / (1024 ** 3), 2) . ' GB';
$disk_free = round(disk_free_space("/") / (1024 ** 3), 2) . ' GB';
$disk_used = round((disk_total_space("/") - disk_free_space("/")) / (1024 ** 3), 2) . ' GB';

// Informações de Memória
$free = shell_exec('free -m');
$free = trim($free);
$free_arr = explode("\n", $free);
$mem = explode(" ", $free_arr[1]);
$mem = array_filter($mem);
$mem = array_merge($mem);
$mem_total = $mem[1] . ' MB';
$mem_used = $mem[2] . ' MB';
$mem_free = $mem[3] . ' MB';

// Informações de CPU
$load = sys_getloadavg();
$load_avg_1 = $load[0];
$load_avg_5 = $load[1];
$load_avg_15 = $load[2];

// Informações de Uptime
$uptime = shell_exec('uptime -p');
$uptime_since = shell_exec('uptime -s');

// Processos que mais consomem memória
$top_processes = shell_exec('ps aux --sort=-%mem | head -n 15');

// Todos os processos em execução
$all_processes = shell_exec('ps -eo pid,ppid,cmd,%mem,%cpu --sort=-%mem');

// Versões de Software
$php_version = phpversion();
$apache_version = apache_get_version();
$mysql_version = shell_exec('mysql -V');

// Incluir o arquivo HTML
include 'adminServerInfo.html';
