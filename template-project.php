<?php
/**
* Template Name: Project Template
**/
get_header();
// if(have_posts())
// {
//     the_post();
// }
?>


 <div class="main_content">
    <section class="content_top">
      <div class="content_top_inner">
        <div class="main prject_main">
		  <div class="legacy_stamp">
			  <?php 
			   $image = get_field('legacy_stamp');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
			  </div>
           <div class="big_slider owl-carousel owl-theme" id="main_slider">
			  <?php

            // Check rows exists.
                if( have_rows('slider') ):

                // Loop through rows.
                while( have_rows('slider') ) : the_row();
            ?>
            <div class="item">
              <a href="#">
				  <?php
               $deskimage = get_sub_field('image');
                  if( !empty( $deskimage ) ): ?>
                      <img src="<?php echo esc_url($deskimage['url']); ?>" alt="<?php echo esc_attr($deskimage['alt']); ?>" />
                  <?php endif; ?>
                <span class="main_banner_caprion"><?php echo get_sub_field('title'); ?></span>
				  <?php if(get_sub_field('price_on_request_text')!="") { ?>
				  <span class="priceon">
                  <?php echo get_sub_field('price_on_request_text'); ?>
                </span>
				  <?php } ?>
              </a>
            </div>
			  <?php
                // End loop.

                    endwhile;
                    endif;

                ?>
          </div>                   
        </div>        
      </div>
    </section>


    <section class="breadcrumb_sec">
      <div class="breadcrumb">
       <?php the_field('bredcrumb'); ?>
      </div>
    </section>
	 
<div class="details_outer">
<?php if(get_field('overview_description')!='') { ?>
    <section class="details_section">
      <div class="ds_inner">
        <div class="ab_info ds_block">
          <h2><strong><?php the_field('overview_heading'); ?></strong></h2>
        <?php the_field('overview_description'); ?>
		  </div>
          </div>
    </section>
<?php } ?>
	 
	 <?php if(get_field('specification_description')!='') { ?>
	 <section class="details_section">
      <div class="ds_inner">
		    <div class="ab_info ds_block">
          <h2><strong><?php the_field('specification_heading'); ?></strong></h2>
     				  <?php the_field('specification_description'); ?>
        	</div>
          </div>
    </section>
	 <?php } ?>

    <?php if(get_field('amenities_description')!="" or get_field('proximity_description')!="") { ?>
	 
	<section class="details_section <?php if(get_field('specification_description')=='') { ?> <?php } ?> <?php if(get_field('home_finance_description')!=""){?>hfa<?php } ?>">
      <div class="ds_inner">
        <div class="ab_info ds_block ds_block_50">
          <h2><?php the_field('amenities_heading'); ?></h2>
         <?php the_field('amenities_description'); ?>
        </div>
		  
        <div class="ab_info ds_block ds_block_50">
          <h2><strong><?php the_field('proximity_heading'); ?></strong></h2>
         <?php the_field('proximity_description'); ?>
        </div>
		  <?php if(get_field('home_finance_description')!=""){?>
		   <div class="ab_info ds_block ds_block_50">
          <h2><?php the_field('home_finance_heading'); ?></h2>
         <?php the_field('home_finance_description'); ?>
        </div>
		  <?php } ?>
      </div>
    </section>
	 <?php } ?>

