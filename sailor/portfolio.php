<?php
    include_once 'include_theme/header.php';
    include_once 'include/pro_functions.php';
?>
	<section id="inner-headline"><div class="container"><div class="row"></div></div></section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="heading">پروژه ها</h2>
				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
                        
                        
                        
                        
                        
                        
                        
                        <?php 
                
                            $pro=listprodefault();
                            foreach($pro as $val):        
                        ?>
                        
                        
                        
                        
                        
						<li class="cbp-item graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="admin/<?php echo $val['img']; ?>" alt="" width="100%" height="100%" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="admin/<?php echo $val['img']; ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">مشاهده</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title"><?php echo $val['title']; ?></div>
							<div class="cbp-l-grid-projects-desc"><?php echo $val['text']; ?></div>
						</li>
                        
                        
						<?php endforeach; ?>
                        
                        
					</ul>
				</div>
                
                    <div class="cbp-l-loadMore-button">
					       <a href="ajax/loadMore.php" class="cbp-l-loadMore-button-link">بیشتر</a>
				    </div>
			</div>
		</div>
	</div>
	</section>

	<?php include_once 'include_theme/footer.php'; ?>