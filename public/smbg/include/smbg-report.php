<?php

$postFields = 'model=' . $model
    . '&userReportCode=' . $_REQUEST["userReportCode"];

include 'call-curl.php';

// further processing ....
switch ($result->returnCode) {
    case 0:
        $smbgReport = $result->data;
        $_SESSION['message'] = $result->message;
        $_SESSION['messageType'] = $result->returnCode;
        header('Location: ../report.php');
        break;
    case 1:
        $smbgReport = $result->data;
        $output = '';
        $output .= '
        <html>
            <head>
                <style>
                    #div1 {
            
                        width: 500px;
            
                        text-overflow: clip;
                        border: 1px solid #000000;
                    }
            
                    #div2 {
                        white - space: nowrap;
                        width: 12em;
                        overflow: hidden;
                        text - overflow: ellipsis;
                        border: 1px solid #000000;
                    }
            
                </style>
            </head>
            <body>
                <table class="table" border = "1" >
                    <tr>
                        <th style="background-color: #B8CCE4"><b > Sr NO. </b ></th >
                        <th style="background-color: #B8CCE4"><b > Name  </b ></th >
                        <th style="background-color: #B8CCE4"><b > Mobile No </b ></th >
                        <th style="background-color: #B8CCE4"><b > State </b ></th >
                        <th style="background-color: #B8CCE4"><b > Place </b ></th >
                        <th style="background-color: #B8CCE4"><b > Date </b ></th >
                    </tr >';
                    $counter = '1';
                    $viewReportDataSize = count($smbgReport);
                    for ($i = 0; $i < $viewReportDataSize; $i++) {
                        $ReportData = $smbgReport[$i];
                        $output .= "<tr>
                            <td> $counter </td>
                            <td> $ReportData->userName </td>
                            <td> $ReportData->userMobileNo </td>
                            <td> $ReportData->userState </td>
                            <td> $ReportData->userPlace </td>
                            <td> $ReportData->userDate </td>        
                        </tr>";
                        $counter++;
                    }
                    $output .= '
                </table>
            </body>
        </html>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=smbg-report.xls ");
        echo $output;
        break;
    case 2:
        session_destroy();
        header('Location: ../index.php');
        break;
    default:
        $_SESSION['message'] = $result->message;
        $_SESSION['messageType'] = $result->returnCode;
        header('Location: ../index.php');
}

?>