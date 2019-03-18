<?php
$id=$_GET['id'];
deleteservice($id);
header("location:dashbord.php?m=pro&p=list");
?>