<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post(); 
?>

<div class="main_content">
    <div class="big_slider">
      <div class="item">
        <?php if(get_field('project_type')=='Ongoing Projects') { ?>
        <img src="images/ongoing_project_banner.jpg" alt="">
        <?php } ?>
        <?php if(get_field('project_type')=='Ready To Move In Projects') { ?>
        <img src="images/ready-to-move_banner.jpg" alt="">
        <?php } ?>
        <?php if(get_field('project_type')=='Completed Projects') { ?>
        <img src="images/completed-project_banner.jpg" alt="">
        <?php } ?>
        <?php if(get_field('project_type')=='Commercial Projects') { ?>
        <img src="images/project_banner.jpg" alt="">
        <?php } ?>
      </div>
    </div>
    <section class="breadcrumb_sec">
      <div class="breadcrumb">
        <ul>   
          <li><a href="#">Home</a></li>
          <li><a href="#">Projects</a></li>
          <li>Residential Projects</li>
        </ul>
      </div>
    </section>
    <section class="search_section search_section_inner">
      <div class="content_bottom_inner">
        <div class="bottom_left">
          <div class="form_sec">
            <form>
              <div class="form_row">
                <div class="form_block">
                  <label>Property Type</label>
                  <div class="custom_select">
                    <select class="select_box">
                      <option>Residential</option>
                      <option>Commercial</option>
                    </select>
                  </div>                  
                </div>
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
                      <option>Completed</option>
                      <option>Completed</option>
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
    </section>
    <div class="project_container">
      <div class="project_row">
         <div class="col_4">
          <div class="project_block">
            <div class="project_img">
              <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true ); ?>"></div>
        <?php the_terms( get_the_ID(), 'project', ' ', ', ', ' ' ); ?>
              <a class="share" href="#"><i class="fas fa-share-alt"></i></a>
              <span class="completed"><?php the_field('project_type'); ?></span>
            </div>
            <div class="project_content">
              <h4><a href="#"><?php the_title(); ?></a></h4>
              <p><span class="addr_icon"><i class="fas fa-map-marker-alt"></i></span><?php the_field('address'); ?></p>
				<div class="pr_btn_hldr"><a class="p_detail" href="<?php the_permalink(); ?>">Details</a></div>
            </div>
          </div>
        </div>
        <?php
              endwhile;
            
              endif;
        ?>
        
       
       
       
       
       
      
      </div>
    </div>
  </div>
  <?php
get_footer(); 
?>