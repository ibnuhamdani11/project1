<?php
require_once 'dbconnect.php';
$file	=$_FILES['img']['name'];
$tmp_name	=$_FILES['img']['tmp_name'];
$dir	="../../images/";

$name      = trim ($_POST['nameslid']);

	move_uploaded_file($tmp_name, $dir.$file);
$hasil=mysql_query("INSERT INTO slides(id,img,nameslid)
VALUES ('','$file','$name')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Tambah slides berhasil!"); document.location="../form/formslides.php";</script>';
}else{
	echo '<script language="javascript">alert("Tambah slides gagal!"); document.location="../form/formslides.php";</script>';
}
?>