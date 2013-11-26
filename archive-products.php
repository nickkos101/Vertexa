<?php include 'header.php'; ?>
<div class="content">
	<div class="container">
		<div class="left-hand">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="product">
				<div class="ft-img">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					else {  ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/featured-image.png">
					<?php } ?>
					<div class="price">
						$35.00
					</div>
				</div>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<?php include 'sidebar.php'; ?>
</div>
<?php include 'footer.php'; ?>