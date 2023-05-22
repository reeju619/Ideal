<?php
/**
* Template Name: Commercial Project
**/
get_header();

?>

<div class="main_content">
    <div class="big_slider">
      <div class="item">
        <img src="<?php bloginfo('template_directory'); ?>/images/commercial.jpeg" alt="">
      </div>
    </div>
    <section class="breadcrumb_sec">
      <div class="breadcrumb">
        <ul>   
          <li><a href="#">Home</a></li>
          <li><a href="#">Projects</a></li>
          <li>Commercial Projects</li>
        </ul>
      </div>
    </section>
    <!-- <section class="search_section search_section_inner">
      <div class="content_bottom_inner">
        <div class="bottom_left">
          <div class="tabpanel">
        <input type="radio" name="tab" id="tabpanel__tab-1" class="tabpanel__tab" checked="checked"/>
        <label for="tabpanel__tab-1" class="tabpanel__tablabel">ALL BHK</label>
        <input type="radio" name="tab" id="tabpanel__tab-2" class="tabpanel__tab" />
        <label for="tabpanel__tab-2" class="tabpanel__tablabel">1BHK</label>
        <input type="radio" name="tab" id="tabpanel__tab-3" class="tabpanel__tab" />
        <label for="tabpanel__tab-3" class="tabpanel__tablabel">2BHK</label>
        <input type="radio" name="tab" id="tabpanel__tab-4" class="tabpanel__tab" />
        <label for="tabpanel__tab-4" class="tabpanel__tablabel">3BHK</label>
        <input type="radio" name="tab" id="tabpanel__tab-5" class="tabpanel__tab" />
        <label for="tabpanel__tab-5" class="tabpanel__tablabel">4BHK</label>

        <div class="tabpanel__panels">
            <div class="tabpanel__panel" id="tabpanel__panel-1">
                <div class="media">
                    <div class="media__body">
                       All BHK
                    </div>
                </div>
                
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-2">
                <div class="media">
                    <div class="media__body">
                     1BHK
                    </div>
                </div>                
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-3">
                <div class="media">
                    <div class="media__body">
                    2BHK
                    </div>
                </div>
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-4">
                <div class="media">
                    <div class="media__body">
3BHK
                    </div>
                </div>
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-5">
                <div class="media">
                    <div class="media__body">
4BHK
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>      
    </section> -->
	<?php 
                if (have_posts()) : while (have_posts()) : the_post();  
            ?>
    <div class="project_container">
      <div class="project_row">
        <?php 
                $some = new WP_Query(array(
                  'post_type'=> 'ideal_project',
                  'posts_per_page'=>-1,        //-1 stands for all
                  'order_by'=> 'date',     
                  'meta_key' => '',
                  'meta_value' => '',
                  'order'=> 'ASC',
				  'taxonomy' => 'project',
                   
                ));

                while($some->have_posts()): $some->the_post();       
                 
            ?>
		  <?php if(get_field('project_type') == 'Commercial Projects') { ?>
         <div class="col_4">
			 
          <div class="project_block">
			  
            <div class="project_img">
              <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true ); ?>"></div>
              <?php the_terms( get_the_ID(), 'project', ' ', ', ', ' ' ); ?>
              <a class="share" href="#"><i class="fas fa-share-alt"></i></a>
              <span class="completed"><?php the_field('project_type'); ?></span>
            </div>

            <div class="project_content">
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p><span class="addr_icon"><i class="fas fa-map-marker-alt"></i></span><?php the_field('address'); ?></p>
				<div class="pr_btn_hldr"><a class="p_detail" href="<?php the_permalink(); ?>">Details</a></div>
            </div>

          </div> 
        </div><?php } ?>
		  <?php endwhile; 
                        wp_reset_query();
                      ?>
        <?php
              endwhile;
            
              endif;
        ?>
        
       
       
       
       
       
      
      </div>
    </div>
  </div>

<?php get_footer(); ?>
