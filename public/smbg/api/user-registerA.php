<?php

if (!empty($_POST['userName']) && !empty($_POST['userMobileNo'])
    && !empty($_POST['userPlace']) && !empty($_POST['userStateId'])
) {
    
    $currentTime = date("Y-m-d H:i:s");
    $userName = $_POST["userName"];
    $userMobileNo = $_POST["userMobileNo"];
    $userPlace = $_POST["userPlace"];
    $userStateId = $_POST["userStateId"];

    // Insert Into User Table
    $insertUser = $link->prepare("INSERT INTO `tbl_user` 
                        (`user_name`, `user_mobile_no`, `user_place`,
                        `state_id`, `user_updated_at`) 
                        VALUES(?, ?, ?, ?, ?)");
    $insertUser->execute(array("$userName", "$userMobileNo", "$userPlace",
        "$userStateId", "$currentTime"));
    if ($insertUser) {
        $userId = $link->lastInsertId();
        
        $returnCode = 1;
        $message = 'User Details Insert Successful';
        $data = array();
        $data['userId'] = $userId;
        $data['userName'] = $userName;
        $data['userMobileNo'] = $userMobileNo;
        $data['userPlace'] = $userPlace;
        $data['userStateId'] = $userStateId;
        $data['userUpdatedAt'] = strtotime($currentTime);
        return response($returnCode, $message, $data);
    } else {
        $returnCode = 0;
        $message = 'User Not Insert Successful';
        $data = (object)null;
        return response($returnCode, $message, $data);
    }
} else {
    $returnCode = 0;
    $message = 'Please fill all details';
    $data = (object)null;
    return response($returnCode, $message, $data);
}
function response($o_returnCode, $o_message, $o_data)
{
    $o_response['returnCode'] = $o_returnCode;
    $o_response['message'] = $o_message;
    $o_response['data'] = $o_data;

    return json_encode($o_response);
}

?>