<?php if( have_rows('project_progress_image') ):  ?>
    <section class="details_section">
      <div class="ds_inner">
        <div class="ab_info ds_block">
          <h2><strong> <?php the_field('project_progress_heading'); ?></strong></h2>
          <div class="progress_gallery">
			  <?php /*<?php the_field('project_progress_gallery'); ?> */ ?>
			   <?php

            // Check rows exists.
                 

                // Loop through rows.
                  while( have_rows('project_progress_image') ) : the_row();
                ?>
			  <?php 
                  $image = get_sub_field('image');
                  if( !empty( $image ) ): ?>
            <a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <span><img src="<?php bloginfo('template_directory'); ?>/images/zoom.png" alt=""></span>
            </a>
			 <?php endif; ?>
			  <?php
                // End loop.

                endwhile;

            // No value.
            // else :
                // Do something...
            

              ?> 
          </div>
        </div>
      </div>
    </section>
	 <?php endif; ?>
	 
	 
	 </div>

    <section class="tab_section">
      <div class="tab-teaser">
        <div class="tab-menu">
          <?php 
          if(get_field('active_tab')=='download_tab') { 
            $download_class = 'active';
            $download_display = 'block';
          }
          if(get_field('active_tab')=='location_map_tab') {
            $location_class = 'active';
            $location_display = 'block';
          }
          if(get_field('active_tab')=='site_plans_tab'){
            $site_plan_class = 'active';
            $site_plan_display = 'block';
          }
          if(get_field('active_tab')=='floor_plans_tab'){
            $floor_plan_class = 'active';
            $floor_plan_display = 'block';
          }
          if(get_field('active_tab')=='project_walkthrough_tab'){
            $project_class = 'active';
            $project_display = 'block';
          }
          if(get_field('active_tab')=='video_testimonials'){
            $video_testimonials_class = 'active';
            $video_testimonials_display = 'block';
          }
          if(get_field('active_tab')=='environmental_clearance_certificate'){
            $certificate_class = 'active';
            $certificate_display = 'block';
          }
          if(get_field('active_tab')=='payment_schedule'){
            $payment_schedule_class = 'active';
            $payment_schedule_display = 'block';
          }
            

          ?>
          <ul>
            <?php if(get_field('download_tab')){ ?>
			  <li><a href="#" class="<?php echo $download_class; ?>" data-rel="tab-1"><span><img src="<?php bloginfo('template_directory'); ?>/images/side_icon7.png" alt=""></span>Download</a></li>
			  <?php } ?>
             <?php if(get_field('location_map_tab')){ ?>
			  <li><a href="#" data-rel="tab-2" class="<?php echo $location_class; ?>"><span><img src="<?php bloginfo('template_directory'); ?>/images/side_icon2.png" alt=""></span>Location Map</a></li>
			  <?php } ?>
			   <?php if(get_field('site_plans_tab')){ ?>
			  <li><a href="#" data-rel="tab-3" class="<?php echo $site_plan_class; ?>"><span><img src="<?php bloginfo('template_directory'); ?>/images/side_icon6.png" alt=""></span>Site Plan</a></li>
			  <?php } ?>
            <?php if(get_field('floor_plans_tab')){ ?>
			  <li><a href="#" data-rel="tab-4" class="<?php echo $floor_plan_class; ?>"><span><img src="<?php bloginfo('template_directory'); ?>/images/side_icon4.png" alt=""></span>Floor Plans</a></li>
			  <?php } ?>
            <?php if(get_field('project_walkthrough_tab')){ ?>
			  <li><a href="#" data-rel="tab-5" class="<?php echo $project_class; ?>"><span><img src="<?php bloginfo('template_directory'); ?>/images/side_icon6.png" alt=""></span>Project Walkthrough</a></li>
			  <?php } ?>
			 <?php if(get_field('video_testimonials')){ ?>
			  <li><a href="#" data-rel="tab-6" class="<?php echo $video_testimonials_class; ?>"><span><img src="<?php bloginfo('template_directory'); ?>/images/side_icon6.png" alt=""></span>Video testimonials</a></li>
			  <?php } ?>
           <?php if(get_field('environmental_clearance_certificate')){ ?>
			  <li><a href="#" data-rel="tab-7" class="<?php echo $certificate_class; ?>"><span><img src="<?php bloginfo('template_directory'); ?>/images/ec-certificates-icon.png" alt=""></span>Environmental Clearance Certificate</a></li>
			  <?php } ?>                 
			  <?php if(get_field('payment_schedule')){ ?>
			  <li><a href="#" data-rel="tab-8" class="<?php echo $payment_schedule_class; ?>"><span><img src="<?php bloginfo('template_directory'); ?>/images/ec-certificates-icon.png" alt=""></span>Payment Schedule</a></li>
			  <?php } ?> 
          </ul>
        </div>
	<?php if(get_field('download_tab') || get_field('location_map_tab') || get_field('site_plans_tab') || get_field('floor_plans_tab') || get_field('project_walkthrough_tab') || get_field('video_testimonials') || get_field('environmental_clearance_certificate') || get_field('payment_schedule')) { ?>
        <div class="tab-main-box">
            <div class="tab-box" id="tab-1" style="display:<?php echo $download_display;?>">
              <div class="ab_info tab_info">
                <?php the_field('download_tab'); ?>
              </div>
            </div>
            <div class="tab-box" id="tab-2" style="display:<?php echo $location_display;?>">
              <div class="ab_info tab_info">
                <?php echo str_replace(['<p>', '</p>'], '', get_field('location_map_tab')); ?>
              </div>
            </div>
			      <div class="tab-box" id="tab-3" style="display:<?php echo $site_plan_display;?>">
              <div class="ab_info tab_info">
                <?php the_field('site_plans_tab'); ?>
              </div>
            </div>
            <div class="tab-box" id="tab-4" style="display:<?php echo $floor_plan_display;?>">
              <div class="ab_info tab_info">
                <?php the_field('floor_plans_tab'); ?>
              </div>
            </div>
            
            <div class="tab-box" id="tab-5" style="display:<?php echo $project_display;?>">
              <div class="ab_info tab_info">
                <?php the_field('project_walkthrough_tab'); ?>
              </div>
            </div>
			
			<div class="tab-box" id="tab-6" style="display:<?php echo $video_testimonials_display;?>">
              <div class="ab_info tab_info">
                <?php the_field('video_testimonials'); ?>
              </div>
            </div>
			
			<div class="tab-box" id="tab-7" style="display:<?php echo $certificate_display;?>">
              <div class="ab_info tab_info">    
				<?php
				$file = get_field('environmental_clearance_certificate');
				if( $file ): ?>
				   <ul class="download">
					   <li><a href="<?php echo $file['url']; ?>">Download Environmental Clearance Certificate</a></li>
				  </ul>
				<?php endif; ?>
              </div>
            </div>
			
			
			<div class="tab-box" id="tab-8" style="display:<?php echo $payment_schedule_display;?>">
              <div class="ab_info tab_info">    
			<?php
			$file = get_field('payment_schedule');
			if( $file ): ?>
				<a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
			<?php endif; ?>
              </div>
            </div>
			<?php } ?>
        </div>
		 </div>
		
		<!-- form-start -->
