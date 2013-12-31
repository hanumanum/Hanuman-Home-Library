<?php
get_header();
?>
<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<h1 class="book-cat-title"><?php echo single_cat_title( 'book-cat-title', false ); ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				

				<?php
				 $id=get_the_ID();
				 
				 $autors = han_get_termlist_by_term_id($id,'autor');
				 $publish_date = han_get_termlist_by_term_id($id,'publish_date');
				 ?>

				<article class="book-article book-list-item">

				<h1 class="entry-title"><a class="book-list-title" href="<?php the_permalink(); ?>" /><?php the_title(); ?></a></h1>
				<?php echo "<div class='book-list-autors'>".$autors.", ".$publish_date."</div>"; ?>
				<span class="book-cover">
				<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('hhl-size'); ?>
						<?php else: ?>
						<img width="144" height="200" src="wp-content/plugins/hanuman-home-library/assets/noimage.png" class="attachment-hhl-size wp-post-image" alt="no-image">
						<?php endif; ?>
				</span>		
				
				</article>
			<?php endwhile; ?>


			

		</div><!-- #content -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>