<?php
   // $url = "https://www.ironsky-fitness.com/programming";
    //$url = preg_replace("/ /", "%20", $url);
    //$data = file_get_contents($url);

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://www.ironsky-fitness.com/programming');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

    echo $query;
?>
