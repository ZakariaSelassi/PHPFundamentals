
<html>
<?php
  if(isset($_GET['num']))
  { 
    switch($_GET['num'])
    {
      case 1 : 
      case 2 :
      case 3 :
      case 4 : echo "MAUVAIS";
      break;
      case 5 :
      case 6 :
      case 7 :
      case 8 : 
      case 9 : echo "suffit pas ";
      break;
      case 10 : echo "à peine assez";
      break;
      case 14: echo "pas mal";
      break;
      case 18: echo "Bravo bravissimo !";
      break;
      case 20: echo "Trop beau pour etre vrai";
      break;
      
    }

  }
 
?>


<form method="get" action="">
  <input type="text" name="num" id="num">   
  <input type="submit" name="submit" value="Greet now">
</form>

</html>