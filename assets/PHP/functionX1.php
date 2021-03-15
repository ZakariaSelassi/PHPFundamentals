<?php 


$str = 'This is going to be shuffled !';
// explod convert string to array

$div = explode(" ",$str);
var_dump($div);

// Iterate through tablea and shuffl letters
foreach($div as $value)
{
 echo str_shuffle($value);
}

function capitalizeFirst($string)
{
  $string = mb_convert_case($string, MB_CASE_TITLE,"UTF-8");
  return $string;
}
echo capitalizeFirst("émile");

// date native

echo date("F j,Y,g:i a");

function somme($n1, $n2)
{
  $somme = $n1 + $n2;
  if(is_numeric($n1) AND is_numeric($n2))
  {
    return $somme;
  }
  else{
    printf("enter only number please");
  }
}
echo " somme " . somme(10,1);

function acronym($string)
{
  $first = explode(" ",$string);
  foreach($first as $value)
  {
    echo  ucwords($value[0]);
  }
}
echo acronym("police departement unite");

echo "<br>";

function replaceAandE($string)
{
  // first parametre what i want to replace , second parametre caract replacing first , third string
  $replace = str_replace("ae","æ",$string);
  return $replace;
}
echo replaceAandE("caecotrophie");

function warning($message , $alert)
{ 

  if ($alert == "error") {
      $sentence = "<div class='$alert'>$alert : $message<div>";
      return $sentence;
  }else if($alert == "warning")
  {
    $sentence = "<div class='$alert'>$alert : $message<div>";
    return $sentence;
  }


}
echo warning("Blablablabla","warning");


function randomWord(){

}

function toLower($string)
{
  $string = strtolower($string);
  return $string;
}

echo toLower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");


function calculate_cone_volume($ray, $height){
  $volume = $ray * $ray * 3.14 * $height * (1/3);
  echo "The volume of a cone which ray is {$ray} and height is {$height} = {$volume} cm<sup>3</sup><br /> ";
}
calculate_cone_volume(5, 2);
?>
