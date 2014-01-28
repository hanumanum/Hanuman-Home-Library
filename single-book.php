<?php
get_header();
?>
<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				

				<?php
				 $id=get_the_ID();
				 
				 $autors = han_get_termlist_by_term_id($id,'autor');
				 $genre = han_get_termlist_by_term_id($id,'genre');
				 $language = han_get_termlist_by_term_id($id,'language');
				 $publisher = han_get_termlist_by_term_id($id,'publisher');
				 $publish_date = han_get_termlist_by_term_id($id,'publish_date');
				 $physical_place = han_get_termlist_by_term_id($id,'physical_place');
				 $series = han_get_termlist_by_term_id($id,'series');
				 

				 ?>

				<article class="book-article">

				<h1 class="entry-title"><?php the_title(); ?></h1>				
				<br>
				<span class="book-cover">
				<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('hhl-size'); ?>
						<?php else: ?>
						<img width="144" height="200" src="wp-content/plugins/hanuman-home-library/assets/noimage.png" class="attachment-hhl-size wp-post-image" alt="no-image">
						<?php endif; ?>
				</span>
				<table class="book-info">
				<tr>
					<td>No. </td>
					<td><?php echo $id; ?></td>
				</tr>
				<tr>
					<td><?php _e('Authors', 'hanuman-home-library') ?></td>
					<td><?php echo $autors; ?></td>
				</tr>
				<tr>
					<td><?php _e('Genres', 'hanuman-home-library') ?></td>
					<td><?php echo $genre; ?></td>
				</tr>
				<tr>
					<td><?php _e('Languages', 'hanuman-home-library') ?></td>
					<td><?php echo $language; ?></td>
				</tr>
				<tr>
					<td><?php _e('Publisher', 'hanuman-home-library') ?></td>
					<td><?php echo $publisher; ?></td>
				</tr>
				<tr>
					<td><?php _e('Publish Date', 'hanuman-home-library') ?></td>
					<td><?php echo $publish_date; ?></td>
				</tr>
				<tr>
					<td><?php _e('Physical Places', 'hanuman-home-library') ?></td>
					<td><?php echo $physical_place; ?></td>
				</tr>
				<tr>
					<td><?php _e('Series', 'hanuman-home-library') ?></td>
					<td><?php echo $series; ?></td>
				</tr>
					
				</table>
				</article>
			<?php the_content(); ?>
				<?php comments_template(); ?>
				
			<?php endwhile; ?>


			

		</div><!-- #content -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>