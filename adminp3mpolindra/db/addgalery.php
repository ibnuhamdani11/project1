<?php
require_once 'dbconnect.php';
$file	=$_FILES['photo']['name'];
$tmp_name	=$_FILES['photo']['tmp_name'];
$dir	="../../galery/";

$name      = trim ($_POST['nameph']);
$des        = trim ($_POST['des']);
$tgl        = trim ($_POST['tgl']);

	move_uploaded_file($tmp_name, $dir.$file);
$hasil=mysql_query("INSERT INTO galery(id,photo,nameph,des,tgl)
VALUES ('','$file','$name','$des','$tgl')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Tambah galery berhasil!"); document.location="../form/formgalery.php";</script>';
}else{
	echo '<script language="javascript">alert("Tambah galery gagal!"); document.location="../form/formgalery.php";</script>';
}
?>