<?php include 'header.php'; ?>
<div class="content">
	<div class="container">
		<div class="left-hand">
			<div class="single-product-post">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="ft-img">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					else {  ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/featured-image.png">
					<?php } ?>
					<div class="blog-meta">
						$35.00
					</div>
				</div>
				<div class="image-controls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/featured-image.png">
					<img src="<?php echo get_template_directory_uri(); ?>/images/featured-image.png">
					<img src="<?php echo get_template_directory_uri(); ?>/images/featured-image.png">
					<img src="<?php echo get_template_directory_uri(); ?>/images/featured-image.png">
				</div>
				<?php the_content(); ?>
				<div class="comments">
					<?php comments_template(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php include 'footer.php'; ?>