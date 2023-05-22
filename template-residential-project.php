<?php
/**
* Template Name: Residential Projects
**/
get_header();

?>


<!-- main content -->
  <div class="main_content">
    <!--<div class="big_slider">
      <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/images/project_banner1.jpg" alt="">
      </div>
    </div>-->
    <section class="breadcrumb_sec">
      <div class="breadcrumb">
         <?php the_field('breadcrumb'); ?>
      </div>
    </section>
    <!-- <section class="search_section search_section_inner">
      <div class="content_bottom_inner">
        <div class="bottom_left">
          <div class="form_sec">
            <form>
              <div class="form_row">
                <div class="form_block">
                  <label>City</label>
                  <div class="custom_select">
                    <select class="select_box">
                      <option>Select City</option>
                      <option>Guwahati</option>
                      <option>Howrah</option>
                      <option>Kolkata</option>
                    </select>
                  </div>                  
                </div>
                <div class="form_block">
                  <label>Status</label>
                  <div class="custom_select">
                    <select class="select_box">
                      <option>Completed</option>
                      <option>Ongoing</option>
                      <option>Ready Move On</option>
                    </select>
                  </div>                  
                </div>
                <div class="form_block">
                  <input type="submit" name="" value="Search" class="submit">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>      
    </section> -->
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
    <div class="project_container">
      <div class="project_row">
                  <?php 
                  $Query = new WP_Query(array(
                  'post_type'=> 'ideal_project',
                  'posts_per_page'=>-1,        //-1 stands for all
                  'order_by'=> 'date',     
                  'meta_key' => '',
                  'meta_value' => '',
                  'order'=> 'DESC',
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'project',    // taxonomy name
                          'field' => 'term_id',       // term_id, slug or name 
                          'terms' =>  '44',             // term id, term slug or term name
                         )
                      )
                   
                          ));
      
        if($Query -> have_posts()):

          while($Query -> have_posts()): $Query -> the_post();
              
            ?>
                        <div class="col_4">
                          <div class="project_block">
                            <div class="project_img">
                              <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                              <?php the_terms(get_the_ID(), 'project');?>
                              <a class="share" href="#"><i class="fas fa-share-alt"></i></a>
                              <span class="completed"><?php the_field('project_type');?></span>
                              </div>
                            <div class="project_content">
                              <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                              <p><span class="addr_icon"><i class="fas fa-map-marker-alt"></i></span><?php the_field('address');?></p>
                              <div class="pr_btn_hldr"><a class="p_detail" href="<?php the_permalink();?>">Details</a></div>
                            </div>
                          </div>
                          </div>
    			                    <?php
                              endwhile;
                              else:
                              "No Administrative Offices Found. Try again later";
                              endif;
                              wp_reset_postdata();
                              ?>
                        </div>
                      </div>
                    </div>

<?php
get_footer();
?>