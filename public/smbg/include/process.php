<?php

error_reporting(0);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_REQUEST['model'])) {
    $model = $_REQUEST['model'];

    //Register
    $userRegister = "userRegister";
    //Report
    $userReport = "userReport";

    switch ($model) {
        //Register
        case $userRegister:
            include 'user-registerP.php';
            break;
        //Report
        case $userReport:
            include 'smbg-report.php';
            break;
    }
} else {
    //echo "No Model";
}

?>