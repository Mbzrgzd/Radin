<?php
    // BLOG NEWS START

    function addslider($data,$img){
        $connection = config();
		$sql = "INSERT INTO slider_tbl (title,url,text,img,botton) VALUES ('$data[title]','$data[url]','$data[text]','$img','$data[botton]')";
        mysqli_query($connection,$sql);
		
    }
    function listslideradmin(){
        $connection = config();
		$sql = "SELECT * FROM slider_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

    function deleteslider($id){
        $connection = config();
		$sql = "DELETE FROM slider_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);    
    }


    function showEditslider($id){
        $connection = config();
		$sql = "SELECT * FROM slider_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
    function editslider($data,$id,$img,$oldpic){
        if($_FILES[$img]['name']!=''){
            $a=explode("/",$oldpic);
            $total=count($a);
            $folder=$a[$total-2];
            $pic=uploder($img,"assets/images/slider/",$folder,"slider");
        }else{
            $pic=$oldpic;
        }
        $connection = config();
		$sql = "UPDATE slider_tbl SET title='$data[title]',url='$data[url]',text='$data[text]',img='$pic', botton='$data[botton]' WHERE id='$id'";
        mysqli_query($connection,$sql);
		
    }
    function listsliderdefault(){
        $connection = config();
		$sql = "SELECT * FROM slider_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }

// END BLOG NEWS
