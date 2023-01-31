
<?php
  
  function getBorder($maxlengthBorder)
  {
    $border = "";
    for ($i=1;$i<=$maxlengthBorder;$i++) {
      $border .= "*";
      if ($i == $maxlengthBorder) {
        $border .= "\r\n";
      }
    }
    
    return $border;
  }
  
  function createSpacesNeeded($space)
  {
    $spaceNeeded = "";
    for($i = 0; $i < $space; $i++) {
      if($i < $space) {
        $spaceNeeded .= " ";
      }
    }
    return $spaceNeeded;
  }

  $arr = ["Hello", "World", "in", "a", "frame"];
  $rectangle = "";
  $index = 0;
  
  $maxlength = max(array_map('strlen', $arr));
  $maxlengthadd = max(array_map('strlen', $arr)) + 2;
  
  foreach($arr as $string) {
    if ($index == 0) {
      $rectangle .= getBorder($maxlengthadd);
    }
    
    if (strlen($string) == $maxlength) {
      $rectangle .= "*".$string."*\r\n";
    } else {
      $spaceNeeded = $maxlength - strlen($string);
      $rectangle .= "*".$string.createSpacesNeeded($spaceNeeded)."*\r\n";
    }
    
    if ($index == $maxlength - 1) {
      $rectangle .= getBorder($maxlengthadd);
    }
    
    $index++;
  }
  
  print_r($rectangle);
?>
