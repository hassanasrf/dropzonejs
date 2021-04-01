<?php
  
$uploadDir = 'upload';
  
if ($_POST['request'] == "add") {
    if (!empty($_FILES)) {
     $tmpFile = $_FILES['file']['tmp_name'];
     $filename = $uploadDir.'/'.$_FILES['file']['name'];
     move_uploaded_file($tmpFile,$filename);
    }
}else{
    $fileName = $uploadDir.'/'.$_POST['name'];  
    unlink($fileName); 
}
  
?>