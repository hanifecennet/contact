<?php 

	include 'conn.php';

	$data["id"] = $_POST["id"];
    
    $id = $pdo->prepare(" DELETE FROM users  WHERE id=:id"); //isteneni yap yazdir
    $id->execute( $_POST );