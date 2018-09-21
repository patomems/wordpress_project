<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<?php do_action('campus_education_above_slider_section'); ?>

<?php if( get_theme_mod('campus_education_slider_hide') != ''){ ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"> 
    <?php $pages = array();
      for ( $count = 1; $count <= 3; $count++ ) {
        $mod = intval( get_theme_mod( 'campus_education_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $pages[] = $mod;
        }
      }
      if( !empty($pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php the_post_thumbnail_url('full'); ?>"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2 class="animated fadeInDown"><?php the_title(); ?></h2>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( campus_education_string_limit_words( $excerpt,15 ) ); ?></p>
              <div class="more-btn">              
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('GET STARTED NOW','campus-education'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; 
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>  
  <div class="clearfix"></div>
</section>

<?php }?>

<?php do_action('campus_education_below_slider_section'); ?>

<section id="welcome-campus">
  <div class="container">
    <?php if( get_theme_mod('campus_education_campus_title') != ''){ ?>
      <h3 class="animated fadeInDown"><?php echo esc_html(get_theme_mod('campus_education_campus_title',__('Welcome To Our Campus','campus-education'))); ?></h3>
      <div class="border-image">
        <hr class="hr-border">
        <i class="fas fa-university"></i>
      </div>
    <?php }?>
      <div class="campus">
        <div class="description">
          <?php if( get_theme_mod('campus_education_campus_text') != ''){ ?>
            <p><?php echo esc_html(get_theme_mod('campus_education_campus_text',__('Add Text','campus-education'))); ?></p>
          <?php }?> 
        </div>
        <div class="row">
          <?php 
            $page_query = new WP_Query(array( 'category_name' => esc_html(get_theme_mod('campus_education_campus_category'),'campus-education')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-md-4 col-sm-4">
                <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( campus_education_string_limit_words( $excerpt,12 ) ); ?></p>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
  </div>
</section>

<?php do_action('campus_education_after_campus_section'); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>