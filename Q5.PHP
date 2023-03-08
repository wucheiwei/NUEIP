<?php
  $aArray = [77,5,5,22,13,55,97,4,796,1,0,9];
  $bArray= [0,1,2,3,4,5,6,7,8,9];
  $cArray = array ();
    foreach($aArray as $value){
      if(in_array($value,$bArray)){
        $cArray[] =$value;
      }
    }
  
  $dArray =array();
  foreach($aArray as $value){
    if(!in_array($value,$bArray)){
      $dArray[] =$value;
    }
  }
  
  $eArray = $aArray;
  foreach($bArray as $value){
    if(!in_array($value,$aArray)){
      $eArray[] =$value;
    }
  }
  print_r(array_unique($cArray));
  print_r($dArray);
  print_r($eArray);
?>