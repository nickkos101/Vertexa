<?php include 'header.php'; ?>
<div class="content">
	<div class="container">
		<div class="left-hand">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="blog-post">
				<div class="ft-img">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					else {  ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/featured-image.png">
					<?php } ?>
					<h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="blog-meta">
						Posted on <?php the_date(); ?> by <?php the_author(); ?>
					</div>
				</div>
				<?php the_content(); ?>
				<div class="meta-bar">
					<div class="share-this-widget">
						<a href="http://twitter.com/home/?status=<?php the_title(); ?>%20<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></a>
						<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p<?php the_permalink(); ?>=&p[images][0]=&p<?php the_title(); ?>=&p<?php the_excerpt(); ?>="><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a>
					</div>
					<div class="comment-count">
						<?php comments_number( '0 comments', '1 comment', '% comments' ); ?>
					</div>
					<div class="rd-more">
						<a href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<?php include 'sidebar.php'; ?>
</div>
<?php include 'footer.php'; ?>