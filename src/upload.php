<?php
// Defina o timezone para garantir o nome correto com data/hora local
date_default_timezone_set('America/Sao_Paulo');

// Diretório onde os arquivos serão armazenados
$targetDir = "/projeto/medlink/data/";

// Verifique se o diretório existe, caso contrário, crie-o
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Verifique se o arquivo foi enviado corretamente
if (isset($_FILES['profileImage'])) {
    $error = $_FILES['profileImage']['error'];
    if ($error === UPLOAD_ERR_OK) {
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
            http_response_code(500); // Falha ao mover o arquivo
            echo "Falha ao salvar o arquivo.";
        }
    } else {
        // Exibe o erro específico relacionado ao upload
        echo "Erro no upload: " . $error;
    }
} else {
    http_response_code(400); // Nenhum arquivo foi enviado
    echo "Nenhum arquivo foi enviado ou houve um erro no envio.";
}
?>
