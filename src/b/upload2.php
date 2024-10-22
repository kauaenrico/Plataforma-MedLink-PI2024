<html>
<body>
<?php

/* Get the name of the file uploaded to Apache */
$filename = $_FILES['file']['name'];

/* Prepare to save the file upload to the upload folder */
$location = "/projeto/medlink/data/uploads/".$filename;

/* Permanently save the file upload to the upload folder */
if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) { 
    echo '<p>The HTML5 and PHP file upload was a success!</p>'; 
} else { 
    echo '<p>The PHP and HTML5 file upload failed.</p>'; 
    echo '<p>Error: ' . $_FILES['file']['error'] . '</p>'; // Exibe o erro do upload
}

?>
</body>
</html>
