<?php
    include_once 'include_theme/header.php';
    include_once 'include/pro_functions.php';
    include_once 'include/radin_functions.php';
    include_once 'include/slider_functions.php';
    include_once 'include/service_functions.php';
?>
	<section id="featured" class="bg">
	<!-- start slider -->

			
	<!-- start slider -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
                
                <?php 

                    $slider=listsliderdefault();
                    foreach($slider as $val): 
                                
                ?>
             
              <li>
                <img src="admin/<?php echo $val['img']; ?>" alt="" width="100%" height="500" />
                <div class="flex-caption">
                    <h3><?php echo $val['title']; ?></h3> 
					<p><?php echo $val['text']; ?></p> 
					<a href="<?php echo $val['url']; ?>" class="btn btn-theme"><?php echo $val['botton']; ?></a>
                </div>
              </li>
                
                <?php endforeach; ?>
                
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	


	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
            <div class="col-lg-8">
				<div class="cta-text">
                    <h2> طراحی مدرن ساختمان  <span> گروه مهندسی رادین </span> بسپارید </h2>
				    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
				</div>
            </div>
            <div class="col-lg-4">
				<div class="cta-btn">
				    <a href="#" class="btn btn-theme btn-lg"><i class="fa fa-angle-left"></i> مشاهده پروژه ها</a>
				</div>
            </div>	
		</div>
	</div>
	</section>
	
	<section id="content">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<h2>خدمات گروه مهندسی    <span class="highlight">رادین</span> </h2>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
				</div>
			</div>		
		</div>
		</div>
		
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
                    
                    
                    
                    <?php 

                    $service=listservicedefault();
                    foreach($service as $val): 
                                
                    ?>
                    
                    
                    
                  
					
					<div class="col-sm-3 col-md-3 col-lg-3">
						<div class="box">
							<div class="aligncenter">								
								<div class="icon">
								<i class="<?php echo $val['fontaweson']; ?> fa-5x"></i>
								</div>
								<h4><a href="service.php?id=<?php echo $val['id'] ?>" ><?php echo $val['title']; ?></a></h4>
							</div>
						</div>
					</div>
                    
                    
                    <?php endforeach; ?>
                    
                    
                    
                    
                    
				</div>
			</div>
		</div>
		</div>
		
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
		
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
                        <h4>چرا گروه مهندسی رادین؟</h4>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> زیبایی</a></li>
							<li><a href="#two" data-toggle="tab">خلاقیت</a></li>
							<li><a href="#three" data-toggle="tab">دقت در کار</a></li>
							<li><a href="#fore" data-toggle="tab">دقت در کار</a></li>
							<li><a href="#five" data-toggle="tab">دقت در کار</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="one">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
							</div>
							<div class="tab-pane" id="two">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
							</div>
							<div class="tab-pane" id="three">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
							</div>
                            <div class="tab-pane" id="fore">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
							</div>
                            <div class="tab-pane" id="five">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="blankline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
		
	<!-- parallax  -->
	<div id="parallax1" class="parallax text-light text-center marginbot50" data-stellar-background-ratio="0.5">	
           <div class="container">
				<div class="row appear stats">
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="fa fa-clock-o fa-5x"></i>
							</div>
						<strong id="counter-coffee" class="number">1232</strong><br />
						<span class="text">جایزه ها</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="fa fa-music fa-5x"></i>
							</div>
						<strong id="counter-music" class="number">345</strong><br />
						<span class="text">مشتریان</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="fa fa-coffee fa-5x"></i>
							</div>
						<strong id="counter-clock" class="number">501</strong><br />
						<span class="text">پروژه ها</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="fa fa-trophy fa-5x"></i>
							</div>
						<strong id="counter-heart" class="number">378</strong><br />
						<span class="text">ساعات کار</span>
						</div>
					</div>
				</div>
            </div>
	</div>	 
	
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-4 col-md-4">
                        
					<h4>تیم مهندسی رادین</h4>
                        
						<div class="testimonialslide clearfix flexslider">
							<ul class="slides">
                                
								<?php 

                                    $radin=listradindefault();
                                    foreach($radin as $val): 
                                
                                ?>
								
                                <li>
                                    <img src="admin/<?php echo $val['img']; ?>"/>
                                    <blockquote><?php echo $val['text']; ?></blockquote>
									<h4><span>  <?php echo $val['title']; ?> &#8213;</span>  <?php echo $val['name']; ?> </h4> 
								</li>
                                
                                <?php endforeach; ?>
                                
                                
							</ul>
						</div>					
					</div>	
					<div class="col-sm-8 col-lg-8">
						<h4>درباره گروه مهندسی رادین</h4>
                        <div id="banner">
						  <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید </p>
                        </div>
					</div>
				</div>
			</div>
		</div>
		</div>	
		
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
	
		<!-- Portfolio Projects -->
		<div class="container marginbot50">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">پروژه ها</h4>
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
				
				

			</div>
		</div>
		</div>
		
		
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
		
		<!-- clients -->
		<div class="container">
				<div class="row">
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo1.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo2.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo3.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo4.png" class="img-responsive" />
								</div>									
								
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo5.png" class="img-responsive" />
								</div>									
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="img/clients/logo6.png" class="img-responsive" />
								</div>	

				</div>
		</div>
	
	</section>
	
	<?php include_once 'include_theme/footer.php'; ?>