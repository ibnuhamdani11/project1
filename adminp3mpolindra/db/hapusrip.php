
<?php
    if($_GET["id"]){
        $conn = mysql_connect("localhost","root","");
        $db = mysql_select_db ("dbp3m");
        
        mysql_query("DELETE FROM docrip WHERE id = '".$_GET["id"]."' ");
        header ('location:../form/formrip.php');
    }
?>