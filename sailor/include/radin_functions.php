<?php
    // BLOG NEWS START

    function addradin($data,$img){
        $connection = config();
		$sql = "INSERT INTO radin_tbl (title,name,text,img) VALUES ('$data[title]','$data[name]','$data[text]','$img')";
        mysqli_query($connection,$sql);
		
    }
    function listradinadmin(){
        $connection = config();
		$sql = "SELECT * FROM radin_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

    function deleteradin($id){
        $connection = config();
		$sql = "DELETE FROM radin_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);    
    }


    function showEditradin($id){
        $connection = config();
		$sql = "SELECT * FROM radin_tbl WHERE id=$id";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
    function editradin($data,$id,$img,$oldpic){
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=uploder($img,"assets/images/radin/",$folder,"radin");
        }else{
            $pic=$oldpic;
        }
        $connection = config();
		$sql = "UPDATE radin_tbl SET title='$data[title]',name='$data[name]',text='$data[text]',img='$pic' WHERE id='$id'";
        mysqli_query($connection,$sql);
		
    }
    function listradindefault(){
        $connection = config();
		$sql = "SELECT * FROM radin_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

// END BLOG NEWS
