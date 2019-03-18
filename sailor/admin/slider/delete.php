<?php
$id=$_GET['id'];
deleteslider($id);
header("location:dashbord.php?m=pro&p=list");
?>