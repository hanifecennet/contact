<?php
    include 'conn.php';

    $veriler = $pdo->query("SELECT * from users")->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($veriler);

    $name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    //$photo = $_POST['photo'];
    //$image = $_POST['image']

    //$target = "users/".basename($photo);
    $veriler = $pdo->prepare(" INSERT INTO users (name, username, email, phone) VALUES(:name,:username,:email,:phone)"); //yeni kisi ekleme-postmanden
    $veriler->execute( $_POST );
?>