<?php
    // BLOG NEWS START

    function addservice($data,$img){
        $connection = config();
		$sql = "INSERT INTO service_tbl (title,fontaweson,text,img) VALUES ('$data[title]','$data[fontaweson]','$data[text]','$img')";
        mysqli_query($connection,$sql);
		
    }
    function listserviceadmin(){
        $connection = config();
		$sql = "SELECT * FROM service_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

    function deleteservice($id){
        $connection = config();
		$sql = "DELETE FROM service_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);    
    }


    function showEditservice($id){
        $connection = config();
		$sql = "SELECT * FROM service_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
    function editservice($data,$id,$img,$oldpic){
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=uploder($img,"assets/images/services/",$folder,"services");
        }else{
            $pic=$oldpic;
        }
        $connection = config();
		$sql = "UPDATE service_tbl SET title='$data[title]',fontaweson='$data[fontaweson]',text='$data[text]',img='$pic' WHERE id='$id'";
        mysqli_query($connection,$sql);
		
    }
    function listservicedefault(){
        $connection = config();
		$sql = "SELECT * FROM service_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }
    function listserviceviwe($id){
        $connection = config();
		$sql = "SELECT * FROM service_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

// END BLOG NEWS
