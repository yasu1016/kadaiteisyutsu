<?php
function max_array($arr)
{
    $max_number = $arr[0];
    //↑max_numberに0を代入しておく（0より小さい数字はないため）
    foreach ($arr as $a) {
        //$arrという配列から$aという要素を順番に取り出す
        if ($max_number < $a) {
            //もし$max_numberが取り出された要素$aより小さければ
            $max_number = $a;
        }
        //$aが$max_numberになる（代入される）
    }

    return $max_number;
}
echo max_array(array(1,2,3,4,5,6));
//array(1,2,3,4,5,6)という配列をもつmax_array
