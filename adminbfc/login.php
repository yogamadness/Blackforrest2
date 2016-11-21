<?php 
include 'include/global/koneksi.php';
if(isset($_SESSION['username']) && $_SESSION['username'] != ''){ // Redirect to secured user page if user logged in
    echo '<script type="text/javascript">window.location = "index.php"; </script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Black Forrest Creatives</title>
    <link rel="shortcut icon" href="../image/iconbfc.ico">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ADMINISTRATOR</h3>
                    </div>
                    <div class="panel-body">
                               <div class="form-group">
                                    <img  id ="logo" src="../image/blackforrestcreatives1.png">
                                </div>
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <input style="font-size:12px" class="form-control" placeholder="Username" name="username" id="username" type="text" autofocus >
                                </div>
                                <div class="form-group">
                                    <input style="font-size:12px" class="form-control" placeholder="Password" name="password" id="password" type="password">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <input type="submit" class="btn btn-outline btn-default" id="submit" value="Login">
                                <span id="errornotif"></span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>


    <!-- Page Javascript -->
    <script type="text/javascript" src="include/loginpage/clientside/loginpageController.js"></script>

<style type="text/css">
    
.panel-title{
    margin-left: 27%;
    font-weight: bold;
    letter-spacing: 1px;
}

.row{
    margin-top: 8%;
}

#logo{
    margin: 20px 0px 20px 75px;
}

span{
    margin-left: 5%;
    color: red;
    font-size: 12px;
}

</style>

</body>

</html>
