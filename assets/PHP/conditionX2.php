<html>
<?php
$now = date('g:i');
echo "$now";
echo "<br>";
if($now >= date('5:00') AND $now >= date('9:00'))
{
  echo "Good Morning";
}
else if($now >= date('9:01') AND $now >= date('12:00')){
  echo "Good day !";
}
else if($now >= date('12:01') AND $now >= date('16:00')){
  echo "Good afternoon !";
}
else if($now >= date('16:01') AND $now >= date('21:00')){
  echo "Good evening !";
}
else if($now >= date('21:01') AND $now >= date('4:59')){
  echo "Good night !";
}
else
{
  echo "something WRONG WRONG";
}

?>
</html>