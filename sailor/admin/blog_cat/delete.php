<?php
$id=$_GET['id'];
deleteBlogCat($id);
header("location:dashbord.php?m=blog_cat&p=list");
?>