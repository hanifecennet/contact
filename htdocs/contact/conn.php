<?php 
header('Content-Type: application/json; charset=utf-8');

try 
{
    $pdo = new PDO("mysql:host=localhost;dbname=contact",'root',''); //her veritabanına gore degisir
    $pdo->query("set names utf8"); //klasik
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //klasik
} 
catch (PDOException $error)
{
    echo "bakım çalışması nedeniyle geçici süreliğine hizmet veremiyoruz... <!--db hatası-->";
    exit();
    //echo '<p>' . $error -> getMessage() . '</p>';
}
