<?php
//echo "<meta charset='utf-8'>";
//===========================================================================
$date = date("Y-m-d");

$table = array (
	"beginDate" => $date,
	"endDate" => $date
	);
// json encode data
$data_string = json_encode($table); 
// the token
$token = 'your token here';
// set up the curl resource
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://192.168.0.247:8080/SmartQWs/report/qdetails");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
//curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string)                                                                       
));       
// execute the request
$out = curl_exec($ch);

//echo $out;
// output the profile information - includes the header
//echo $output."<br>";
//$sub = substr($output,9)

$Qdetail = "[";
$subQdetail = explode(":[",$out);
$Qdetail .= substr($subQdetail[1],0,-1);

echo $Qdetail;

?>