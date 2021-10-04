<?php
$arr=[1,2,3,4,5];
 $tmp = '';    $i = 0;

   while (isset($arr[$i])) {
        $tmp .= $arr[$i];
        $i++;
    }

echo "The Output is :" . $i;
?>