<?php
    include_once 'include_theme/header.php'; 
    include_once 'include/service_functions.php';
?>

	<section id="inner-headline"><div class="container"><div class="row"></div></div></section>
	<section id="content">
	<div class="container">
		<div class="row">
            
            
            
            <?php 
            
                if(isset($_GET['id'])){
                $id = $_GET['id'];
                }else{
                header("location:index.php");
                exit();
                }

                $service=listserviceviwe($id);
                foreach($service as $val): 
                                
            ?>
            
            
            
            
			<div class="col-lg-12">
				<h3><?php echo $val['title']; ?></h3>
				<img src="admin/<?php echo $val['img']; ?>" alt="" class="img-responsive" />
                <p><?php echo $val['text']; ?></p>

		  </div>
            
            <?php endforeach; ?>
            
            
            
            
		</div>
	</div>
	</section>

	<?php include_once 'include_theme/footer.php'; ?>