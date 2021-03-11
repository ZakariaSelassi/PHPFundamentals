<html>
  <head>
  <title>Humans</title>
  </head>
  <body>
    <?php 
   if(isset($_GET['name']))
    {?>
      <h1>Hello <?php echo $_GET['name']; ?> ! </h1>
    <?php } ?>

      <?php if(isset($_GET['age'])){?>
      <h1>Age <?php echo $_GET['age']; ?> ! </h1>
      <?php }?>
  </body>
</html>