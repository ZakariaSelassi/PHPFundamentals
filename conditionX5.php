
<html>
<?php 
   if (isset($_GET['age']) and isset($_GET['gender'])) {
     if($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == 'femal')
     {
       echo 'WELCOM TO THE TEAM !';
     }
     else{
       echo 'DEHORS TES PAS DE LA TEAM !';
     }
   }
  ?>

<form method="get" action="">
	<label for="age">Age</label>
	<input type="text" name="age">

  <input type="radio" id="male" name="gender" value="male">
  <label for="mal"> Male</label> 

  <input type="radio" id="femal" name="gender" value="femal">
  <label for="femal"> femal</label> 
       
  <input type="submit" name="submit" value="Greet me now">
</form>

</html>