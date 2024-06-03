<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Servidor</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/zephyr/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Informações do Servidor</h1>
        
        <!-- Sistema Operacional -->
        <div class="card mt-3">
            <div class="card-header">Sistema Operacional</div>
            <div class="card-body">
                <p><strong>Nome do SO:</strong> <?php echo php_uname('s'); ?></p>
                <p><strong>Nome do Host:</strong> <?php echo php_uname('n'); ?></p>
                <p><strong>Versão do SO:</strong> <?php echo php_uname('v'); ?></p>
                <p><strong>Informação da Máquina:</strong> <?php echo php_uname('m'); ?></p>
                <p><strong>Release:</strong> <?php echo php_uname('r'); ?></p>
            </div>
        </div>

        <!-- Espaço em Disco -->
        <div class="card mt-3">
            <div class="card-header">Espaço em Disco</div>
            <div class="card-body">
                <p><strong>Espaço Total:</strong> <?php echo round(disk_total_space("/") / (1024 ** 3), 2) . ' GB'; ?></p>
                <p><strong>Espaço Livre:</strong> <?php echo round(disk_free_space("/") / (1024 ** 3), 2) . ' GB'; ?></p>
                <p><strong>Espaço Usado:</strong> <?php echo round((disk_total_space("/") - disk_free_space("/")) / (1024 ** 3), 2) . ' GB'; ?></p>
            </div>
        </div>

        <!-- Informações de Memória -->
        <div class="card mt-3">
            <div class="card-header">Informações de Memória</div>
            <div class="card-body">
                <?php
                $free = shell_exec('free -m');
                $free = (string)trim($free);
                $free_arr = explode("\n", $free);
                $mem = explode(" ", $free_arr[1]);
                $mem = array_filter($mem);
                $mem = array_merge($mem);
                $mem_total = $mem[1];
                $mem_used = $mem[2];
                $mem_free = $mem[3];
                ?>
                <p><strong>Memória Total:</strong> <?php echo $mem_total . ' MB'; ?></p>
                <p><strong>Memória Usada:</strong> <?php echo $mem_used . ' MB'; ?></p>
                <p><strong>Memória Livre:</strong> <?php echo $mem_free . ' MB'; ?></p>
            </div>
        </div>

        <!-- Informações de CPU -->
        <div class="card mt-3">
            <div class="card-header">Informações de CPU</div>
            <div class="card-body">
                <?php
                $load = sys_getloadavg();
                ?>
                <p><strong>Load Average (1 min):</strong> <?php echo $load[0]; ?></p>
                <p><strong>Load Average (5 min):</strong> <?php echo $load[1]; ?></p>
                <p><strong>Load Average (15 min):</strong> <?php echo $load[2]; ?></p>
            </div>
        </div>

        <!-- Informações de Uptime -->
        <div class="card mt-3">
            <div class="card-header">Uptime</div>
            <div class="card-body">
                <?php
                $uptime = shell_exec('uptime -p');
                $uptime_since = shell_exec('uptime -s');
                ?>
                <p><strong>Tempo de Uptime:</strong> <?php echo $uptime; ?></p>
                <p><strong>Desde:</strong> <?php echo $uptime_since; ?></p>
            </div>
        </div>

        <!-- Processos em Execução -->
        <div class="card mt-3">
            <div class="card-header">Processos em Execução</div>
            <div class="card-body">
                <?php
                $processes = shell_exec('ps aux --sort=-%mem | head -n 10');
                echo "<pre>$processes</pre>";
                ?>
            </div>
        </div>

        <!-- Versões do Software -->
        <div class="card mt-3">
            <div class="card-header">Versões do Software</div>
            <div class="card-body">
                <p><strong>Versão do PHP:</strong> <?php echo phpversion(); ?></p>
                <?php
                $apache_version = apache_get_version();
                ?>
                <p><strong>Versão do Apache:</strong> <?php echo $apache_version; ?></p>
            </div>
        </div>

    </div>
</body>
</html>