<section class="bnr_form_section">
    <div class="container">
          <div class="bnr_frm_inn">
            <h3> Contact Us Now </h3>
            <!--<form name="ban_frm" id="ban_frm">-->
             <!-- <div class="two_fld2">
    <div class="form-group">
      <input type="text" name="nme" id="nme" class="form-control" placeholder="Name*" onKeyUp="txtValidate();">
    </div>
     <div class="form-group">
      <input type="text" name="eml" id="eml" class="form-control" placeholder="Eamil*">
    </div>

              </div>
              <div class="two_fld2">
    <div class="form-group">
      <input type="tel" name="phn" id="phn" class="form-control" placeholder="Phone*" onKeyUp="numValidate();">
    </div>
    <div class="form-group">
      <textarea class="form-control textarea_box" name="msg" id="msg" placeholder=" Your Query*"></textarea>
    </div>
              </div>
   <div class="two_fld3">
    <div class="form-group">
      <input type="button" id="ban_btn" value="SUBMIT" class="frm_sbmt sbmt_btn">
    </div>
  </div>-->
				<?php echo do_shortcode('[contact-form-7 id="2619" title="Contact Form"]'); ?>
            <!--</form>-->
          </div>
        </div>
  </section>
		<!-- form-end -->
    </section>


    
    <div class="bottom_sec">
      <div class="b_bottom">
        <ul>
          <li>
            <strong class="m_detail">FOR MORE DETAILS</strong>
            <span class="m_number"><em><img src="<?php bloginfo('template_directory'); ?>/images/call.png" alt="Make A Call"></em><a href="tel:+913371646400">+91 33 71646400</a></span>
          </li>
          <li><img src="<?php the_field('logo'); ?>" alt=""></li>
          <li><a class="enquery" href="<?php the_field('enquire_now_url'); ?>"><em><img src="<?php bloginfo('template_directory'); ?>/images/enquire-now-icon.png" alt=""></em>ENQUIRE NOW</a></li>
        </ul>
      </div>
    </div>
  </div>


<div id="myModal" class="modal custom_modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="cross">&times;</span>
    <div id="popup_form" style="display:none;"><?php echo do_shortcode('[contact-form-7 id="2007" title="Download Form"]'); ?></div>
  </div>
</div>
<div id="myModal1" class="modal custom_modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="cross1">&times;</span>
    <div id="popup_form1" style="display:none;"><?php echo do_shortcode('[contact-form-7 id="2007" title="Download Form"]'); ?></div>
  </div>
</div>
<div id="myModal2" class="modal custom_modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="cross2">&times;</span>
    <div id="popup_form2" style="display:none;"><?php echo do_shortcode('[contact-form-7 id="2007" title="Download Form"]'); ?></div>
  </div>
</div>
  <script type="text/javascript">
function form()
	{
		  document.getElementById('popup_form').style.display = 'block';
		  document.getElementById('popup_form1').style.display = 'block';
			document.getElementById('popup_form2').style.display = 'block';
	}
</script>
<?php
get_footer();
?>
