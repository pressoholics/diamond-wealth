<?php // Template Name: Portfolio Three Column ?>
<?php get_header(); ?>
	<?php 
	$portfolio_style = get_post_meta($post->ID, 'pyre_portfolio_style', true);	
	$grid = ($portfolio_style == 'flat') ? 'grid flat_images' : ( $portfolio_style == 'masonry' ? 'grid masonry_images' : '');
    $force_full_width = ( get_post_meta($post->ID, 'pyre_force_full_width', true) == 'yes' )    ? 'force_full_width' : '';
	?> 
			<div class="row <?php echo $force_full_width; ?>">
            	<?php while(have_posts()): the_post(); ?>
                	<div class="page_description"><?php the_content(); ?></div>
                <?php endwhile; ?> 
                <div id="content" class="portfolio-three">                    
                    <?php portfolio_page_template('3', 'three'); ?>
                </div>                
 			</div>
<?php get_footer(); ?>