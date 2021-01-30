<?php get_header();?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<div id="main-content" class="zerogrid">
					<div class="row">
					<?php query_posts('showposts=3'); ?>
                        <?php while(have_posts()):the_post();?>
						<div class="col-1-3">
							<article class="t-center">
								<div class="art-header">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
								</div>
								<div class="art-content">
									<h2><?php the_title();?></h2>
									<p><?php the_content();?></p>
								</div>
							</article>
                        </div>
                    <?php endwhile; ?>
						
					<div class="navigation">
						<!-- <ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">Pre</a></li>
							<li><a href="#">Next</a></li>
                        </ul> -->
                        <?php echo paginate_links();?>
					</div>
				</div>
				<?php wp_reset_query();?>
			</div>
		</section>
	<!--////////////////////////////////////Footer-->
	<?php get_footer();?>