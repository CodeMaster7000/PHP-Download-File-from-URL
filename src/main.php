<?php 
$url = 
'https://avatars.githubusercontent.com/u/95772109?v=4'; 

$ch = curl_init($url); 
$dir = './'; 
$file_name = basename($url); 

$save_file_loc = $dir . $file_name; 
$fp = fopen($save_file_loc, 'wb'); 

curl_setopt($ch, CURLOPT_FILE, $fp); 
curl_setopt($ch, CURLOPT_HEADER, 0); 

curl_exec($ch); 

curl_close($ch); 

fclose($fp); 
?>
