<?php 
  $hello = "Welcom Welcom !";
  $error = "Something wrong !";
  if(isset($_GET['gender']))
  {
    print($_GET['gender'] == 'femal') ? $hello : $error;
  }
?>

<form method="get" action="">
  <input type="radio" id="male" name="gender" value="male">
  <label for="mal"> Male</label> 
  <input type="radio" id="femal" name="gender" value="femal">
  <label for="femal"> femal</label> 
       
  <input type="submit" name="submit" value="Greet me now">
</form>

</html>