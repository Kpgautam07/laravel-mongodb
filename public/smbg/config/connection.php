<?php
//CurrentTime Updated
date_default_timezone_set('Asia/Kolkata');

//Database Connection PDO
$dbhost = "localhost";
$dbname =  "intasp_smbg_db";
$dbusername =  "intasp_smbg";
$dbpassword = "QHFmdYi9#!ZW";

//Database Connection PDO
$link = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbusername, $dbpassword);
?>