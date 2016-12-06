<?php 
require_once '../db/dbconnect.php';
include ("../db/ceklogin.php");
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>P3M | POLINDRA</title>
	
	<link rel="stylesheet" href="../css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="../js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="../js/hideshow.js" type="text/javascript"></script>
	<script src="../js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../js/jquery.equalHeight.js"></script>
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
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="../index.php"><img style="margin-top:5px;width:45%;height:45px" src="../images/logoblack.png"></a></h1>
			<h2 class="section_title"></h2>
			<div class="btn_view_site"><a href="../db/logout.php">Logout</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?php echo $_SESSION['username']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs">
			<a href="penelitian.php">Penelitian</a>
			<div class="breadcrumb_divider"></div>
			<a href="pengabdian.php">Pengabdian</a>
			<div class="breadcrumb_divider"></div>
			<a href="fileman.php">File manager</a>
			</article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<hr/>
		<h3>Content</h3>
		<ul class="toggle">
			<li class="icn_upload"><a href="penelitian.php">Penelitian</a></li>
			<li class="icn_upload"><a href="pengabdian.php">Pengabdian</a></li>
		</ul>
		<!--<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_profile"><a href="#">Your Profile</a></li>
		</ul>-->
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="fileman.php">File Manager</a></li>
		</ul>
		<h3>Options</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="../db/logout.php">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; P3M Polindra</strong></p>
			<p>Website <a href="">P3M POLINDRA</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
<section id="main" class="column"><!--main-->
		
		<div class="clear"></div>
		
		<article class="module width_full"><!--batas module width_full -->
		<form method="post" action="../db/uppengabdian.php" enctype="multipart/form-data">
			<header><h3>Upload file pengabdian</h3></header>
				<div class="module_content">
						<div>
							<input type="hidden" value="<?php echo date('Y-m-d')?>" name="tgl">
						</div>
						<fieldset>
							<label>Judul</label>
							<input type="text" name="judul">
						</fieldset>
						<fieldset>
							<label>Nama Anda</label>
							<input type="text" name="namepeng">
						</fieldset>
						<div>
							<input type="file" name="file">
						</div>
						<fieldset>
							<label>Message</label>
							<textarea rows="12" name="pesan"></textarea>
						</fieldset>
				</div>
			<footer>
				<div class="submit_link">
					<button type="submit" class="alt_btn">Kirim</button>
				</div>
			</footer>
		</form>
		</article><!-- module width_full -->
	<div class="spacer"></div>
</section><!--batas main-->


</body>

</html>