<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "admin";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbadmin=$db_admin", $db_username, $db_password);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}