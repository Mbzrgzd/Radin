<?php
$id=$_GET['id'];
deleteradin($id);
header("location:dashbord.php?m=pro&p=list");
?>