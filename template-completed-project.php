<?php
/**
 * Template Name: Completed Project
 **/
get_header();

?>
<h1 class="d-none">Completed Resiential Projects</h1>

<div class="main_content">
  <div class="big_slider">
    <div class="item">
      <img src="<?php bloginfo('template_directory');?>/images/completed-project_banner.jpg" alt="Ideal Completed Project Banner">
    </div>
  </div>
  <section class="breadcrumb_sec">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Residential Projects</a></li>
        <li>Completed Projects</li>
      </ul>
    </div>
  </section>
  <section class="search_section search_section_inner">
    <div class="content_bottom_inner">
      <div class="bottom_left">
      
      <div class="tab-container">
	<div class="tab-nav">
		<div class="tab is-desktop">
			<button class="tablinks" onClick="openTab(event, 'tab1')" id="defaultOpen">ALL BHK</button>
			<button class="tablinks" onClick="openTab(event, 'tab2')">1BHK</button>
			<button class="tablinks" onClick="openTab(event, 'tab3')">2BHK</button>
            <button class="tablinks" onClick="openTab(event, 'tab4')">3BHK</button>
            <button class="tablinks" onClick="openTab(event, 'tab5')">4BHK</button>
		</div>
		<div class="select">
			<select class="is-mobile" onChange="openTab(event, this.value)"> 
				<option value="tab1">ALL BHK</option> 
				<option value="tab2">1BHK</option> 
				<option value="tab3">2BHK</option>
                <option value="tab3">3BHK</option>
                <option value="tab3">4BHK</option>
			</select>
		</div>
	</div>


	<div id="tab1" class="tabcontent">
        <div class="media">
                    <div class="media__body">
                           <?php
        if (have_posts()): while (have_posts()): the_post();
        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
            $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',
            ));
            while ($some->have_posts()): $some->the_post();
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects') {?>
                        <div class="col_4">

                         <div class="project_block">

                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                            <?php }?>
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
                </div>
	</div>

	<div id="tab2" class="tabcontent">
	<div class="media">
                    <div class="media__body">
                            <?php
            if (have_posts()): while (have_posts()): the_post();
                            ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
                    $some = new WP_Query(array(
                    'post_type' => 'ideal_project',
                    'posts_per_page' => -1, //-1 stands for all
                    'order_by' => 'date',
                    'meta_key' => '',
                    'meta_value' => '',
                    'order' => 'ASC',
                    'taxonomy' => 'project',
                ));
                while ($some->have_posts()): $some->the_post();
                $ibhk=0;
                ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_1') == '1 BHK')) {
                        $ibhk=1; ?>
                        <div class="col_4">

                         <div class="project_block">

                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                            <?php }?>
                            <?php endwhile;
                            wp_reset_query();
                            ?>
                            <?php
                            endwhile;
                            endif;
                            ?>
                            <?php
                            if($ibhk==0)
                            {
                                echo "<p>No Projects Available.</p>";
                            }
                            ?>
                         </div>
                       </div>
                    </div>
                </div>
	</div>

	<div id="tab3" class="tabcontent">
	  <div class="media">
                    <div class="media__body">
                        <?php
                if (have_posts()): while (have_posts()): the_post();
                        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
            $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',
        ));
            $twobhk=0;
        while ($some->have_posts()): $some->the_post();
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_2') == '2 BHK')) { 
                        $twobhk=1;?>
                        <div class="col_4">
                         <div class="project_block">
                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                        <?php }?>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <?php
                        endwhile;
                        endif;
                        ?>
                        <?php
                        if($twobhk=0)
                        {
                            echo "<p>No Projects Available.</p>";
                        }
                        ?>
                         </div>
                       </div>
                    </div>
                </div>
	</div>
    
    <div id="tab4" class="tabcontent">
	  <div class="media">
                    <div class="media__body">
                        <?php
                if (have_posts()): while (have_posts()): the_post();
                        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
            $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',

        ));

        while ($some->have_posts()): $some->the_post();
            $threebhk=0;
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_3') == '3 BHK')) { $threebhk=1; ?>
                        <div class="col_4">
                         <div class="project_block">
                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                        <?php }?>
                       <?php endwhile;
                        wp_reset_query();
                        ?>
                        <?php
                        endwhile;
                        endif;
                        ?>
                        <?php
                        if($threebhk=0)
                        {
                            echo "<p>No Projects Available.</p>";
                        }
                        ?>
                             </div>
                           </div>
                    </div>
                </div>
	</div>
    
    <div id="tab5" class="tabcontent">
	  <div class="media">
                    <div class="media__body">
                            <?php
