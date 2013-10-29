<?php include 'header.php'; ?>
<div class="content">
	<div class="container">
		<div class="left-hand">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<?php include 'sidebar.php'; ?>
</div>
<?php include 'footer.php'; ?>