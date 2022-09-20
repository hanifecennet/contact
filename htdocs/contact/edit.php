<?php

    include 'conn.php';

    $veriler = $pdo->query("SELECT * from users")->fetchAll(PDO::FETCH_OBJ);

    $data["id"] = $_POST["id"];
    $data["name"] = $_POST["name"];
    $data["username"] = $_POST["username"];
    $data["email"] = $_POST["email"];
    $data["phone"] = $_POST["phone"];
    $image = $_FILES['image']['name'];

    $imagePath = 'uploads/'.$image;
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, $imagePath);
    $data["image"] = $image;

    $update = $pdo->prepare("UPDATE users SET name=:name, username=:username, email=:email, phone=:phone, image=:image  WHERE id=:id");
    $update->execute($data);
    

