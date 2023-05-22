<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ideal-new
 */

?>


<!doctype html>
<html <?php language_attributes();?>>
<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  <?php
global $lcp_image;
if (!empty($lcp_image)) {
	echo '<link rel="preload" href="' . $lcp_image . '" as="image">';

}

global $theme_options;
?>


 <link rel="preload" href="<?php echo $theme_options['header-logo']['url']; ?>" as="image">

 <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

 <style>
  .d-none{
    display: none;

  }
</style>
<?php wp_head();?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5R9RJWH');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="aZqTqLUjziGTJndApudp2Am0jvDhZMxguJOKE9kgGrY" />
</head>
<body <?php body_class();?>>
	<?php wp_body_open();?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R9RJWH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header start -->
  <!-- <div class="top">
  	<div class="contact_link">
  		<a href="tel:<?php echo $theme_options['header-contact-no']; ?>" class="top_contact">Contact No</a>
  		<a href="mailto:<?php echo $theme_options['header-email-address']; ?>" target="blank" class="top_email">Email Address</a>
  	</div>
  </div> -->
  <header class="main_header">
    <div class="logo"><a href="<?php echo $theme_options['header-logo-url']; ?>"><img src="<?php echo $theme_options['header-logo']['url']; ?>" alt="" width="147" height="56"></a></div>
    <div class="menu_icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="right_header">
      <!-- <nav class="header_nav"> -->
      	<?php //The Arguments of the menu
$args_third = array(
	'menu' => 'Header Menu',
	'container' => 'nav',
	'container_class' => 'header_nav',
	'container_id' => '',
	'menu_class' => '',
	'menu_id' => '',
	'echo' => true,
	'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
	'before' => '',
	'after' => '',
	'link_before' => '',
	'link_after' => '',
	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'item_spacing' => 'preserve',
	'depth' => 3,
	'walker' => '',
	'theme_location' => 'menu-10',
);
//to display the menu
wp_nav_menu($args_third);
?>

       
<div class="header_contact">
  <div class="quick_contact">
    <span class="phone_icon"><img src="<?php bloginfo('template_directory');?>/images/qc-icon.png" alt="Sales Enquiry"></span>
    <div class="r_contact">
      <a class="s_enq" href="<?php echo $theme_options['header-sales-url']; ?>"><?php echo $theme_options['header-sales-text']; ?></a>
      <a class="p_no" href="tel:<?php echo $theme_options['header-contact-no']; ?>"><?php echo $theme_options['header-contact-no']; ?></a>
      <a class="h_mail" href="mailto:<?php echo $theme_options['header-email-address']; ?>"><?php echo $theme_options['header-email-address']; ?></a>
    </div>
  </div>
        
      </div>
    </div>

  </header>




