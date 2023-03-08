<?php
  $a="人易科技:上機測試 - 演算法" ; 
//   1
  $a = str_replace(":","：",$a);
//   2
  $b= preg_split('/(\p{Han}|\p{P}|\s)/u',$a,-1, PREG_SPLIT_DELIM_CAPTURE| PREG_SPLIT_NO_EMPTY);
  $c=implode('',$b);
// 3
  $d=[];
  array_push ($d,$b[5],$b[6],$b[7],$b[8],$b[9]);
 
  $e=implode('',$d);
  $e= trim($e);
  print_r($e);
?>