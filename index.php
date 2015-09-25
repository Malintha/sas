<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to SAS NINJA</title>

</head>
<body>
<div><input type="button" value="send sms"/></div>

<?php 
require_once 'lib/SMSSender.php';

define('SERVER_URL', 'http://api.dialog.lk:8080/sms/send');	
define('APP_ID', 'APP_015755');
define('APP_PASSWORD', '8aa7ec636c0e6e8acdb91d05da00a747');

$msg = $_GET['msg'];
$sender = new SMSSender( SERVER_URL, APP_ID,  APP_PASSWORD); 
$sender->sms( $msg, 94776190526);

echo $msg.' sent';

?>

</body>
</html>
