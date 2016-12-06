<?php 
require_once 'db/dbconnect.php';


session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username']))
{
    echo '<script language="javascript">alert("Anda harus Login!"); document.location="../login.php";</script>';
}


?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>P3M | POLINDRA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="plugin/dataTables/dataTables.bootstrap.css"/>
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js""></script>
	<script type="text/javascript" src="plugin/dataTables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="plugin/dataTables/dataTables.bootstrap.js"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    //dataTables
    $(document).ready(function () {
                $('#dataTables-penelitian').dataTable();
            });

    $(document).ready(function () {
                $('#dataTables-pengabdian').dataTable();
            }); //batas dataTables

    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.php"><img style="margin-top:5px;width:45%;height:45px" src="images/logoblack.png"></a></h1>
			<h2 class="section_title"></h2>
			<div class="btn_view_site"><a href="db/logout.php">Logout</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?php echo $_SESSION['username']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs">
			<a href="user/penelitian.php">Penelitian</a>
			<div class="breadcrumb_divider"></div>
			<a href="user/pengabdian.php">Pengabdian</a>
			<div class="breadcrumb_divider"></div>
			<a href="user/fileman.php">File manager</a>
			</article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<hr/>
		<h3>Content</h3>
		<ul class="toggle">
			<li class="icn_upload"><a href="user/penelitian.php">Penelitian</a></li>
			<li class="icn_upload"><a href="user/pengabdian.php">Pengabdian</a></li>
		</ul>
		<!--<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_profile"><a href="#">Your Profile</a></li>
		</ul>-->
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="user/fileman.php">File Manager</a></li>
		</ul>
		<h3>Options</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="db/logout.php">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; P3M Polindra</strong></p>
			<p>Website <a href="#">P3M POLINDRA</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
<section id="main" class="column"><!--main-->
 <div class="col-md-6"><!--dcol-md-6-->
    <article class="module width_full">
                    <div class="panel panel-default"><!--dataTables-->
                        <div class="panel-heading">
                             Tabel Penelitian
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-penelitian">
                                    <thead>
                                           <tr>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>File</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                        if(@$_GET['search']=='cari'){
                                            $hasil = mysql_query("SELECT * FROM penelitian where id like '%$_POST[search]%'");
                                               $no = 1;
                                                    while($row=mysql_fetch_array($hasil)) {
                                                   echo "
                                                    <tr>
                                                        <td>$row[tgl]</td>
                                                        <td>$row[namepen]</td>
                                                        <td>$row[judul]</td>
                                                        <td>$row[file]</td>
                                                        <td>
                                                            <input type='image' src='images/downicon.png' title='download'>
                                                        </td>
                                                    </tr>";
                                            
                                              }
                                            
                                            } else {
                                           ?>
                                          <?php
                                            error_reporting(0);
                                            $hasil = mysql_query("SELECT * FROM penelitian order by id DESC");
                                            
                                            $no = 1;
                                            while($row=mysql_fetch_array($hasil)) {
                                           echo "
                                             <tr>
                                                        <td>$row[tgl]</td>
                                                        <td>$row[namepen]</td>
                                                        <td>$row[judul]</td>
                                                        <td>$row[file]</td>
                                                        <td>
                                                            
                                                           <input type='image' src='images/downicon.png' title='download'>
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
                    </div><!--batas dataTables-->
                </article>
                </div><!--batas col-md-6-->

    <div class="col-md-6"><!--col-md-6-->
    <article class="module width_full">
                    <div class="panel panel-default"><!--dataTables-->
                        <div class="panel-heading">
                             Tabel Pengabdian
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-pengabdian">
                                    <thead>
                                        <tr>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                        if(@$_GET['search']=='cari'){
                                            $hasil = mysql_query("SELECT * FROM pengabdian where id like '%$_POST[search]%'");
                                               $no = 1;
                                                    while($row=mysql_fetch_array($hasil)) {
                                                   echo "
                                                    <tr>
                                                        <td>$row[tgl]</td>
                                                        <td>$row[namepeng]</td>
                                                        <td>$row[judul]</td>
                                                        <td>$row[file]</td>
                                                        <td>
                                                            <input type='image' src='images/downicon.png' title='download'>
                                                        </td>
                                                    </tr>";
                                            
                                              }
                                            
                                            } else {
                                           ?>
                                          <?php
                                            error_reporting(0);
                                            $hasil = mysql_query("SELECT * FROM pengabdian order by id DESC");
                                            
                                            $no = 1;
                                            while($row=mysql_fetch_array($hasil)) {
                                           echo "
                                             <tr>
                                                        <td>$row[tgl]</td>
                                                        <td>$row[namepeng]</td>
                                                        <td>$row[judul]</td>
                                                        <td>$row[file]</td>
                                                        <td>
                                                            
                                                            <input type='image' src='images/downicon.png' title='download'>
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
                    </div><!--batas dataTables-->
                </article>
                </div><!--batas col-md-6-->
	<div class="spacer"></div>
</section><!--batas main-->


</body>

</html>