<?php get_header();?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<div class='embed-container maps'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
				</div>
				<div class="zerogrid">
					<div class="contact">
						<h3>Contact Information</h3>
						<div class="row">
							<div class="col-1-3">
								<div class="wrap-col">
									<i class="fa fa-home"></i>
									<h4>Address:</h4>
									<span>The Company Name Inc. 9870 St Vincent Place,Glasgow, DC 45</span>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<i class="fa fa-phone"></i>
									<h4>Address:</h4>
									<span>800-2345-7892;<br/>800-2345-7893</span>
								</div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<i class="fa fa-envelope"></i>
									<h4>Address:</h4>
									<span>mail@demolink.org</span>
								</div>
							</div>
						</div>
						<h3>Contact Form</h3>
						<div id="contact_form">
							<div id="ff">
 <?php echo do_shortcode('[contact-form-7 id="100" title="marketingm contact"]');?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
	<!--////////////////////////////////////Footer-->
	<?php get_footer();?>