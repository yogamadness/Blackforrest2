<?php

include "../include/global/koneksi.php";

if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
  echo '<script type="text/javascript">window.location = "../login.php"; </script>';
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

    <title>Blackforrest Creatives Admin</title>
    <link rel="shortcut icon" href="../../image/iconbfc.ico">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../"><img class="header" src="../../image/logo.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>Welcome, <?php echo $_SESSION['username'];?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../include/global/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                   <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="../"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="photobooks.php"><i class="fa fa-book fa-book"></i> Photobooks</a>
                        </li>
                        <li>
                            <a href="invitations.php"><i class="fa fa-child fa-fw"></i> Invitations</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-group fa-fw"></i> Category</a>
                        </li>
                        <li>
                            <a href="newsroom.php"><i class="fa fa-comment fa-fw"></i> Newsroom</a>
                        </li>
                        <li>
                            <a href="subscribe.php"><i class="fa fa-rss-square fa-fw"></i> Subscribe</a>
                        </li>
                        <li>
                            <a href="setting.php"><i class="fa fa-cog fa-fw"></i> Setting</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         <ol class="breadcrumb">
                                <li><a href="../">Home</a></li>
                                 <li><a href="">Category</a></li>
                          </ol>
                      <div class="panel panel-default">
                            <div class="panel-heading">
                               List Product Category
                            </div>
                            <div class="panel-body">
                                 <button type="button" class="btn btn-primary" id="add">Add New</button><br><br>
                                    <div class="table">
                                        <table class="table table-striped table-bordered table-hover" id="category">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                        </tbody>
                                        </table>
                                            <div id="paging">
                                                    <nav>
                                                        <ul class="pagination pagination-sm">
                                                        </ul>
                                                    </nav>
                                            </div>
                                    </div>

                                    <div class="row" >
                                        <div id="addcategory" class="col-md-6">
                                            <form class="form">
                                                <div class="form-group">
                                                    <label>Category Name</label>
                                                    <input type="text" name="namaCategory" id="namaCategory" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button id="submit" class="btn btn-outline btn-success">Submit</button>
                                                    <span id="eror"></span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                      <div class="row" >
                                        <div id="editCategory" class="col-md-6">

                                            <form class="form">
                                                <div class="form-group">
                                                    <label>Category Name</label>
                                                    <input type="text" name="namaCategoryEdit" id="namaCategoryEdit" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button id="submitEdit" class="btn btn-outline btn-success">Submit</button>
                                                    <span id="eror"></span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                       </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

      <!-- FILESIZE JS -->
    <script type="text/javascript" src="../js/jquery.filesize.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
    <script type="text/javascript" src="../include/categorypage/clientside/categoryController.js"></script>



<style type="text/css">
    
    #cover{
        width: 100px;
    }

    .content{
        width: 150px;
        height: 50px;
    }
   #addcategory{
    margin-left: 28%;
   }

    #editCategory{
    margin-left: 28%;
   }

   #eror{
    color: red;
    margin-left: 5%;
   }

   .imageholder{
     width: 250px;
     height: 150px;
   }

   .coverpage{
        width: 200px;
        height: 150px;
   }
</style>

</body>

</html>
