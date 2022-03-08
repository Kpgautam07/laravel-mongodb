<?php
//Website Name
$websiteName = "https://www.intascareforyou.com/smbg";

//Current URL
$current_url = $websiteName . "/api/";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $current_url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response);
?>