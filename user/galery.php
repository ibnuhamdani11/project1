<?php 
require_once 'pp/db/dbconnect.php';
?>
<!DOCTYPE >


	<head>
		<title>P3M | POLINDRA</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- Bootstrap Styles-->
	    <link href="../css/bootstrap.css" rel="stylesheet" />
				<!-- Font Awesome -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../font/font.css">
		<link href="../css/style.css" rel="stylesheet" media="screen">	
		<link href="../css/responsive.css" rel="stylesheet" media="screen">		
	</head>
	

	<body>
	
		<div class="fix header_area1"><!--navabr1-->
			<div class="fix wrap header">
				<div class="logo floatleft">
					<img src="../images/Logo-Polindra.png">
					<h1>PUSAT PENELITIAN DAN PENGABDIAN MASYARAKAT (P3M)</h1>
					<h2>POLITEKNIK NEGERI INDRAMAYU</h2>
				</div>
			</div>
		</div><!--batas navabr1-->

		<div class="fix header_area2"><!--navabr2-->
			<div class="fix wrap header">
				<div class="manu floatright">
					<ul id="nav-top">
						<li><a href="../index.php">Home</a></li>
						<li><a href="about.php">about</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>
				</div>
			</div>
		</div><!--batas navabr2-->
		
		
		<div class="fix content_area"><!--fix content area-->
				<div class="fix top_add_bar"><!--slide-->
					<div class="addbar_leaderborard">
							<div class="slideshow-container">
							 <?php
							 include("slides.php");
							 ?>
							  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							  <a class="next" onclick="plusSlides(1)">&#10095;</a>
							</div>
							<br>

							<div style="text-align:center">
							  <span class="dot" onclick="currentSlide(1)"></span>
							  <span class="dot" onclick="currentSlide(2)"></span>
							  <span class="dot" onclick="currentSlide(3)"></span>
							</div>
					</div>
				</div><!--batas slide-->
				<!--sub menu-->
				<div class="manu_area">
					<div class="mainmenu menu-wrap wrap">
						<ul id="nav-bottom">
							<li><a href="">Document</a>
								<ul>
									<li><a href="../document/rip.php">RIP</a></li>
									<li><a href="../document/reinstra.php">Renstra Pengabdian Masyarakat</a></li>
									<li><a href="../document/sop.php">Oprasional Standart</a></li>
								</ul>
							</li>
							<li><a href="">Program</a>
								<ul>
									<li><a href="login.php">Penelitian</a></li>
									<li><a href="login.php">Pengabdian</a></li>
								</ul>
							</li>
							<li><a href="">OJS</a></li>
							<li><a href="galery.php">Galery</a></li>
						</ul>
					</div>
				</div><!--batas sub menu-->

	<div class="fix wrap content_wrapper"> <!--fix wrap content_wrapper-->
		<div class="fix content"> <!--fix content-->
			<div class="fix footer_top_area">
			<div class="fix footer_top wrap">
			<div class="fix footer_top_container">

				<?php
						$batas = 6;
						$pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";
						 
						if ( empty( $pg ) ) {
						$posisi = 0;
						$pg = 1;
						} else {
						$posisi = ( $pg - 1 ) * $batas;
						}			
					include("indo.php");
					$galery=mysql_query("select * from galery order by id DESC limit $posisi,$batas");
					while($data=mysql_fetch_array($galery)){
				?>
				<div class="fix single_footer floatleft">
					<ul>
					<img style="width:300px;height:180px;" src="../galery/<?php echo $data['photo'];?>">
							<div class="fix single_content_info">
								<h3><b><?php echo $data['nameph']; ?></b></h3>
									<p><?php echo substr($data['des'],0,50); ?><a style="font-style:italic;" href="moregalery.php?id=<?=$data['id'];?>">...[read more]</a></p>
								<div class="fix post-meta">
							<p><small>Upload : </small><?php echo TanggalIndo($data['tgl']); ?></p>
						</div>
					</div>
					</ul>
				</div>
				<?php
				}
				?>
			</div>
			</div>
			</div>
						
						<div class="pagination fix"><!--pagenation fix-->

						<?php
						//hitung jumlah data
						$jml_data = mysql_num_rows(mysql_query("SELECT * FROM galery"));
						//Jumlah halaman
						$JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas
						 
						//Navigasi ke sebelumnya
						if ( $pg > 1 ) {
						$link = $pg-1;
						$prev = "<a href='?pg=$link'><<<</a>";
						} else {
						$prev = "<<<";
						}
						 
						//Navigasi nomor
						$nmr = '';
						for ( $i = 1; $i<= $JmlHalaman; $i++ ){
						 
						if ( $i == $pg ) {
						$nmr .= $i . " ";
						} else {
						$nmr .= "<a href='?pg=$i'>$i</a> ";
						}
						}
						 
						//Navigasi ke selanjutnya
						if ( $pg < $JmlHalaman ) {
						$link = $pg + 1;
						$next = " <a href='?pg=$link'>>>></a>";
						} else {
						$next = ">>>";
						}
						 
						//Tampilkan navigasi
						echo $prev . $nmr . $next;
						?>

						</div><!--batas pagenation fix-->

					
				</div><!--batas fix content-->
			</div><!--batas fix wrap content_wrapper-->
		</div><!--fix content area-->
		
		<!--footer-->
		<div class="fix footer_area" style="background-color: #02c1e2;">
			<div class="wrap">
			<div class="fix copyright_text floatleft">
				<p>Jl. Raya Lohbener Lama No. 08 Indramayu 45252 Fax / Tlp. (0234) 5746464</p>
			</div>
			<div class="fix social_area floatright">
				<ul>
					<li><a href="" class="feed"></a></li>
					<li><a href="https://www.facebook.com/Politeknik.Negeri.Indramayu/" class="facebook"></a></li>
					<li><a href="" class="twitter"></a></li>
					<li><a href="" class="drible"></a></li>
					<li><a href="" class="flickr"></a></li>
					<li><a href="" class="pin"></a></li>
					<li><a href="" class="tumblr"></a></li>
				</ul>
			</div>
			</div>
		</div><!--batas footer-->
		<!--footer-->
		<div class="fix footer_area1" style="background-color: #fff;height:10%">
			<div class="wrap">
			<div class="fix copyright_text">
				<center><p style="margin-top:20px">@Politeknik Negeri Indramayu</p></center>
			</div>
			</div>
		</div><!--batas footer-->

		<script type="text/javascript" src="../js/placeholder_support_IE.js"></script>
		<script type="text/javascript" src="../js/selectnav.min.js"></script>
		<script src="../js/jquery.min.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
		<script type="text/javascript">
			selectnav('nav-top', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
			
			selectnav('nav-bottom', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});	

			var slideIndex = 0;
			showSlides();

			function showSlides() {
			    var i;
			    var slides = document.getElementsByClassName("mySlides");
			    var dots = document.getElementsByClassName("dot");
			    for (i = 0; i < slides.length; i++) {
			        slides[i].style.display = "none";
			    }
			    slideIndex++;
			    if (slideIndex> slides.length) {slideIndex = 1}
			    slides[slideIndex-1].style.display = "block";
			    setTimeout(showSlides, 1500); // Change image every 2 seconds

			    for (i = 0; i < dots.length; i++) {
			      dots[i].className = dots[i].className.replace(" active", "");
			  }
			   dots[slideIndex-1].className += " active";
			}	
					
		</script>		
		<script src="../js/jquery.js"></script>	
	</body>
</html>
