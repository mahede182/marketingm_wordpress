<?php get_header();?>
<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">
		<div id="main-content" class="zerogrid">
			<div class="row">
				<article>
					<?php the_post();?>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail();?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<p><?php the_content();?></p>
							</div>
						</div>
					</div>
				</article>
				<div class="header">
					<hr class="line-2">
					<h2>Meet our team</h2>
					<span>Look through our team to learn more</span>
				</div>
				<article>
					<div class="row">
						<div class="col-1-4 t-center">
							<div class="wrap-col">
								<a href="#"><img src="images/team-1.jpg" /></a>
								<a href="#">
									<h3 style="margin: 20px;">LINDA VANCOVA</h3>
								</a>
								<p>Through her career, Linda has focused her efforts on building infrastructure around
									company operations and international expansion at startup companies.</p>
							</div>
						</div>
						<div class="col-1-4 t-center">
							<div class="wrap-col">
								<a href="#"><img src="images/team-2.jpg" /></a>
								<a href="#">
									<h3 style="margin: 20px;">LINDA VANCOVA</h3>
								</a>
								<p>Through her career, Linda has focused her efforts on building infrastructure around
									company operations and international expansion at startup companies.</p>
							</div>
						</div>
						<div class="col-1-4 t-center">
							<div class="wrap-col">
								<a href="#"><img src="images/team-3.jpg" /></a>
								<a href="#">
									<h3 style="margin: 20px;">LINDA VANCOVA</h3>
								</a>
								<p>Through her career, Linda has focused her efforts on building infrastructure around
									company operations and international expansion at startup companies.</p>
							</div>
						</div>
						<div class="col-1-4 t-center">
							<div class="wrap-col">
								<a href="#"><img src="images/team-4.jpg" /></a>
								<a href="#">
									<h3 style="margin: 20px;">LINDA VANCOVA</h3>
								</a>
								<p>Through her career, Linda has focused her efforts on building infrastructure around
									company operations and international expansion at startup companies.</p>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>
<!--////////////////////////////////////Footer-->
<?php get_footer();?>