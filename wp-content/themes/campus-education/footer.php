<?php
/**
 * The template for displaying the footer.
 * @package Campus Education
 */
?>
    <div  id="footer" class="copyright-wrapper">
      <div class="container">
        <div class="footerinner">
          <div class="row">
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-1');?>
            </div>
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-2');?>
            </div>
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-3');?>
            </div>
            <div class="col-md-3 col-sm-3">
              <?php dynamic_sidebar('footer-4');?>
            </div>
          </div>
        </div>
      </div>
      <div class="inner">
          <div class="copyright text-center">
            <p><?php echo esc_html(get_theme_mod('campus_education_text',__('Education WordPress Theme By','campus-education'))); ?> <?php campus_education_credit_link(); ?></p>
          </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>