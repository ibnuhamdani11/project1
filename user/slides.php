
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db ("dbp3m");
$slides=mysql_query("select * from slides order by id DESC limit 3 ");
while($data=mysql_fetch_array($slides)){
?>
<div class="mySlides fade">
	<img style="width:728px;height:90px" src="../images/<?php echo $data['img'];?>"> 
</div>
<?php
}
?>