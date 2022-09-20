<?php

  include 'conn.php';
	
  $image = $_FILES['image']['name'];
    //$name = $POST['name'];

   

	$imagePath = 'uploads/'.$image;
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name, $imagePath);

	$conn->query("INSERT INTO users(image)VALUES('".$image."')");
?>