<?php
require_once 'dbconnect.php';
$user       = trim ($_POST['username']);
$pass      = trim ($_POST['password']);

$hasil=mysql_query("INSERT INTO user(id,username,password)
VALUES ('','$user','$pass')
");
if($hasil == 1)
{

   echo '<script language="javascript">alert("Tambah user berhasil!"); document.location="../form/formuser.php";</script>';
}else{
	echo '<script language="javascript">alert("Tambah user gagal!"); document.location="../form/formuser.php";</script>';
}
?>