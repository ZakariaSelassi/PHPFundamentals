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
$soulmate = array(
  'type' => "moche",
  'dent' => "pas de dents",
  'cheveux' => "chauve" ,
  'taille' => "grande",
  'hobbies' => array('manger','dormir','jouer')
);

  // hobbies intersection 
  //$intersection = array_intersect($me['hobbies'],$soulmate['hobbies']);
  //print_r($intersection);
  // hobbies merge
  $merge = array_merge($me,$soulmate);
  print_r($merge);
 /* echo "<pre>";
  print_r(count($motherArray['hobbies']) +count($me['hobbies']));
  echo "<br>";
  print_r(count($me['hobbies']));
  echo "</pre>";

  array_push($me['hobbies'], 'footbl');
  print_r($me);*/
  // nouveau tableau avec la valeur a update
  //$updateArray = array('age' => 22);
  //$update =array_replace($me, $updateArray);
  //print_r($update);

?>
