
<?php 

    if(isset($_GET["race"]))
    {
      switch($_GET['race'])
      {
        case 'human' : echo "Humans image";
          break;
        case 'robot' : echo "robot image";
          break;
          case 'dog' : echo "dog image";
          break;
          default : echo " ";
          break;
      }
    }

?>
<form method="get">
  <label for="checker"> Humans or Robot ?</label>
  <hr>
  <br>
  <label>Humans</label>
  <input type="radio" id="human" name="race" value="human">
  <label>Robot</label>
  <input type="radio" id="robot" name="race" value="robot">
  <label>Dog</label>
  <input type="radio" id="dog" name="race" value="dog">
  <input type="submit" name="submit" value="Greet me now">
</form>