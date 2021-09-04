<?php
$url = "http://worldtimeapi.org/api/timezone/Asia/Jakarta";
$kontenwib = file_get_contents($url);
$hasilwib = json_decode($kontenwib, true);
$datewib = new DateTime(@$hasilwib["datetime"]);
echo $datewib->format('Y-m-d');
echo "<br><br>";
echo $datewib->format('H:i:s');
