<?php
$model = "viewStateNameList";
$postFields = 'model=' . $model;

include 'call-curl.php';

// further processing ....
if ($result->returnCode == 1) {
    $stateNameData = $result->data;
} else {
    $stateNameData = null;
}
?>