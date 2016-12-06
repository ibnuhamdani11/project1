<?php
require_once 'dbconnect.php';
$name       = trim ($_POST['namedoc']);

$file	=$_FILES['rip']['name'];
$tmp_name	=$_FILES['rip']['tmp_name'];
$dir	="../file/";

move_uploaded_file($tmp_name, $dir.$file);
$hasil=mysql_query("INSERT INTO docrip(id,namedoc,rip)
VALUES ('','$name','$file')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Tambah document rip berhasil!"); document.location="../form/formrip.php";</script>';
}else{
	echo '<script language="javascript">alert("Tambah document rip gagal!"); document.location="../form/formrip.php";</script>';
}
?>