<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ideal-new
 */

get_header();
?>
		<div class="main_content">
		 <div class="blog_list_container">
			<div class="page_row">
				<?php
				if ( have_posts() ) :
    			while ( have_posts() ) : the_post();
				?>
  			  <div class="b_block_outer">
                <div class="blog_block">
                  <div class="blog_img">
                    	<a href="<?php the_permalink();?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>" >
                    	</a>
                  	</div>
                  <div class="blog_cont">
                    <h3>
                      <a href="<?php the_permalink();?>">
                        <?php the_title(); ?>
                      </a>
                    </h3>
                    <span class="b_date"> <?php the_category(' ');?> / <?php the_time(get_option('date_format'));?></span>
                      <?php the_excerpt();?>

                  </div>
                </div>
              </div>
              	<?php
            	endwhile;
				else :
    			_e( 'Sorry, no posts were found.', 'textdomain' );
				endif;
				?>
            </div>
         </div>
      </div>

            


	
<?php wp_pagenavi(); ?>
	</main><!-- #main -->

<?php
get_sidebar();
?></div><?php
get_footer();
?>