<?php
// Defina o timezone para garantir o nome correto com data/hora local
date_default_timezone_set('America/Sao_Paulo');

// Diretório onde os arquivos serão armazenados
$targetDir = "/projeto/medlink/data/uploads/";

// Verifique se o diretório existe, caso contrário, crie-o
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Verifique se o arquivo foi enviado
if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] == 0) {
    $fileName = $_FILES['profileImage']['name'];
    $fileTmpPath = $_FILES['profileImage']['tmp_name'];
    
    // Defina o formato do nome do arquivo usando a data e hora atuais
    $newFileName = date('d-m-Y_H-i') . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
    
    // Defina o caminho completo do arquivo de destino
    $targetFilePath = $targetDir . $newFileName;
    
    // Tente mover o arquivo temporário para o diretório final
    if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
        http_response_code(200); // Sucesso
        echo "Arquivo salvo com sucesso.";
    } else {
        http_response_code(500); // Falha
        echo "Falha ao salvar o arquivo.";
    }
} else {
    http_response_code(400); // Erro no envio
    echo "Nenhum arquivo foi enviado ou houve um erro no envio.";
}
?>
