<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP session: access the session information</title>
  </head>
  <body>

    <?php
    // Echo session variables that were set on a previous request
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>

  </body>
</html>
