<?php
  $a=[77,5,5,22,13,55,97,4,796,1,0,9];
  for($i=0 ;$i<count($a);$i++){
    for($b=0; $b<count($a)-$i - 1;$b++){
        if($a[$b]>$a[$b+1]){
            $c=$a[$b];
            $a[$b]=$a[$b+1];
            $a[$b+1]=$c;
        }
    }
  }
  print_r($a) ;
?>