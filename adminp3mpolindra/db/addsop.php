<?php
require_once 'dbconnect.php';
$name        = trim ($_POST['namedoc']);

$file	=$_FILES['sop']['name'];
$tmp_name	=$_FILES['sop']['tmp_name'];
$dir	="../file/";

move_uploaded_file($tmp_name, $dir.$file);
$hasil=mysql_query("INSERT INTO docsop(id,namedoc,sop)
VALUES ('','$name','$file')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Tambah document standart oprasional berhasil!"); document.location="../form/formsop.php";</script>';
}else{
	echo '<script language="javascript">alert("Tambah document standart oprasional gagal!"); document.location="../form/formsop.php";</script>';
}
?>