<?php
$id=$_GET['id'];
deleteblog($id);
header("location:dashbord.php?m=blog&p=list");
?>