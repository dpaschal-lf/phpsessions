<?php
session_start();  //required at the start of the file, starts our session and makes the $_SESSION superglobal available
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Session READ</title>
</head>
<body>

    <?php
        print("session: ");  print_r($_SESSION); print("<br>");
        //$_SESSION holds all of our session data for this particular session (ie, this browser, on this computer).  A new browser (ie loading firefox instead of chrome) on the same computer will have a different session.
    ?>

    <?php
        print('$_SESSION["name"] == '.$_SESSION['name']);
    ?>
</body>
</html>