<?php global $lcp_image;

// Check rows exists.
if (have_rows('banner')):
	$bnr_lp_cntr = 0;
// Loop through rows.
	while (have_rows('banner')): the_row();
		$dskimage = get_sub_field('desktop_image');

		if (!empty($dskimage)):

			$bnr_lp_cntr++;
			if ($bnr_lp_cntr == 1) {
				$lcp_image = esc_url($dskimage['url']);
			}

		endif;

	endwhile;
endif;
?>
<?php get_header();?>
<h1 class="d-none">Premium Residential & Commercial Properties</h1>
<!-- main content -->
<div class="main_content">
  <div class="content_top">
    <div class="content_top_inner">
      <div class="main">
        <div class="big_slider owl-carousel owl-theme" id="main_slider">
          <?php

// Check rows exists.
if (have_rows('banner')):
	$bnr_lp_cntr = 0;
	// Loop through rows.
	while (have_rows('banner')): the_row();
		?>
		            <div class="item">
		              <a href="#">
		                <?php
		$dskimage = get_sub_field('desktop_image');
		if (!empty($dskimage)):
			$bnr_lp_cntr++;
			if ($bnr_lp_cntr == 1) {
				$lcp_image = esc_url($dskimage['url']);
			}

			if (wp_is_mobile()) {
				if ($bnr_lp_cntr == 1) {
					$lcp_image = esc_url($dskimage['sizes']['medium_large']);
				}
				?>
			                    <img src="<?php echo esc_url($dskimage['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($dskimage['alt']); ?>" <?php if ($bnr_lp_cntr > 1) {?>loading="lazy"<?php }?>  />
			                 <?php } else {?>
			                  <img src="<?php echo esc_url($dskimage['url']); ?>" alt="<?php echo esc_attr($dskimage['alt']); ?>" <?php if ($bnr_lp_cntr > 1) {?>loading="lazy"<?php }?>  />
			                <?php }?>

			              <?php endif;?>
		              <span class="main_banner_caprion"><?php echo get_sub_field('info'); ?></span>
		            </a>
		          </div>
		          <?php
	endwhile;

endif;

?>
            <?php ?>
        </div>
      </div>
    </div>
  </div>
  <section class="search_section">
    <div class="content_bottom_inner">
      <div class="bottom_left">
        <h2><?php the_field('ideal_search_heading');?></h2>
        <div class="form_sec">
         <form>
          <div class="form_row">
            <div class="form_block">
              <label>Project Type</label>
              <div class="custom_search">
                <select name="parent_selection" id="parent_selection">
                  <option value="">-- Please Select --</option>
                  <option value="Residential Project">Residential Project</option>
                  <option value="Commercial Project">Commercial Project</option>
                </select>
                <select name="child_selection" id="child_selection" disabled="disabled"></select>
                <select name="child_selection_sec" id="child_selection_sec" disabled="disabled"></select>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="projects_section">
    <div class="projests_row">

      <div class="project_left">
        <h2><?php the_field('residential_project_heading');?></h2>

        <div class="pl_row">



         <?php

// Check rows exists.
if (have_rows('project_block')):
	$count = 0;

	// Loop through rows.
	while (have_rows('project_block')): the_row();
		$count++;
		?>

		            <div class="pro_block">
		              <a href="<?php echo get_sub_field('link'); ?>">
		               <?php
		$image = get_sub_field('image');
		//var_dump($image);
		if (!empty($image)): ?>
		                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
		              <?php endif;?>
	              <span class="pro_name"><?php echo get_sub_field('text'); ?></span>
	            </a>
	          </div>

	          <?php if ($count == 3) {?>
	          </div>
	        </div>

	        <div class="project_right">
	          <h2><?php the_field('commercial_project_heading');?></h2>

	        <?php }?>
	        <?php

	// End loop.

endwhile;

// No value.
// else :
// Do something...
endif;

?>

  </div>
