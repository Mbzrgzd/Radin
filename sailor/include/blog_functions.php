<?php
    // BLOG NEWS START

    function addblog($data,$img){
        $connection = config();
		$sql = "INSERT INTO blog_tbl (title,text,blogcat,img) VALUES ('$data[title]','$data[text]','$data[blogcat]','$img')";
        mysqli_query($connection,$sql);
		
    }
    function blogCat(){
        $connection = config();
		$sql = "SELECT * FROM blog_cat_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }
    function listblogadmin(){
        $connection = config();
		$sql = "SELECT * FROM blog_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }
    function selectBlogCat($catid){
        $connection = config();
		$sql = "SELECT * FROM blog_cat_tbl WHERE id=$catid";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res['title'];
    }
    function deleteblog($id){
        $connection = config();
		$sql = "DELETE FROM blog_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);    
    }


    function showEditBlog($id){
        $connection = config();
		$sql = "SELECT * FROM blog_tbl WHERE id=$id";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
    function editBlog($data,$id,$img,$oldpic){
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=uploder($img,"assets/images/blog/",$folder,"blog");
        }else{
            $pic=$oldpic;
        }
        $connection = config();
		$sql = "UPDATE blog_tbl SET title='$data[title]',text='$data[text]',blogcat='$data[blogcat]',img='$pic' WHERE id='$id'";
        mysqli_query($connection,$sql);
		
    }
    function listblogdefault(){
        $connection = config();
		$sql = "SELECT * FROM blog_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

// END BLOG NEWS
