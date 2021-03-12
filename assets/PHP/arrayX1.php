<?php 
$motherArray = array(
  'age' => 50,
  'season' => 'winter',
  'soccer' => false,
  'hobbies' => array('manger', 'dormir', 'manger')
  );
$me = array(
'age' => 23,
'season' => 'summer',
'soccer' => true,
'hobbies' => array('manger', 'dormir', 'manger'),
//'mother' => $motherArray
);


 /* echo "<pre>";
  print_r(count($motherArray['hobbies']) +count($me['hobbies']));
  echo "<br>";
  print_r(count($me['hobbies']));
  echo "</pre>";

  array_push($me['hobbies'], 'footbl');
  print_r($me);*/
  // nouveau tableau avec la valeur a update
  $updateArray = array('age' => 22);
  $update =array_replace($me, $updateArray);
  print_r($update);
?>
