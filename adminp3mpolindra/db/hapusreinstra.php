
<?php
    if($_GET["id"]){
        $conn = mysql_connect("localhost","root","");
        $db = mysql_select_db ("dbp3m");
        
        mysql_query("DELETE FROM docreins WHERE id = '".$_GET["id"]."' ");
        header ('location:../form/formreinstra.php');
    }
?>