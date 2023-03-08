<?php
  $a=[0,1,2,3,4,5,6,7,8,9];
  $even=[];
  $odd=[];
  foreach ($a as $value) {
    if ($value % 2 == 0) {
      $even[] = $value;
    } else {
      $odd[] = $value;
    }
  }
//   1
echo array_sum($odd) - array_sum($even);
echo "<br/></br/>";
// 2
echo '奇數值：';
print_r($odd);
echo "<br/></br/>";
echo' 偶數值：';
print_r($even);
?>