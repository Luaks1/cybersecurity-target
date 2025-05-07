<?php
// instantiate or retrieve user session
session_start();
// file upload
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {}
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
$querystring='REPLACE INTO users 
                (userid, userlogin, userpassword, username, userbankaccount, userprofile, userfilename, userphotosize) 
                VALUES ( '.$_GET['userid'].',
                        "'.$_GET['username'].'", 
                        "'.$_GET['userlogin'].'", 
                        "'.$_GET['userpassword'].'", 
                        "'.$_GET['userbankaccount'].'", 
                        "'.$_GET['userprofile'].'", 
                         '.$_GET['userphotosize'].', 
                        "'.$target_file.'")';
$statement=$pdo->prepare($querystring);
$result=$statement->execute();
if($result) header('Location:https://cloudyboss.net.au/cs/target/details.php?userid='.$_GET['userid']);
else        header('Location:https://cloudyboss.net.au/cs/target/login.php?msg=error');















    
    








?>