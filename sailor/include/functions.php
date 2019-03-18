<?php 

	session_start();
	function config(){
		$server = "localhost";
		$user = "root";
		$password = "";
		$db = "radin";
		$connect = mysqli_connect($server,$user,$password,$db);
		mysqli_set_charset($connect, "utf8");
		mysqli_query($connect,"SET NAME 'utf8'");
		return $connect;
	}
    function uploder($file,$dir,$folder,$name){
        $file=$_FILES[$file];
        if(!file_exists($folder)){
           mkdir($dir.$folder); 
        }
        $filename=$file['name'];
        $array=explode(".",$filename);
        $ext=end($array);
        $newname=$name."-".rand().".".$ext;
        $from=$file['tmp_name'];
        $to=$dir.$folder."/".$newname;
        move_uploaded_file($from,$to);
        return $to;
        
    }

    @$m=$_GET['m']?$_GET['m']:'index';
    switch ($m){
        case 'index':
            include_once 'menu_functions.php';
            break;
        case 'menu':
            include_once 'menu_functions.php';
            break;
        case 'blog_cat':
            include_once 'blog_cat_functions.php';
            break;
        case 'blog':
            include_once 'blog_functions.php';
            break;
        case 'pro':
            include_once 'pro_functions.php';
            break;
        case 'radin':
            include_once 'radin_functions.php';
            break;
        case 'slider':
            include_once 'slider_functions.php';
            break;
        case 'service':
            include_once 'service_functions.php';
            break;
    }










