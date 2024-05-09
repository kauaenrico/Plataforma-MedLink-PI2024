<?php
// Caminho para o arquivo de contador
$counterFile = 'assets/counter.txt';
$counter = file_get_contents($counterFile);
$counter++;
echo "Total de acessos: $counter";
// Salva o novo valor do contador no arquivo
file_put_contents($counterFile, $counter);
?>
