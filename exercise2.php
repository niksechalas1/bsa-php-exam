<?php

  function merge($arr1, $arr2)
  {
    
    $new = [];
    for ($i=0; $i<count($arr1); $i++) {
     $new[] = $arr1[$i];
     $new[] = $arr2[$i];
    }
    
    return $new;
  }
  $arr1 = ['a', 'b', 'c'];
  $arr2 = [1 ,2 ,3];
  
  print_r(merge($arr1, $arr2));
?>
