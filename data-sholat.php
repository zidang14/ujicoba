<?php
$data =
    json_decode(file_get_contents("http://muslimsalat.com/".$_GET['location=bali'].".json?key=780cfb85f53065500b200a50679203cd"), TRUE);
$shubuh = $data['items'][0]['fajr'];
$dzuhur = $data['items'][0]['dhuhr'];
$ashar = $data['items'][0]['asr'];
$maghrib = $data['items'][0]['maghrib'];
$isya = $data['items'][0]['isha'];
?>