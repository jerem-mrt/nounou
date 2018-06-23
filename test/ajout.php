<?php 
$heureDreel = date_create_from_format("G:i",'12:00');
$heureFreel = date_create_from_format("G:i", '14:00');
$diff=date_diff($heureDreel,$heureFreel);
var_dump($diff);
?>