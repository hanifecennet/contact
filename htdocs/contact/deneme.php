<?php //calisiyor

  include 'conn.php';
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file_name"]["tmp_name"]);
  //$image = $_POST['file_name'];
  //$imagePath = "uploads/".$image;
  //$realImage = base64_decode($image);
  
  move_uploaded_file($_FILES['file_name']['tmp_name'],$target_file);
  //$connect->query("INSERT INTO images (file_name) VALUES (:file_name)");
  echo $_FILES['file_name']['tmp_name'];

?>