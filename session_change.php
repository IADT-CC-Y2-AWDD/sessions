<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP session: change a session variable</title>
  </head>
  <body>

  <?php
  // Set session variables
  $_SESSION["favcolor"] = "yellow";
  ?>

  </body>
</html>
