<?php
$id=$_GET['id'];
deleteMenu($id);
header("location:dashbord.php?m=menu&p=list");
?>