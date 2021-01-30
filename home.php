<!-- header are in here -->
<?php get_header();?>

<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="wrap-box">
					<div class="row">
						<?php while(have_posts()):the_post();?>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="item-container">
									<div class="title">
										<h2><?php the_title();?></h2>
									</div>
									<div class="item-caption purple">
										<a href="<?php the_permalink();?>">
											<div class="item-caption-inner">
												<div class="item-caption-inner1">
													<span><?php the_content();?></span>
												</div>
											</div>
										</a>
									</div>
									<?php the_post_thumbnail();?>
								</div>
							</div>
						</div>
<?php endwhile;?>
					</div>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<hr class="line-2">
						<h2>Offering helpful business</h2>
						<span>tips & advice to help your business start up</span>
					</div>	
					<div class="row">
						<div class="col-1-3">
							<div class="item-container">
								<div class="title">
									<h2>marketing research solutions</h2>
								</div>
								<div class="item-caption black">
									<a href="#">
										<div class="item-caption-inner">
											<div class="item-caption-inner1">
												<span>Driving competitive advantage through leaders: that is the common denominator across everything we do. Our service is grounded in rigorous research and proven through decades of practical experience. Each is continually adapted to keep pace with the realities of a turbulent, changing world. To meet your needs with precision, our consultants work in global practices defined by industries and organizational.</span>
											</div>
										</div>
									</a>
								</div>
								<img  src="<?php echo get_template_directory_uri();?>/images/6.jpg" alt=""/>
							</div>
						</div>
						<div class="col-1-3">
							<div class="item-container">
								<div class="title">
									<h2>marketing research solutions</h2>
								</div>
								<div class="item-caption black">
									<a href="#">
										<div class="item-caption-inner">
											<div class="item-caption-inner1">
												<span>Driving competitive advantage through leaders: that is the common denominator across everything we do. Our service is grounded in rigorous research and proven through decades of practical experience. Each is continually adapted to keep pace with the realities of a turbulent, changing world. To meet your needs with precision, our consultants work in global practices defined by industries and organizational.</span>
											</div>
										</div>
									</a>
								</div>
								<img  src="<?php echo get_template_directory_uri();?>/images/6.jpg" alt=""/>
							</div>
						</div>
						<div class="col-1-3">
							<div class="item-container">
								<div class="title">
									<h2>marketing research solutions</h2>
								</div>
								<div class="item-caption black">
									<a href="#">
										<div class="item-caption-inner">
											<div class="item-caption-inner1">
												<span>Driving competitive advantage through leaders: that is the common denominator across everything we do. Our service is grounded in rigorous research and proven through decades of practical experience. Each is continually adapted to keep pace with the realities of a turbulent, changing world. To meet your needs with precision, our consultants work in global practices defined by industries and organizational.</span>
											</div>
										</div>
									</a>
								</div>
								<img  src="<?php echo get_template_directory_uri();?>/images/6.jpg" alt=""/>
							</div>
						</div>
						<div class="col-full">
							<p>Driving competitive advantage through leaders: that is the common denominator across everything we do. Our service is grounded in rigorous research and proven through decades of practical experience. Each is continually adapted to keep pace with the realities of a turbulent, changing world. To meet your needs with precision, our consultants work in global practices defined by industries and organizational functions in which they have significant prior executive-level experience.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-----------------content-box-3-------------------->
		<section class="content-box box-3">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Latest news:</h2>
					</div>	
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="title">
									<span>05<strong>/25</strong></span>
								</div>
								<p>It is important to take time to develop your vision; and your practical thinking should be geared to this vision. You need to work with conviction. Being</p>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="title">
									<span>05<strong>/25</strong></span>
								</div>
								<p>It is important to take time to develop your vision; and your practical thinking should be geared to this vision. You need to work with conviction. Being</p>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="title">
									<span>05<strong>/25</strong></span>
								</div>
								<p>It is important to take time to develop your vision; and your practical thinking should be geared to this vision. You need to work with conviction. Being</p>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="title">
									<span>05<strong>/25</strong></span>
								</div>
								<p>It is important to take time to develop your vision; and your practical thinking should be geared to this vision. You need to work with conviction. Being</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-----------------content-box-4-------------------->
		<section class="content-box box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="subcribe-form" >
						<div class="col-1-3">
							<div class="wrap-col">
								<p>ENTER YOUR EMAIL HERE TO REСEIVE OUR NEWS & UPDATES:</p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<form method="get" action="/search" id="subcribe">
								  <input name="q" type="text" size="220" placeholder="Enter your email address...  " />
								  <input type="submit" name="Submit" value="Submit">
								</form>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<?php get_footer();?>