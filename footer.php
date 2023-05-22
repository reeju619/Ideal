<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ideal-new
 */

?>

<footer class="main_footer">
    <div class="footer_inner">
      <div class="footer_block f_block_a">
        <?php //The Arguments of the menu
              $home = array(
                          'menu' => 'footer home',
                          'container' => 'spaaaann',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-2'
                      );
            //to display the menu
            wp_nav_menu( $home );
            ?>
        <h3>About Us</h3>
       
        	<?php //The Arguments of the menu
              $profile = array(
                          'menu' => 'footer profile',
                          'container' => 'spaaan',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => '3',
                          'walker' => '',
                          'theme_location' =>   'menu-6'
                      );
            //to display the menu
            wp_nav_menu( $profile );
            ?>
        
       
      </div>

      <div class="footer_block f_block_b">
        <h3>PROJECTS</h3>
		<h3>Residential Projects</h3>
        <h4>Ongoing Projects</h4>
       
        	 <?php //The Arguments of the menu
              $ongoingprojects = array(
                          'menu' => 'Footer Project Menu',
                          'container' => 'spann',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-3'
                      );
            //to display the menu
            wp_nav_menu( $ongoingprojects );
            ?>
         
       
        <h4>Ready to Move in</h4>
      
        	<?php //The Arguments of the menu
              $readymove = array(
                          'menu' => 'footer_ready_move',
                          'container' => 'spaanbn',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-7'
                      );
            //to display the menu
            wp_nav_menu( $readymove );
            ?>

         
      
      </div>

      <div class="footer_block f_block_b">

        <h4>Completed Projects</h4>
     
        	<?php //The Arguments of the menu
              $completed = array(
                          'menu' => 'footer_completed',
                          'container' => 'spaanbnnnss',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-8'
                      );
            //to display the menu
            wp_nav_menu( $completed );
            ?>
              
       
        <h3><a href="">Commercial Projects</a></h3>
       
        	  <?php //The Arguments of the menu
              $commercial = array(
                          'menu' => 'footer comercial',
                          'container' => 'spaanbnnnssaa',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-9'
                      );
            //to display the menu
            wp_nav_menu( $commercial );
            ?>
          <?php /* <li><a href="#">- Ideal Unique Centre, E.M. Bypass</a></li> */ ?>
       
      </div>

      <div class="footer_block f_block_a">
        <h3>GALLERY</h3>
        
          <?php //The Arguments of the menu
              $foo = array(
                          'menu' => 'Footer third Project Menu',
                          'container' => 'spaanbnnnssaa',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-5'
                      );
            //to display the menu
            wp_nav_menu( $foo );
            ?>
       
        
      
           <?php //The Arguments of the menu
              $footer_carrer = array(
                          'menu' => 'Footer Careers',
                          'container' => 'spaanbnnnssaazzs',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-11'
                      );
            //to display the menu
            wp_nav_menu( $footer_carrer );
            ?>
       
        
      
          <?php //The Arguments of the menu
              $footer_contact = array(
                          'menu' => 'Footer Contact',
                          'container' => 'spaanbnnnssaazzsttt',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-12'
                      );
            //to display the menu
            wp_nav_menu( $footer_contact );
            ?>
      
        
        
           <?php //The Arguments of the menu
              $footer_disclaimer = array(
                          'menu' => 'Footer Disclaimer',
                          'container' => 'spaanbnnnssaazzstttaa',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-13'
                      );
            //to display the menu
            wp_nav_menu( $footer_disclaimer );
            ?>
        
          <?php //The Arguments of the menu
              $footer_contact = array(
                          'menu' => 'Footer Blog',
                          'container' => 'spaanbnnnssaazzstttaa',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => '',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 3,
                          'walker' => '',
                          'theme_location' =>   'menu-14'
                      );
            //to display the menu
            wp_nav_menu( $footer_contact );
            ?>
       
		
      </div>

      <div class="footer_block f_block_c">
        <?php echo do_shortcode('[mailpoet_form id="1"]'); ?>
		  
		
		  
		  <div class="mobile_copyright">
         
          <ul>
            
            <li><a href="#"><img src="images/all-india.png" alt="" loading="lazy"></a></li>
          </ul>
        </div>	
		  <br>
		  <br>
		  <br>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		  
      </div>
		
    </div>
	
  </footer>



<?php //wp_footer(); ?>
  <!-- Footer end -->


         

<div class="custom_modal_outer" data-id="mdl1">
    <div class="overlay"></div>
    <div class="custommodal">
      <span class="modal_cross"><i class="fas fa-times-circle"></i></span>
      <div class="modal_body">
        <div class="modal_video" id="modal_video_content">
          
        </div>        
      </div>
    </div>
  </div>

<?php
if( is_page_template('template-project.php') or is_page_template('template-video-walkthrough.php') or is_page_template('template-photos.php')):
	?>

<?php
endif;
?>
<script>

//</script>
<script src="https://www.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js" type="text/javascript" data-bot="21592260" async></script>

<script type="text/javascript">
  jQuery('#child_selection_sec').on('change', function(){
    if(jQuery(this).val()!=''){
     window.location = jQuery(this).val();
   }
 });

</script>


<script type="text/javascript">
// Get the container element
var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    // If there's no active class
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " active";
  });
}

</script>




<script type="text/javascript">


const shareBtn = document.querySelector('.share-btn');
const shareOptions = document.querySelector('.share-options');

shareBtn.addEventListener('click', () => {
    shareOptions.classList.toggle('active');
})

</script>

<script type="text/javascript">
const copyBtn = document.querySelector('.copy-btn');
const linkText = document.querySelector('.link');

copyBtn.addEventListener('click', () => {
  navigator.clipboard.writeText(linkText.innerText).then(() => {
    console.log('Link copied to clipboard');
    copyBtn.innerText = 'copied';
  }).catch((error) => {
    console.error('Error copying link to clipboard:', error);
  });
});

</script>

<script type="text/javascript">

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>




<?php wp_footer();?>

