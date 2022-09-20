<?php
include("conn.php");

$veriler = $pdo->query("SELECT * from users")->fetchAll(PDO::FETCH_OBJ); //rehberdeki kisileri getir

echo json_encode($veriler); 

//$veriler->execute( $_POST );