</div>
</section>
<section class="home_about">
  <div class="h_ab_row">
    <div class="h_ab_block">
      <div class="home_ab_img">
        <img src="<?php bloginfo('template_url');?>/images/commarcial_image.webp" alt="" loading="lazy" >
      </div>
    </div>
    <div class="h_ab_block">
      <div class="home_ab_block">
        <h2><?php the_field('about_ideal_group_heading');?></h2>
        <?php the_field('about_ideal_group_description');?>
        <a class="page_btn" href="<?php the_field('read_more_url_');?>"><?php the_field('read_more_button');?></a>
      </div>
    </div>
  </div>
</section>
<section class="resources">
  <div class="resources_inner">
    <ul class="tab_btn_outer">
      <li><a href="#" data-rel="tab-1" class="active"><?php the_field('buyer_guide_heading');?></a></li>
      <li><a href="#" data-rel="tab-2"><?php the_field('responsibility_guide_heading');?></a></li>
      <li><a href="#" data-rel="tab-3"><?php the_field('blogs_heading');?></a></li>
    </ul>
    <div class="tab_container">
      <div class="tab_content" id="tab-1" style="display: block;">
        <div class="tab_row">
          <div class="tab_block">
              </div>
              <div class="tab_block">
                <div class="guide_block">
                  <img src="<?php bloginfo('template_url');?>/images/PDF_file_icon.webp" alt="Ideal Buyers Guide Download PDF" loading="lazy">
                  <a href="<?php the_field('pdf_file');?>" target="_blank">Download</a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab_content" id="tab-2">
            <div class="tab_row">
              <div class="tab_block">
              </div>
              <div class="tab_block">
                <div class="guide_block">
                  <img src="<?php bloginfo('template_url');?>/images/PDF_file_icon.webp" alt="Ideal Buyers Guide Download PDF" loading="lazy" >
                  <a href="<?php the_field('responsible_living_guide_pdf_file');?>" target="_blank">Download</a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab_content" id="tab-3">
            <div class="tab_row">
            <?php
            $blog = new WP_Query(array(
            'posts_per_page'=>3,        //-1 stands for all
            'post_type'=> 'post',
            'order_by'=> 'date',
            'order'=> 'DESC',
            'meta_key' => '',
            'meta_value' => '',

            ));
            while($blog->have_posts()): $blog->the_post();
            ?>


              <div class="b_block_outer">
                <div class="blog_block">
                  <div class="blog_img">
                    <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>" loading="lazy"> </a>
                  </div>
                  <div class="blog_cont">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <span class="b_date"> <?php the_category(' ');?> / <?php the_time(get_option('date_format'));?></span>
                      <?php the_excerpt();?>

                  </div>
                </div>
                
              </div>
              <?php 
              endwhile;
              wp_reset_query(); 
              ?>
            </div>
            
            <div class="btn-loadmore"><a href="https://www.ideal.in/blog/" class="loadmore_btn">Load More</a></div>
            
            
          </div>
          
          
          
        </div>
      </div>
    </section>
    <section class="content_bottom">
      <div class="content_bottom_inner">
        <div class="bottom_left">
          <h2><?php the_field('get_in_touch_heading');?></h2>
          <div class="form_sec">
              <?php echo do_shortcode('[contact-form-7 id="693" title="Home search Form"]'); ?>
            </div>
          </div>
          <div class="bottom_right">
            <h2><?php the_field('review_heading');?></h2>
            <div class="testimonials owl-carousel owl-theme" id="testimonial">

             <?php

// Check rows exists.
if (have_rows('person_review')):

	// Loop through rows.
	while (have_rows('person_review')): the_row();
		?>

		                <div class="item">
		                  <div class="testimo_img"><?php
		$reviewimage = get_sub_field('image');
		if (!empty($reviewimage)): ?>
		                    <img src="<?php echo esc_url($reviewimage['url']); ?>" alt="<?php echo esc_attr($reviewimage['alt']); ?>" loading="lazy" />
		                    <?php endif;?></div>
	                    <div class="testimo_info">
	                      <em><?php echo get_sub_field('review'); ?></em>
	                      <span><?php echo get_sub_field('person'); ?></span>
	                    </div>
	                  </div>

	                  <?php

endwhile;

endif;

?>

           
        </div>
      </div>
    </div>
  </section>
</div>
<!-- main content -->


<?php get_footer();?>
