<?php

  $web_development = array(
    'frontend' => array(),
    'backend' => array()
  );

  array_push($web_development['frontend'], 'xhtml');
  array_push($web_development['backend'], 'Ruby');
  array_push($web_development['frontend'], 'CSS');
  array_push($web_development['backend'], 'Flash');
  array_push($web_development['frontend'], 'CSS');

  //$updateArr = array( 1 => 'html');
  //print_r(array_replace($web_development['frontend'],$updateArr));
  $search = "CSS";
  print_r(array_splice($web_development['backend'],0,1));
  
  $search = 'CSS';
  $found = array_search('CSS', $web_development['frontend']);
  echo  $found ;

  // print_r($web_development);
  // var_dump($web_development);
  ?>