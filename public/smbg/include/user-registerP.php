<?php

$postFields = 'model=' . $model
    . '&userName=' . $_REQUEST["userName"]
    . '&userMobileNo=' . $_REQUEST["userMobileNo"]
    . '&userPlace=' . $_REQUEST["userPlace"]
    . '&userStateId=' . $_REQUEST["userStateId"];

include 'call-curl.php';

//Further processing
switch ($result->returnCode) {
    case 0:
        $_SESSION['message'] = $result->message;
        $_SESSION['messageType'] = $result->returnCode;
        header('Location: ../index.php');
        break;
    case 1:
        $user = $result->data;
        $_SESSION['userAccessToken'] = $user->userId;
        $_SESSION['userId'] = $user->userName;
        $_SESSION['userName'] = $user->userMobileNo;
        $_SESSION['userHospitalName'] = $user->userPlace;
        $_SESSION['userSpecialty'] = $user->userStateId;

        $_SESSION['message'] = $result->message;
        $_SESSION['messageType'] = $result->returnCode;
        header('Location: ../dashboard.php');
        break;
    case 2:
        $_SESSION['message'] = $result->message;
        $_SESSION['messageType'] = $result->returnCode;
        header('Location: ../index.php');
        break;
    default:
        $_SESSION['message'] = $result->message;
        $_SESSION['messageType'] = $result->returnCode;
        header('Location: ../index.php');
}
?>