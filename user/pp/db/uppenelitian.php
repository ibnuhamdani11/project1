<?php
require_once 'dbconnect.php';
$tgl        = trim ($_POST['tgl']);
$user = trim ($_POST['namepen']);
$jdl        = trim ($_POST['judul']);

$file	=$_FILES['file']['name'];
$tmp_name	=$_FILES['file']['tmp_name'];
$dir	="../../../penelitian/";
$psn      = trim ($_POST['pesan']);

	move_uploaded_file($tmp_name, $dir.$file);
$hasil=mysql_query("INSERT INTO penelitian (id,tgl,namepen,judul,file,pesan)
VALUES ('','$tgl','$user','$jdl','$file','$psn')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Uplaod file berhasil!"); document.location="../user/fileman.php";</script>';
}else{
	echo '<script language="javascript">alert("Uplaod file gagal!"); document.location="../user/penelitian.php";</script>';
}
?>