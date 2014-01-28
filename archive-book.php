<?php
get_header();
?>
<div id="primary" class="content-area">

		<div id="content" class="site-content" role="main">
			<h1 class="book-cat-title"><?php echo single_cat_title('', false ); ?></h1> 
			<br>
			<?php 
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
			if ($term->parent == 0) 
			{  
				wp_list_categories('taxonomy=genre&depth=1&show_count=0&title_li=&child_of='.$term->term_id);
			} 
			else 
			{
				wp_list_categories('taxonomy=genre&show_count=0&title_li=&child_of='.$term->parent);	
			}
			?>
		<br><br>
		<table>
			<tr>
				<th class="book-td">No.</th>
				<th class="book-td">tmb</th>
				<th class="book-td">title</th>
				<th class="book-td">autors</th>
				<th class="book-td">year</th>
			</tr>
			<?php while ( have_posts() ) : the_post(); ?>
				

				<?php
				 $id=get_the_ID();
				 
				 $autors = han_get_termlist_by_term_id($id,'autor');
				 $publish_date = han_get_termlist_by_term_id($id,'publish_date');
				 ?>

				<tr class="book-row">
					<td class="book-td"><?php echo $id; ?> </td>
					<td class="book-td">
						<span class="book-cover">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('hhl1-size'); ?>
						<?php else: ?>
						<img width="83" src="wp-content/plugins/hanuman-home-library/assets/noimage.png" class="attachment-hhl-size wp-post-image" alt="no-image">
						<?php endif; ?>
						</span>
					</td>
					<td class="book-td">
						<h1 class="entry-title"><a class="book-list-title" href="<?php the_permalink(); ?>" /><?php the_title(); ?></a></h1>
					</td>
					<td class="book-td">
						<?php echo $autors; ?>
					</td>
					<td class="book-td">
						<?php echo $publish_date; ?>
					</td>
						
				</tr>
			<?php endwhile; ?>
		</table>

			

		</div><!-- #content -->
</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>