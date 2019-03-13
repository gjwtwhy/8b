<?php
/**
 * Created by PhpStorm.
 * User: guoju
 * Date: 2019/3/13
 * Time: 8:39
 */
/**
 * @param $n
 */
$a = mathone(5);
echo $a;
function mathone($n){
    if ($n==1){
        return 1;
    } else {
        return $n*mathone($n-1);
    }
}


