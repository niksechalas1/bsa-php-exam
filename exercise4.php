
<?php
  $list = [
    [
      "grade" => 2,
      "name" => 'David'
    ],
    [
      "grade" => 1,
      "name" => 'Bert'
    ],
    [
      "grade" => 1,
      "name" => 'Ernie'
    ],
    [
      "grade" => 2,
      "name" => 'Andy'
    ],
    [
      "grade" => 1,
      "name" => 'Ana'
    ],
    [
      "grade" => 2,
      "name" => 'Bob'
    ],
  ];
  
  function compareByGrade($a, $b) {
    return strcmp($a["grade"], $b["grade"]);
  }
  usort($list, 'compareByGrade');
  
  function compareByName($a, $b) {
    return strcmp($a["name"], $b["name"]);
  }
  usort($list, 'compareByName');
  
  $new = [];
  
  foreach ($list as $ind) {
    $new[$ind["grade"]][] = $ind["name"];
  }
  print_r($new);
?>
