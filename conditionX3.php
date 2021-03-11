
<html>
<?php 
   if(isset($_GET['age']))
    {?>
      <?php
       if($_GET['age'] < 12)
       {
         echo "KIDO";
       }else if($_GET['age'] > 12 and $_GET['age'] < 18)
       {
         echo "Teenager";
       }
       else if($_GET['age'] > 18 and $_GET['age'] > 25)
       {
         echo "Teenager";
       }
       else
       {
         echo "vieux shnock";
       }
      ?>
<?php } ?>

<form method="get" action="">
	<label for="age">Age</label>
	<input type="text" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

</html>