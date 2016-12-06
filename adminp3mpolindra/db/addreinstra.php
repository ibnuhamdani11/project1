<?php
require_once 'dbconnect.php';;
$name        = trim ($_POST['namedoc']);

$file	=$_FILES['reins']['name'];
$tmp_name	=$_FILES['reins']['tmp_name'];
$dir	="../file/";

move_uploaded_file($tmp_name, $dir.$file);
$hasil=mysql_query("INSERT INTO docreins(id,namedoc,reins)
VALUES ('','$name','$file')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Tambah document renstra berhasil!"); document.location="../form/formreinstra.php";</script>';
}else{
	echo '<script language="javascript">alert("Tambah document renstra gagal!"); document.location="../form/formreinstra.php";</script>';
}
?>