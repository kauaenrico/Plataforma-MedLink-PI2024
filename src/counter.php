<?php
// Caminho para o arquivo de contador
$counterFile = 'assets/counter.txt';

// Verifica se o arquivo existe
if (file_exists($counterFile)) {
    // Lê o valor atual do contador
    $counter = file_get_contents($counterFile);
    // Incrementa o contador
    $counter++;
} else {
    // Se o arquivo não existir, define o contador como 1
    $counter = 1;
}

// Salva o novo valor do contador no arquivo
file_put_contents($counterFile, $counter);

// Exibe o contador de acessos
echo "Total de acessos: $counter";
?>
