
<html>
<?php 
   if(isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['language']))
    {
       if($_GET['age'] < 12 AND $_GET['language'] == 'yes' )
       {
         if($_GET['gender'] == 'femal')
         {
          echo " little women KIDO speak english" ;
         }
         else
         {
          echo " little BOY KIDO speak english";
         }
        
       }
       else
       {
        if($_GET['gender'] == 'femal')
        {
         echo " little women KIDO speak Aloha" ;
        }
        else
        {
         echo " little BOY KIDO speak Aloha";
        }
       }

      if($_GET['age'] >= 12 and $_GET['age'] < 18)
       {
        if($_GET['gender'] == 'femal')
        {
         echo "little teenager women KIDO";
        }
        else
        {
         echo "little teenager man KIDO";
        }
       }
       else if($_GET['age'] >= 18 and $_GET['age'] < 25)
       {
         echo "Adult";
       }
       else if($_GET['age'] > 25)
       {
         echo "vieux shnock";
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

  <input type="radio" id="language" name="language" value="yes">
  <label for="mal"> YES </label> 

  <input type="radio" id="language" name="language" value="no">
  <label for="NO">NO</label> 
       
  <input type="submit" name="submit" value="Greet me now">
</form>

</html>