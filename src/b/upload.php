<?php
// Defina o timezone para garantir o nome correto com data/hora local
date_default_timezone_set('America/Sao_Paulo');

// Diretório onde os arquivos serão armazenados
$targetDir = "/projeto/medlink/data/";

// Verifique se o diretório existe, caso contrário, crie-o
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Debug: Exibe informações sobre o arquivo enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Método POST recebido.<br>";

    // Verifique se o campo 'profileImage' está presente no $_FILES
    if (isset($_FILES['profileImage'])) {
        echo "Arquivo 'profileImage' detectado no formulário.<br>";

        // Exibe detalhes do arquivo enviado
        echo "Detalhes do arquivo:<br>";
        echo "Nome original: " . $_FILES['profileImage']['name'] . "<br>";
        echo "Tipo: " . $_FILES['profileImage']['type'] . "<br>";
        echo "Tamanho: " . $_FILES['profileImage']['size'] . " bytes<br>";
        echo "Arquivo temporário: " . $_FILES['profileImage']['tmp_name'] . "<br>";
        echo "Erro no upload: " . $_FILES['profileImage']['error'] . "<br>";

        // Verifica se houve algum erro durante o upload
        $error = $_FILES['profileImage']['error'];
        if ($error === UPLOAD_ERR_OK) {
            echo "Nenhum erro detectado durante o upload.<br>";
            
            $fileName = $_FILES['profileImage']['name'];
            $fileTmpPath = $_FILES['profileImage']['tmp_name'];

            // Verifica se o arquivo temporário existe
            if (file_exists($fileTmpPath)) {
                echo "Arquivo temporário encontrado: " . $fileTmpPath . "<br>";

                // Defina o formato do nome do arquivo usando a data e hora atuais
                $newFileName = date('d-m-Y_H-i') . '.' . pathinfo($fileName, PATHINFO_EXTENSION);

                // Defina o caminho completo do arquivo de destino
                $targetFilePath = $targetDir . $newFileName;

                // Debug: Exibe o caminho completo onde o arquivo será salvo
                echo "Tentando salvar o arquivo em: " . $targetFilePath . "<br>";

                // Tente mover o arquivo temporário para o diretório final
                if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
                    http_response_code(200); // Sucesso
                    echo "Arquivo salvo com sucesso.<br>";
                } else {
                    http_response_code(500); // Falha ao mover o arquivo
                    echo "Falha ao salvar o arquivo. Verifique as permissões do diretório.<br>";
                }
            } else {
                echo "Arquivo temporário não encontrado: " . $fileTmpPath . "<br>";
            }
        } else {
            // Exibe o erro específico relacionado ao upload
            echo "Erro no upload: Código do erro " . $error . "<br>";
        }
    } else {
        echo "Nenhum arquivo 'profileImage' detectado no formulário.<br>";
    }
} else {
    echo "Nenhum envio de arquivo via POST detectado.<br>";
    http_response_code(400);
}
?>
