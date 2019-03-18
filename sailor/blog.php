<?php
    include_once 'include_theme/header.php';
    include_once 'include/blog_functions.php';
?>

    <section id="inner-headline"><div class="container"><div class="row"></div></div></section>

	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">	
                
                
                
                <?php 
                
                    $blog=listblogdefault();
                    foreach($blog as $val):        
                ?>
			<article>				
				<h3><a href="#"><?php echo $val['title']; ?></a></h3>
				<img src="admin/<?php echo $val['img']; ?>" alt="" class="img-responsive" />
                <p><?php echo $val['text']; ?></p>
                <div class="bottom-article">
				    <a href="#" class="readmore pull-right"> <i class="fa fa-angle-left"></i> ادامه مطلب </a>
				</div>		
		  </article>
                
                <?php endforeach; ?>
            <div id="pagination">
				<span class="current">1</span>
				<a href="#" class="inactive">2</a>
				<a href="#" class="inactive">3</a>
            </div>
		</div>
		
            <br>
            <br>
			<div class="col-lg-12">
				<aside class="right-sidebar">
				<div class="widget">
					<h5 class="widgetheading">دسته بندی </h5>
					<ul class="cat">
						<li><i class="fa fa-angle-left"></i><a href="#">مقالات</a></li>
						<li><i class="fa fa-angle-left"></i><a href="#">متون تخصصی</a></li>
						<li><i class="fa fa-angle-left"></i><a href="#">خارجی</a></li>
						<li><i class="fa fa-angle-left"></i><a href="#">ابنیه</a></li>
						<li><i class="fa fa-angle-left"></i><a href="#">لوله کشی</a></li>
					</ul>
				</div>
				</aside>
			</div>
			
		</div>


	</div>
	</section>
<?php include_once 'include_theme/footer.php'; ?>