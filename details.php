<?php
session_start();
// Set Non-Persistent database connection
$server=  'localhost';
$database='cloudybossnet_cs';
$username='cloudybossnet_cs';
$password='csp@ssw0rd1';
$driver_options=array(PDO::ATTR_PERSISTENT => false);
$pdo=new PDO("mysql:host={$server};dbname={$database};",$username,$password,$driver_options);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// retrieve details
$result=array();
$querystring='  SELECT userid, userlogin, userpassword, username, userbankaccount, userprofile, userfilename, userphotosize  
                FROM users WHERE userid = '.$_GET['userid'].';';
$statement=$pdo->prepare($querystring);
$statement->setFetchMode(PDO::FETCH_ASSOC);
$statement->execute();
$result=$statement->fetchAll();
// print details 
if($result && count($result)>0) 
    {
    echo '  <!DOCTYPE html>
            <html>
            <head>
                <title>CyberSecurity Sandpit</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
            </head>
            <body>
                <form name="loginform" action="appaction_details.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div>
                        <table class="table table-condensed">
                            <tr>
                                <th scope="row">ID</th>
                                <td>
                                    <input type="text" class="input form-control" id="userid" name="userid" spellcheck="no" translate="no" placeholder="ID" value="'.$result[0]['userid'].'">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Login</th>
                                <td>
                                    <input type="text" class="input form-control" id="userlogin" name="userlogin" spellcheck="no" translate="no" placeholder="Login" value="'.$result[0]['userlogin'].'">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Password</th>
                                <td>
                                    <input type="text" class="input form-control" id="userpassword" name="userpassword" spellcheck="no" translate="no" placeholder="Password" value="'.$result[0]['userpassword'].'">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>
                                    <input type="text" class="input form-control" id="username" name="username" spellcheck="no" translate="no" placeholder="Name" value="'.$result[0]['username'].'">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Bank Account</th>
                                <td>
                                <input type="text" class="input form-control" id="userbankaccount" name="userbankaccount" spellcheck="no" translate="no" placeholder="Bank account" value="'.$result[0]['userbankaccount'].'">
                            </td>
                            </tr>
                            <tr>
                                <th scope="row">Profile</th>
                                <td>
                                    <label for="text">Enter text for your profile here:</label><br>
		                            <textarea id="userprofile" name="userprofile" rows="4" cols="50">'.$result[0]['userprofile'].'</textarea>
                                    <br>
                                    <a href="https://cloudyboss.net.au/cs/target/profile.php" target="_blank">See Profile Page in a different tab</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Profile photo</th>
                                <td>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </td>
                            </tr>    
                            <tr>
                                <th scope="row">Photo size</th>
                                <td>
                                <input type="text" class="input form-control" id="userphotosize" name="userphotosize" spellcheck="no" translate="no" placeholder="Photo size" value="'.$result[0]['userphotosize'].'">
                            </td>
                            </tr>
                            <tr> 
                                <td> 
                                    <input type="submit" value="Upload Photo & Save data" name="submit">
                                </td> 
                            </tr>
                            <tr>
                                <th scope="row">More information</th>
                                <td>
                                    <iframe src="https://cloudyboss.net.au/cs/target/ifexample.html" width="500" height="500"></iframe>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>        
            </body>
            </html>';
    }
?>