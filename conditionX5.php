
<html>
<?php 
  $var = "DEHORS TES PAS DE LA TEAM !!";
   if (isset($_GET['age']) and isset($_GET['gender'])) {
     if($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == 'femal')
     {
        $var = "ON EST LA TEAM !";
        
     }

      

   }
?>
<p> <?php echo $var. $_GET['gender']; ?> </p>

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