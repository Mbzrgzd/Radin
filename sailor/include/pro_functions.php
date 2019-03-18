<?php
    // BLOG NEWS START

    function addpro($data,$img){
        $connection = config();
		$sql = "INSERT INTO pro_tbl (title,text,img) VALUES ('$data[title]','$data[text]','$img')";
        mysqli_query($connection,$sql);
		
    }
    function listproadmin(){
        $connection = config();
		$sql = "SELECT * FROM pro_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

    function deletepro($id){
        $connection = config();
		$sql = "DELETE FROM pro_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);    
    }


    function showEditpro($id){
        $connection = config();
		$sql = "SELECT * FROM pro_tbl WHERE id=$id";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
    function editpro($data,$id,$img,$oldpic){
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=uploder($img,"assets/images/projects/",$folder,"projects");
        }else{
            $pic=$oldpic;
        }
        $connection = config();
		$sql = "UPDATE pro_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
        mysqli_query($connection,$sql);
		
    }
    function listprodefault(){
        $connection = config();
		$sql = "SELECT * FROM pro_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

// END BLOG NEWS