if (have_posts()): while (have_posts()): the_post();
        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
        $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',

        ));

        while ($some->have_posts()): $some->the_post();
            $fourbhk=0;
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_4') == '4 BHK')) { $fourbhk=1;?>
                        <div class="col_4">

                         <div class="project_block">

                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                        <?php }?>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <?php
                        endwhile;
                        endif;
                        ?>
                        <?php
                        if($fourbhk=0)
                        {
                            echo "<p>No Projects Available.</p>";
                        }
                        ?>
                                  </div>
                               </div>
                            </div>
                        </div>
	</div>
    
    
</div>
      
      
      
      
      
      
      
      

      <!--<div class="tabpanel">
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
                           <?php
        if (have_posts()): while (have_posts()): the_post();
        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
            $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',
            ));
            while ($some->have_posts()): $some->the_post();
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects') {?>
                        <div class="col_4">

                         <div class="project_block">

                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                            <?php }?>
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
                </div> 
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-2">
                <div class="media">
                    <div class="media__body">
                            <?php
            if (have_posts()): while (have_posts()): the_post();
                            ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
                    $some = new WP_Query(array(
                    'post_type' => 'ideal_project',
                    'posts_per_page' => -1, //-1 stands for all
                    'order_by' => 'date',
                    'meta_key' => '',
                    'meta_value' => '',
                    'order' => 'ASC',
                    'taxonomy' => 'project',
                ));
                while ($some->have_posts()): $some->the_post();
                $ibhk=0;
                ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_1') == '1 BHK')) {
                        $ibhk=1; ?>
                        <div class="col_4">

                         <div class="project_block">

                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                            <?php }?>
                            <?php endwhile;
                            wp_reset_query();
                            ?>
                            <?php
                            endwhile;
                            endif;
                            ?>
                            <?php
                            if($ibhk==0)
                            {
                                echo "<p>No Projects Available.</p>";
                            }
                            ?>
                         </div>
                       </div>
                    </div>
                </div>                
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-3">
                <div class="media">
                    <div class="media__body">
                        <?php
                if (have_posts()): while (have_posts()): the_post();
                        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
            $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',
        ));
            $twobhk=0;
        while ($some->have_posts()): $some->the_post();
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_2') == '2 BHK')) { 
                        $twobhk=1;?>
                        <div class="col_4">
                         <div class="project_block">
                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                        <?php }?>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <?php
                        endwhile;
                        endif;
                        ?>
                        <?php
                        if($twobhk=0)
                        {
                            echo "<p>No Projects Available.</p>";
                        }
                        ?>
                         </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-4">
                <div class="media">
                    <div class="media__body">
                        <?php
                if (have_posts()): while (have_posts()): the_post();
                        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
            $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',

        ));

        while ($some->have_posts()): $some->the_post();
            $threebhk=0;
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_3') == '3 BHK')) { $threebhk=1; ?>
                        <div class="col_4">
                         <div class="project_block">
                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                        <?php }?>
                       <?php endwhile;
                        wp_reset_query();
                        ?>
                        <?php
                        endwhile;
                        endif;
                        ?>
                        <?php
                        if($threebhk=0)
                        {
                            echo "<p>No Projects Available.</p>";
                        }
                        ?>
                             </div>
                           </div>
                    </div>
                </div>
            </div>
            <div class="tabpanel__panel" id="tabpanel__panel-5">
                <div class="media">
                    <div class="media__body">
                            <?php
if (have_posts()): while (have_posts()): the_post();
        ?>
              <div class="project_container">
                <div class="project_row">
                  <?php
        $some = new WP_Query(array(
            'post_type' => 'ideal_project',
            'posts_per_page' => -1, //-1 stands for all
            'order_by' => 'date',
            'meta_key' => '',
            'meta_value' => '',
            'order' => 'ASC',
            'taxonomy' => 'project',

        ));

        while ($some->have_posts()): $some->the_post();
            $fourbhk=0;
            ?>
                       <?php if (get_field('project_type') == 'Completed Projects' && (get_field('bhk_4') == '4 BHK')) { $fourbhk=1;?>
                        <div class="col_4">

                         <div class="project_block">

                           <div class="project_img">
                             <div class="p_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta('_wp_attachment_image_alt', true); ?>"></div>
                             <?php the_terms(get_the_ID(), 'project', ' ', ', ', ' ');?>
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
                        <?php }?>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                        <?php
                        endwhile;
                        endif;
                        ?>
                        <?php
                        if($fourbhk=0)
                        {
                            echo "<p>No Projects Available.</p>";
                        }
                        ?>
                                  </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
         </div>
      </div>
    </section>
 </div>

 <?php get_footer();?>