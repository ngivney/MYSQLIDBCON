<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>OOPHP5 MYSQLI Connection Example</title>
</head>
<body>
<?php
// db connection values
$host = "YOUR HOST";
$db_name = "NAME OF YOUR DATABASE";
$user = "USER NAME";
$pass = "PASSWORD";
// require class
require('dbCon.php');
// Create db connection
$db = new dbCon($host, $user, $pass, $db_name);
?>
</body>
</html>
