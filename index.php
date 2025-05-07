<!DOCTYPE html>
<html>
<head>
    <title>CyberSecurity Sandpit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
</head>
<!-- ************************************************************************************* BODY -->
<body>
    <div id="login">

        <form name="loginform" action="appaction_login.php" method="get" class="form-horizontal">
            <div class="form-group">
        		<?php if(isset($_GET['msg']) && $_GET['msg'] <> NULL) echo '<table class="table table-condensed"><tr><th scope="row">'.$_GET['msg'].'</th></tr></table>'; ?>
                CyberSecurity Sandpit - Red team
                <br><br>
            </div>

            <div class="input-group align-middle">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i>&nbsp;</span>
                <input type="text" class="input form-control" id="userlogin" name="userlogin" spellcheck="no" translate="no" placeholder="Login ID">
                <br><br>
            </div>

            <div class="input-group align-middle">
                <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i>&nbsp;</span>
                <input type="text" class="input form-control" id="userpassword" name="userpassword" spellcheck="no" translate="no" placeholder="Password">
                <br><br>
            </div>

            <br>
            <div class="form-group">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary" id="login" name="login" value="login"> LOGIN </button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>