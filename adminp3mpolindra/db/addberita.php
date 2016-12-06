<?php
require_once 'dbconnect.php';
$jbr        = trim ($_POST['jberita']);
$upby      = trim ($_POST['upby']);
$tgl        = trim ($_POST['tgl']);

$file	=$_FILES['upgam']['name'];
$tmp_name	=$_FILES['upgam']['tmp_name'];
$dir	="../../img/";
$cbr      = trim ($_POST['cberita']);

	move_uploaded_file($tmp_name, $dir.$file);
$hasil=mysql_query("INSERT INTO berita(id,jberita,upby,tgl,upgam,cberita)
VALUES ('','$jbr','$upby','$tgl','$file','$cbr')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Tambah berita berhasil!"); document.location="../form/formberita.php";</script>';
}else{
	echo '<script language="javascript">alert("Tambah berita gagal!"); document.location="../form/formberita.php";</script>';
}
?>