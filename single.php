<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ideal-new
 */

get_header();
?>
	  <div class="primary_secondary_container">
	<main id="primary" class="site-main">
    
    <div class="blog_breadcrumb"><a href="https://www.ideal.in/">Home</a> / <a href="https://www.ideal.in/blog/">Blog</a> /<?php the_title(); ?></div>

	<!-- if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; -->

		<?php if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/single', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<?php dynamic_sidebar( 'sidebar-3' ); ?>
		<br>
		<hr>
		<br>
		<!--<div class="wrapper">
<a href="#"><div class="bg-ico" id="facebook"><i class="fab fa-facebook social  facebook fa-3x"></i></div></a>
<a href="#"><div class="bg-ico" id="twitter"><i class="fab fa-twitter social  twitter fa-3x"></i></div></a>
<a href="#"><div class="bg-ico" id="whatsapp"><i class="fab fa-whatsapp social  whatsapp fa-3x"></i></div></a>
<a href="#"><div class="bg-ico" id="youtube"><i class="fab fa-youtube social  youtube fa-3x"></i></div></a>
</div> -->
		<section id="block-7" class="widget widget_block">
        
        <div>
			<ul class="h_social">
<!--				<li>
					<a href="https://www.facebook.com/IdealGroupOfficial/">
						<i class ="fab fa-facebook social  facebook fa-3x">
						</i>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/IdealGroupOffical">
						<i class ="fab fa-twitter social  twitter fa-3x">
						</i>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UCHMqbK2BWJZZ7KBXxjhXoKA?view_as=subscriber">
						<i class ="fab fa-youtube social  youtube fa-3x">
						</i>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/company/idealgroup/">
						<i class ="fab fa-linkedin-in fa-3x">
						</i>
					</a>
				</li>-->
				<div class="social-share">
  <a href="https://www.facebook.com/IdealGroupOfficial/" class="social-media-btn"><i class="fab fa-facebook-f"></i></a>
  <a href="https://twitter.com/IdealGroupOffical" class="social-media-btn"><i class="fab fa-twitter"></i></a>
  <a href="https://www.youtube.com/channel/UCHMqbK2BWJZZ7KBXxjhXoKA?view_as=subscriber"class="social-media-btn"><i class ="fab fa-youtube social  youtube"></i></a>
  <a href="https://www.linkedin.com/company/idealgroup/" class="social-media-btn"><i class="fab fa-linkedin-in"></i></a>
</div>
    <div class="container">
        <button class="share-btn">
            <i class="fas fa-share-alt"></i>
        </button>
        <div class="share-options">
            <div class="social-media">
			<a href="#" class="facebook"><i class="fab fa-facebook fa-lg"></i></a>
			<a href="#" class="twitter"><i class="fab fa-twitter fa-lg"></i></a>
			<a href="#" class="linkedin"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
            <div class="link-container">
                <p class="link"><?php echo get_permalink(); ?></p>
                <button class="copy-btn">copy</button>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
                
                
                
			</ul>
          </div>  
            

            
		</section>
		<br>
		<hr>
		
		
		
			<div class="related_blog">
      <h2>Related Blog</h2>
      <div class="r_blog_slider owl-carousel" id="rb_slider">
		  
		  <?php
			$related_query = new WP_Query(array(
    	'post_type' => 'post',
    	'category__in' => wp_get_post_categories(get_the_ID()),
    	'post__not_in' => array(get_the_ID()),
    	'posts_per_page' => 3,
    	'orderby' => 'date',
			));
			?>
			  		<?php if ($related_query->have_posts()) { ?>
        		<?php while ($related_query->have_posts()) { ?>
						<?php $related_query->the_post(); ?>
				
				
		  
        <div class="item">
          <div class="rb_box">
            <div class="rb_img"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true ); ?>" > </a></div>
            <div class="rb_content">
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <h5><a href="#"> <?php the_category( ' ' ); ?> | <?php the_time(get_option('date_format')); ?></a></h5>
              	<?php the_excerpt(); ?>
            </div>
          </div>
        </div>
		  		<?php } ?>
    			<?php wp_reset_postdata(); ?>
					<?php } ?>
      </div>
    </div>
		
	</main><!-- #main -->

<?php
get_sidebar();?>
</div>
<?php
get_footer();?>
