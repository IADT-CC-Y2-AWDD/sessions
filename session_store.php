<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP session: start session and store some session data</title>
  </head>
  <body>

  <?php
  // Set session variables
  $_SESSION["favcolor"] = "green";
  $_SESSION["favanimal"] = "cat";
  echo "Session variables are set.";
  ?>

  </body>
</html>
