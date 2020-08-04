<?php
//array_merge
$sports = ["baseball","soccer","rugby"];
$sports2 = ["tennis","basketball"];

$addsports = array_merge($sports, $sports2);
print_r($addsports);
