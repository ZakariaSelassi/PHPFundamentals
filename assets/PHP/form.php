<?php 

  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  // 2. Validation
  if (true === filter_var($email, FILTER_VALIDATE_EMAIL)) {

      
      echo "This cleaned email address is considered valid.";
      print_r($_POST);
  } 
  else {
    echo "This cleaned email address is not valid. Sorry. xoxo.";
  }

 
?>