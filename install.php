<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn=new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS lunchesc126";
$conn->exec($sql);
echo "Your Database has been made!";
?>