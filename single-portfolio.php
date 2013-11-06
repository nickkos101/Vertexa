<?php include 'header.php'; ?>
<div class="content">
	<div class="container">
		<div class="portfolio-grid">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="portfolio-item">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php include 'footer.php'; ?>