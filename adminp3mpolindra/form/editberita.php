<?php 
require_once '../db/dbconnect.php';
include ("../db/ceklogin.php");
?>
<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | P3M POLINDRA</title>
	<!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><i class="fa fa-gear"></i> <strong>Admin P3M</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
            <li>
                    <p style="color:#fff"><?php echo $_SESSION['username']; ?></p>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="formslides.php"><i class="fa fa-edit"></i>Slides</a>
                    </li>

                    <li>
                        <a href="formberita.php"><i class="fa fa-edit"></i>Berita</a>
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-edit"></i>Document<span class="fa arrow"></span></a>
                       <ul class="nav nav-second-level">
                            <li>
                                <a href="formrip.php">RIP</a>
                            </li>
                            <li>
                                <a href="#">Reinstra</a>
                            </li>
                            <li>
                                <a href="#">Oprasional Standart</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="formgalery.php"><i class="fa fa-edit"></i>Galery</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Forms Edit Berita <small>upload berita disini!</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
    <?php
    $db=mysql_query("select * from berita where id='" . $_GET["id"] . "'");
        $da=mysql_fetch_array($db);
    ?>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Judul Berita</label>
                                            <input class="form-control" placeholder="judul berita" name="jberita"  value=<?php echo $da["jberita"]; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload By</label>
                                            <input class="form-control" placeholder="admin p3m polindra" name="upby"  value=<?php echo $da["upby"]; ?>>
                                        </div>
                                        <div class="form-group">
                                            <img value=<?php echo $da["upgam"];?>>
                                            <label>Tanggal Upload</label>
                                            <input type="date" class="form-control" name="tgl"  value=<?php echo $da["tgl"]; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Gambar</label>
                                            <input type="file" value=<?php echo $da["upgam"]; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Content Berita</label>
                                            <textarea class="form-control" rows="15" name="cberita"  value=<?php echo $da["cberita"]; ?>></textarea>
                                        </div>

                                        <div>
                                    <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                </div>
                             </form>

        <?php
        if (isset($_POST["edit"])){
            mysql_query("update berita set jberita='" . $_POST["jberita"] . "', upby='" . $_POST["upby"] . "', tgl='" . $_POST["tgl"] . "', upgam='" . $_POST["upgam"] . "', cberita='" . $_POST["cberita"] . "' where id='". $_GET["id"] . "'");
           echo "<script>location.href=\"formberita.php\";</script>";
        }
        
        ?>
                                    
                            </div>
                               

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<footer><p>P3M Politeknik Negeri Indramayu:<a href="../../index.html">P3M POLINDRA</a></p></footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
       <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
