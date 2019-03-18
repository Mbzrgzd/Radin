<?php
$id=$_GET['id'];
deletepro($id);
header("location:dashbord.php?m=pro&p=list");
?>