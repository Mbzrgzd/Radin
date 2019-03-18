<?php
    //START BLOG CATEGORY
    function addBlogCat($data){
        $connection = config();
		$sql = "INSERT INTO blog_cat_tbl (title,status,sort) VALUES ('$data[title]','$data[status]','$data[sort]')";
        mysqli_query($connection,$sql);
    }
    function listblogcatadmin(){
        $connection = config();
		$sql = "SELECT * FROM blog_cat_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }
    function deleteBlogCat($id){
        $connection = config();
		$sql = "DELETE FROM blog_cat_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);
        
    }
    function showEditBlogCat($id){
        $connection = config();
		$sql = "SELECT * FROM blog_cat_tbl WHERE id=$id";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
    function editBlogCat($data,$id){
        $connection = config();
		$sql = "UPDATE blog_cat_tbl SET title='$data[title]',sort='$data[sort]',status='$data[status]' WHERE id='$id'";
        mysqli_query($connection,$sql);
		
    }


//END BLOG CATEGORY
