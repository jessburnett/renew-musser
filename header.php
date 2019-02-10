<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Simple
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title>Becca Musser - Portfolio</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
<div id="main">
<div class="headerarea">
  <div class="container">

    <!-- header-top -->
    <div class="header-inner <?php if( get_theme_mod( 'hide_slides' ) != '' || !is_front_page() && !is_home()) { ?>rel<?php } ?>">
      <!-- logo -->
      <div class="logo">
			<?php skt_simple_the_custom_logo(); ?>
            <a href="<?php echo esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>
            </div>
      <!-- logo -->
	  <div class="toggle">
         <a class="toggleMenu" href="<?php echo esc_url('#');?>"><?php _e('Menu','skt-simple'); ?></a>
     </div><!-- toggle -->
      <div class="sitenav">
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
      </div><!-- site-nav -->

      <div class="clear"></div>
    </div>
    <!-- header-inner -->
<?php if ( is_front_page()) { ?>
    <!-- Slider Section -->
<?php for($sld=7; $sld<10; $sld++) { ?>
<?php if( get_theme_mod('page-setting'.$sld)) { ?>
<?php $slidequery = new WP_query('page_id='.get_theme_mod('page-setting'.$sld,true)); ?>
<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
$img_arr[] = $image;
$id_arr[] = $post->ID;
endwhile;
}
}
?>
<?php if(!empty($id_arr)){ ?>
<section id="home_slider" <?php if( get_theme_mod( 'hide_slides' ) != '') { ?> class="none"<?php } ?>>
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">
	<?php
	$i=1;
	foreach($img_arr as $url){ ?>
    <img src="<?php echo esc_url($url); ?>" title="#slidecaption<?php echo $i; ?>" />
    <?php $i++; }  ?>
</div>
<?php
$i=1;
foreach($id_arr as $id){
$title = get_the_title( $id );
$post = get_post($id);
$content = apply_filters('the_content', substr(strip_tags($post->post_content), 0, 150));
?>
<div id="slidecaption<?php echo $i; ?>" class="nivo-html-caption">
<div class="slide_info">
<h2><?php echo $title; ?></h2>
<?php echo $content; ?>
<a class="sldbutton" href="<?php the_permalink(); ?>"><?php esc_attr_e('Read More', 'skt-simple');?></a>
</div>
</div>
<?php $i++; } ?>
 </div>
<div class="clear"></div>
</section>
<?php } else { ?>
<section id="home_slider" <?php if( get_theme_mod( 'hide_slides' ) != '') { ?> class="none"<?php } ?>>
<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
        <img class="lighten-img" src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/Cassandra-1.jpg" alt="" title="#slidecaption1" />
        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/Caliban.jpg" alt="" title="#slidecaption2" />
        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/SJB.jpg" alt="" title="#slidecaption3" />
    </div>
      <div id="slidecaption1" class="nivo-html-caption">
        <div class="slide_info">
                <h2><?php esc_attr_e('Trojan&nbsp;Women Cassandra','skt-simple'); ?></h2>
                <p><?php esc_attr_e('Phasellus nec metus scelerisque, feugiat est quis, vestibulum ante. Proin id vehicula enim.','skt-simple'); ?></p>
        </div>
        <!--<a href="<?php echo esc_url('#');?>" class="sldbutton"><?php esc_attr_e('Read More','skt-simple');?></a>-->
        </div>

        <div id="slidecaption2" class="nivo-html-caption">
            <div class="slide_info">
                    <h2><?php esc_attr_e('Playn&nbsp;Name Caliban','skt-simple'); ?></h2>
                        <p><?php esc_attr_e('Phasellus nec metus feugiat est quis, vestibulum ante. Proin id vehicula enim feugiat est quis, vestibulum ante habitant','skt-simple'); ?></p></div>
        </div>

        <div id="slidecaption3" class="nivo-html-caption">
            <div class="slide_info">
                    <h2><?php esc_attr_e('Playn&nbsp;Name Role','skt-simple'); ?></h2>
                        <p><?php esc_attr_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo enim nisl, eget fringilla arcu feugiat Pellentesque.','skt-simple'); ?></p></div>
        </div>
</div>
<div class="clear"></div>
</section>
<?php } ?>

<!-- Other Space-->
<?php } ?>
<!-- Slider Section -->
    <!-- slider -->
  </div>
  <!-- Container -->
</div>
<div class="clear"></div>
