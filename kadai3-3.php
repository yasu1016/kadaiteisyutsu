<?php

function calculation($arr)
{
    $value = 1;
    //$valueはあとで積算されていくため最初は１を代入
    foreach ($arr as $a) {
        //$arrという配列から$aという要素を取り出し、順番に処理される
        $value *= $a;
        //ここで、$valueが「$value（1）×　$a（要素）」の意味になる
        //これによって1*1、1*3、3*5、15*7、105*9という意味になる　
    }
    return $value;
}
echo calculation(array(1, 3, 5 ,7, 9)) . "\n";
