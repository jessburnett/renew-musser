<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #main div and all content after
 *
 * @package SKT Simple
 */
?>
<div id="footer-wrapper">
  <div class="container">
    <div class="footer">

    </div>
    <!--end .footer-->
    <div class="copyright">
      <div class="copyright-txt"><?php esc_attr_e('&copy; 2018','skt-simple');?> <?php bloginfo('name'); ?>. <?php esc_attr_e('All Rights Reserved', 'skt-simple');?></div>
      <div class="design-by">
        <a href="mailto:rebecca.musser@gmail.com"><i class="fa fa-envelope"></i></a>
        <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
      </div>
      <div class="clear"></div>
    </div>
    <!-- copyright --> 
  </div>
  <!--end .container--> 
</div>
</div> 
<?php wp_footer(); ?>
</body></html>