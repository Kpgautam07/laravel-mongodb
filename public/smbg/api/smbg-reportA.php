<?php
if (isset($_POST['userReportCode'])) {
    $userReportCode = $_POST['userReportCode'];

    if ($userReportCode == "SMBG2019") {
        //SMBG Report List
        $querySMBGReportList = "SELECT `user_id`, `user_name`, `user_mobile_no`, 
                                `user_place`, `state_id`, `user_state`, 
                                `user_updated_at` 
                                FROM `tbl_user`";
        $statementSMBGReportList = $link->prepare($querySMBGReportList);
        $statementSMBGReportList->execute();
        $resultSMBGReportList = $statementSMBGReportList->fetchAll();
        $data = array();
        if ($statementSMBGReportList->rowCount() > 0) {
            foreach ($resultSMBGReportList as $row) {
                $smbgReport = array();
                $stateId = ($row["state_id"] == null ? "" : $row["state_id"]);

                //State Name List
                $queryStateNameList = "SELECT `state_id`, `state_name`, `state_zone`, 
                                          `state_status`, `state_updated_at` 
                                          FROM `tbl_state` 
                                          WHERE `state_id` = '$stateId'";
                $statementStateNameList = $link->prepare($queryStateNameList);
                $statementStateNameList->execute();
                $resultStateNameList = $statementStateNameList->fetchAll();
                if ($statementStateNameList->rowCount() > 0) {
                    foreach ($resultStateNameList as $rowStateName) {
                        $stateName = ($rowStateName["state_name"] == null ? "" : $rowStateName["state_name"]);
                    }
                } else{
                    $stateName = "No State";
                }

                $smbgReport['userId'] = ($row["user_id"] == null ? "" : $row["user_id"]);
                $smbgReport['userName'] = ($row["user_name"] == null ? "" : $row["user_name"]);
                $smbgReport['userMobileNo'] = ($row["user_mobile_no"] == null ? "" : $row["user_mobile_no"]);
                $smbgReport['userPlace'] = ($row["user_place"] == null ? "" : $row["user_place"]);
                $smbgReport['stateId'] = ($row["state_id"] == null ? "" : $row["state_id"]);
                $smbgReport['userState'] = $stateName;
                $smbgReport['userDate'] = date("d-m-Y", strtotime($row["user_updated_at"]));

                $data[] = $smbgReport;
            }
            $returnCode = 1;
            $message = 'Report Found';
            return response1($returnCode, $message, $data);
        } else {
            $returnCode = 0;
            $message = 'Report Not Found';
            $data = array();
            return response1($returnCode, $message, $data);
        }
    } else {
        $returnCode = 0;
        $message = 'Report Code wrong.';
        $data = array();
        return response1($returnCode, $message, $data);
    }
} else {
    $returnCode = 0;
    $message = 'Required field missing';
    $data = array();
    return response1($returnCode, $message, $data);
}
function response1($o_returnCode, $o_message, $o_data)
{
    $o_response['returnCode'] = $o_returnCode;
    $o_response['message'] = $o_message;
    $o_response['data'] = $o_data;
    return json_encode($o_response);
}
?>