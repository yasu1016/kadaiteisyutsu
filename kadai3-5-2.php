<?php
//array_push
$fruits = ["banana", "melon", "strawberrry"];
//ここでecho $fruitsと入力しても表示されない理由は？
$addfruits = array_push($fruits, "pear", "apple");
print_r($fruits)."\n";
echo $addfruits."\n";
//なぜ５と表示されるのか？
