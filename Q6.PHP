<?php

$nums=[2,7,11,15];
$target = 9;

function twoSum($nums, $target) {
    if (count($nums) < 2 || count($nums) > 103) { 
        return '不符合限制條件';
    }
    $c =[];
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] < -109 || $nums[$i] > 109) {
            return '不符合限制條件';
        }
        $b = $target - $nums[$i];
        if (array_key_exists($b, $c)) {
            return array($c[$b], $i);
        }
        $c[$nums[$i]] = $i;
    }
    return '不符合限制條件';
}
print_r(twoSum($nums, $target));
?>