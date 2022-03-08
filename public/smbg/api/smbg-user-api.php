<?php
include("../config/connection.php");

if (isset($_REQUEST['model'])) {
    $model = $_REQUEST["model"];

    //State
    $viewStateNameList = "viewStateNameList";
    //Register
    $userRegister = "userRegister";
    //Report
    $userReport = "userReport";

    if ($model == $viewStateNameList || $model == $userRegister || $model == $userReport) {
        switch ($model) {
            //State
            case $viewStateNameList:
                echo(include 'view-state-nameA.php');
                break;
            //Register
            case $userRegister:
                echo(include 'user-registerA.php');
                break;
            //Report
            case $userReport:
                echo(include 'smbg-reportA.php');
                break;
        }
    } else {
        $o_returnCode = 2;
        $o_message = "Session expired. Please Login again";
        $o_data = "";
        response2($o_returnCode, $o_message, $o_data);
    }
} else {
    $o_returnCode = 0;
    $o_message = "You entered wrong model";
    $o_data = (object)null;
    response2($o_returnCode, $o_message, $o_data);
}

function response2($o_returnCode, $o_message, $o_data)
{
    $o_response['returnCode'] = $o_returnCode;
    $o_response['message'] = $o_message;
    $o_response['data'] = $o_data;

    $json_encode = json_encode($o_response);
    echo $json_encode;
}

?>