<html>
  <head>
  <title>Humans</title>
  </head>
  <body>
    <?php 
    $name = 'Selassi';
    $pname = 'Zakaria'; 
    $age = 10;
    $eyes = 'brown';
    $family = array("on est la","le néant","jsp");
    $hungry = true;
    ?>

    <p> Hello ! <?php echo $name .' '.$pname ?> bien ou quoi</p>
    <p><?php echo $age ?></p>
    <p><?php echo $eyes ?></p>
    <p> la mifa : <?php echo $family[0] ?> </p>
    <p> Are you hungry ? <?php echo $hungry ?> </p>
  </body>
</html>