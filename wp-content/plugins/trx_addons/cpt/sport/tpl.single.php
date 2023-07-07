<?php
/**
 * The template to display the sport's single post
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.6.17
 */

get_header();

while ( have_posts() ) { the_post();
	
	$meta = get_post_meta(get_the_ID(), 'trx_addons_options', true);
	
	?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'sport_single itemscope' ); ?>
    	itemscope itemtype="http://schema.org/Article">
		
		<section class="sport_page_header">	

			<?php
			// Image
			if ( !trx_addons_sc_layouts_showed('featured') && has_post_thumbnail() ) {
				?><div class="sport_page_featured">
					<?php
					the_post_thumbnail( trx_addons_get_thumb_size('masonry-big'), array(
								'alt' => get_the_title(),
								'itemprop' => 'image'
								)
							);
					?>
				</div>
				<?php
			}
			
			// Title and meta
			if (!trx_addons_sc_layouts_showed('title')) {
				?>
				<h2 class="sport_page_title">
					<?php
					the_title();
					if (get_post_type() == TRX_ADDONS_CPT_MATCHES_PT && !empty($meta['score'])) {
						?>
						<div class="sport_page_score"><?php
							echo esc_html($meta['score']);
						?></div><?php
					}
					?>
				</h2>
	
				<div class="sport_page_meta">
					<span class="sport_page_meta_item sport_page_meta_date"><?php
						if (get_post_type() == TRX_ADDONS_CPT_PLAYERS_PT) {
							if (!empty($meta['birthday'])) {
								printf(esc_html__('Birthday: %s', 'trx_addons'),
											'<span class="sport_page_meta_item_date">' 
											. date(get_option('date_format'), strtotime($meta['birthday'])) 
											. '</span>'
										);
							}
						} else {
							if (!empty($meta['date_start'])) {
								$dt = $meta['date_start'];
								$tm = !empty($meta['time_start']) ? $meta['time_start'] : '';
								echo sprintf($dt < date('Y-m-d'.($tm ? ' H:i' : '')) 
												? esc_html__('Started on %s', 'trx_addons') 
												: esc_html__('Starting %s', 'trx_addons'),
												'<span class="sport_page_meta_item_date">' . date(get_option('date_format').($tm ? ' '.get_option('time_format') : ''), strtotime($dt.($tm ? ' '.$tm : ''))) . '</span>');
							}
						}
					?></span>
				</div>
				<?php
			}
			?>
			
		</section>
		<?php

		// Post content
		?><div class="sport_page_content entry-content" itemprop="articleBody"><?php
			the_content( );
		?></div><!-- .entry-content --><?php
	?></article><?php

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
}

get_footer();
?>