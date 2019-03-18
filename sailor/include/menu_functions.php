<?php
    // Menu Start
    function addmenu($data){
        $connection = config();
		$sql = "INSERT INTO menu_tbl (title,url,sort,status) VALUES ('$data[title]','$data[url]','$data[sort]','$data[status]')";
        mysqli_query($connection,$sql);
		
    }
    function submenu(){
        $connection = config();
		$sql = "SELECT * FROM menu_tbl WHERE chid='0'";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }
    function listmenuadmin(){
        $connection = config();
		$sql = "SELECT * FROM menu_tbl";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }
    function selectParentMenu($chid){
        $connection = config();
		$sql = "SELECT * FROM menu_tbl WHERE id=$chid";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res['title'];
    }
    function deleteMenu($id){
        $connection = config();
		$sql = "DELETE FROM menu_tbl WHERE id='$id'";
        $row = mysqli_query($connection,$sql);
        
    }
    function showEdit($id){
        $connection = config();
		$sql = "SELECT * FROM menu_tbl WHERE id=$id";
        $row = mysqli_query($connection,$sql);
        $res = mysqli_fetch_assoc($row);
        return $res;
    }
    function editMenu($data,$id){
        $connection = config();
		$sql = "UPDATE menu_tbl SET title='$data[title]',url='$data[url]',sort='$data[sort]',status='$data[status]' WHERE id='$id'";
        mysqli_query($connection,$sql);
		
    }

    function listmenudefault(){
        $connection = config();
		$sql = "SELECT * FROM menu_tbl WHERE status='1'  ORDER BY sort ASC";
        $row = mysqli_query($connection,$sql);
        while($res = mysqli_fetch_assoc($row)){
            $result[]=$res;
        }
		return $result;
		
    }
    function listsubmenudefault($id){
        $connection = config();
		$sql = "SELECT * FROM menu_tbl WHERE status='1'  ORDER BY sort ASC";
        $row = mysqli_query($connection,$sql);
            if(mysqli_num_rows($row)>0){
                while($res = mysqli_fetch_assoc($row)){
                $result[]=$res;
                }
                return $result;
            }
    }
// END MENU
