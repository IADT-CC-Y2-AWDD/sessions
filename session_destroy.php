<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      PHP session: remove all session variables and
      destroy the session
    </title>
  </head>
  <body>

  <?php
  // remove all session variables
  session_unset();

  // destroy the session
  session_destroy();
  ?>

  </body>
</html>
