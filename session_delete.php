<?php
session_start();
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Session DELETE</title>
</head>
<body>
<?php
    unset($_SESSION['name']); //unset will remove any variable or part of variable.  In this case, we are unsetting a particular index of session.  At the end of the file, it will be saved to the session.  Because it doesn't have 'name' anymore, 'name' will be deleted
?>


</body>
</html>