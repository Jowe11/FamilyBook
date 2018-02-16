<?php
  
$firstNames = ['Joseph', 'Jess', 'Letitia', 'Rachel', 'Rebecca', 'Jacob'];
  $lastNames = ['Rowe', 'Morris', 'Clark'];
  $emailAddresses = ['jowe11eleven@gmail.com', 'allthejessthings@yahoo.com', 'jtcphoto@yahoo.com', 'rjoyfrom2002@gmail.com', 'rratmet@yahoo.com', 'jmagnificent@me.com'];
  
  $minimum = 6;
  $maximum = 17;


  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(strlen($password) < $minimum) {
      echo "Your password must be longer than " . $minimum . " characters." . "<br>";
    }
    
    if(in_array($emailAddresses, $firstNames)) {
      echo "<h3>Welcome!</h3>";
    } else {
      echo "<h3>Contact Jowe to register.</h3>";
    }
  } 
    
  ?>
