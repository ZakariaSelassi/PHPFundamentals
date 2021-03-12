<?php
  $fullname = $_GET['fullname'];

  if ( strlen($fullname) == 0 ){
    echo "Ahem. You forgot to enter your name.";
    exit;
  }
?>

<form action="" method="GET">
  <input type="text" name="fullname" id="<?php $fullname ?>" >
  <input type="submit" id="submit" value="submit">
</form>