<?php

$searchQuery = " ORDER BY `state_name` ASC ";
if (isset($_POST["searchKey"]) && $_POST["searchKey"] != '') {
    $searchKey = $_POST["searchKey"];
    $searchQuery = " WHERE `state_name`  LIKE  '%$searchKey%' ";
}

//Verify State List
$queryStateList = "SELECT `state_id`, `state_name`, `state_zone`, 
                    `state_status`, `state_updated_at` 
                     FROM `tbl_state` $searchQuery ";
$statementStateList = $link->prepare($queryStateList);
$statementStateList->execute();
$resultStateList = $statementStateList->fetchAll();
$data = array();
if ($statementStateList->rowCount() > 0) {
    foreach ($resultStateList as $row) {
        $stateId = $row["state_id"];
        $stateListData = array();
        $stateListData['stateId'] = $row["state_id"];
        $stateListData['stateName'] = ($row["state_name"] == null ? "" : $row["state_name"]);
        $stateListData['stateZone'] = ($row["state_zone"] == null ? "" : $row["state_zone"]);
        $stateListData['stateStatus'] = ($row["state_status"] == null ? "" : $row["state_status"]);
        $stateListData['stateUpdatedAt'] = ($row["state_updated_at"] == null ? "" : $row["state_updated_at"]);

        $data[] = $stateListData;

    }
    $returnCode = 1;
    $message = 'state List Found';
    return response($returnCode, $message, $data);
} else {
    $returnCode = 0;
    $message = 'state List Not Found';
    $data = array();
    return response($returnCode, $message, $data);
}
function response($o_returnCode, $o_message, $o_data)
{
    $o_response['returnCode'] = $o_returnCode;
    $o_response['message'] = $o_message;
    $o_response['data'] = $o_data;
    echo json_encode($o_response);
}

?>