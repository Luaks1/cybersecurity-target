<?php
// instantiate or retrieve user session
session_start();
// Set Non-Persistent database connection
$server=  'localhost';
$database='cloudybossnet_cs';
$username='cloudybossnet_cs';
$password='csp@ssw0rd1';
$driver_options=array(PDO::ATTR_PERSISTENT => false);
$pdo=new PDO("mysql:host={$server};dbname={$database};",$username,$password,$driver_options);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// attempt login
$result=false;
$querystring='SELECT userid FROM users WHERE userlogin = "'.$_GET['userlogin'].'" AND userpassword = "'.$_GET['userpassword'].'";';
$statement=$pdo->prepare($querystring);
$statement->execute();
$result=$statement->fetchColumn();
// if login successfull, go to details 
if($result) header('Location:https://cloudyboss.net.au/cs/target/details.php?userid='.$result);
// if login unsuccesfull, go back with a msg
else        header('Location:https://cloudyboss.net.au/cs/target/login.php?msg=error');
?>