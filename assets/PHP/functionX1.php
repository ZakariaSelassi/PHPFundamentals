<?php 


$str = 'This is going to be shuffled !';
// explod convert string to array
$div = explode(" ",$str);
// Iterate through tablea and shuffl letters
foreach($div as $value)
{
 echo str_shuffle($value);
}


$string = "émile";
$string = mb_convert_case($string, MB_CASE_TITLE,"UTF-8");

echo $string;
?>