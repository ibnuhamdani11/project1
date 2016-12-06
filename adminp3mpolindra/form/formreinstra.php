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
                        <li><a href="../db/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                <a href="formreinstra.php">Renstra</a>
                            </li>
                            <li>
                                <a href="formsop.php">Oprasional Standart</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="formgalery.php"><i class="fa fa-edit"></i>Galery</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit"></i>User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="formuser.php">Tambah User</a>
                            </li>
                            <li>
                                <a href="docpenelitian.php">Penelitian</a>
                            </li>
                            <li>
                                <a href="docpengabdian.php">Pengabdian</a>
                            </li>
                        </ul>
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
                            Forms Document <small>upload dokumen disini!</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="../db/addreinstra.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Document</label>
                                            <input class="form-control" name="namedoc" placeholder="nama document">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload File</label>
                                            <input type="file" name="reins">
                                        </div>
                                         <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                    </form>
                                </div>
                                
                                 <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Document Renstra
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Document</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                    if(@$_GET['search']=='cari'){
                                        $hasil = mysql_query("SELECT * FROM docreins where id like '%$_POST[search]%'");
                                           $no = 1;
                                                while($row=mysql_fetch_array($hasil)) {
                                               echo "
                                                <tr>
                                                    <td>$row[namedoc]</td>
                                                    <td>$row[reins]</td>
                                                    <td>
                                                        <a href='#?id=$row[id]'>Ubah</a> ||
                                                        <a href='../db/hapusreinstra.php?id=$row[id]' onClick=\"return confirm('Apakah Anda yakin akan menghapus $row[namedoc]??')\">Hapus</a>
                                                    </td>
                                                </tr>";
                                        
                                          }
                                        
                                        } else {
                                       ?>
                                      <?php
                                        error_reporting(0);
                                        $hasil = mysql_query("SELECT * FROM docreins order by id DESC");
                                        
                                        $no = 1;
                                        while($row=mysql_fetch_array($hasil)) {
                                       echo "
                                         <tr>
                                                    <td>$row[namedoc]</td>
                                                    <td>$row[reins]</td>
                                                    <td>
                                                        <a href='#?id=$row[id]'>Ubah</a> ||
                                                        <a href='../db/hapusreinstra.php?id=$row[id]' onClick=\"return confirm('Apakah Anda yakin akan menghapus $row[namedoc]??')\">Hapus</a>
                                                    </td>
                                                </tr>";
                                       
                                        }
                                        ?>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                                </div><!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <footer><p>P3M Politeknik Negeri Indramayu:<a href="../../index.php">P3M POLINDRA</a></p></footer>
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
    <script src="../assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
