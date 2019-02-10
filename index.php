<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Simple
 */

get_header();
?>
<div class="container">
     <div class="page_content postbgarea">
     	<?php if ( is_front_page() ) { // Home Post ?>
        <section id="sitefull">
                About me section goes here

        </section>
      <?php } elseif ( is_home() ) { //Blog Page ?>
      <section class="site-main">

             </section>
        <?php get_sidebar();?>
        <?php } ?>
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>