<div class="sponsorFooter nolist row">
	<h4 class="hr"> <?php _e( 'Sponsors:', 'bootstrapwp' ); ?></h4>
	<ul class="sponsorlist">
		<?php
		$term = get_the_terms($post->ID, 'pais');
		query_posts( 
			array( 
				'post_type' => 'dal_country_sponsor', 
				'pais'=> array_pop($term)->name, 
				'paged' => get_query_var('taxonomy'), 
				'posts_per_page' => 30, 
				'orderby' => 'title', 
				'order' => 'DESC')
		);
		
		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		?>
		<li>
			<?php 
			$post_meta_data = get_post_custom($post->ID);

			echo '<a href="'.$post_meta_data['sponsor_link'][0].'" target="_blank">';
			$sponsor_logo = $post_meta_data['sponsor_logo'][0];  
			echo wp_get_attachment_image($sponsor_logo, 'medium'); 
			echo '</a>';
			?>
		</li>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</ul>  
<?php wp_reset_query();  ?>
</div>