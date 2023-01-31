
<?php
  function getTotal($arr)
  {
    $total = 0;

    foreach ($arr as $num) {
      if (isDigitPresent($num, 8)) {
        $total += 5;
      } else {
        if (isNumEven($num)) {
          $total += 1;
        } else {
          $total += 3;
        }
      }
    }

    echo("Total: " . $total . "\r\n");
  }

  function isNumEven($number){
    if($number == 0)
        return 1;
    else if($number == 1)
        return 0;
    else if($number<0)
        return isNumEven(-$number);
    else
        return isNumEven($number-2);        
  }

  function isDigitPresent($x, $d)
  {
    while ($x > 0)
    {
        if ($x % 10 == $d)
            break;

        $x = $x / 10;
    }
    return ($x > 0);
  }

  $arr1 = [1,2,3,4,5,];
  $arr2 = [8,5,2];

  getTotal($arr1);
  getTotal($arr2);
?>
