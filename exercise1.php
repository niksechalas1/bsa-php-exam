<?php
  function translate($original)
  {
    $array = explode(" ", $original);
    $piglatin = "";
    foreach($array as $word)
    {
      $word = trim($word);
      $lasttwo = trim(substr($word, -2));
      $first = substr($word,0,1);
      $thsh = substr($word,1,2);
      $thshrest = substr($word,2, strlen($word)-2);
      $rest = substr($word,1,strlen($word)-1);
      if ($lasttwo == 'ay') {
        $removeday = substr($word, 0, -2);
        $lastchar = substr($removeday, -1);
        $removedlastchar = substr($removeday, 0, -1);
        $piglatin .= $lastchar.$removedlastchar. " ";
      } else {
        if ($word) {
          $piglatin .= (strlen($word)==1)?$first." ":$rest.$first. "ay ";
        }
      }
    }
    return $piglatin;
  }

  $normal = "The quick brown fox";
  $translated="Ackpay ymay oxbay ithway ivefay ozenday iquorlay ugsjay";

  echo ucfirst(strtolower(translate($normal))) . "\r\n";
  echo ucfirst(strtolower(translate($translated)));
?>
