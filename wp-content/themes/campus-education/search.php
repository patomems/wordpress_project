<?php
/**
 * The template for displaying Search Results pages.
 * @package Campus Education
 */

get_header(); ?>

<?php
    $left_right = get_theme_mod( 'campus_education_layout','Left Sidebar');
    if($left_right == 'Right Sidebar'){ ?>
        <div id="blog_post">    
            <div class="innerlightbox">
                <div class="container"> 
                    <div class="row">       
                        <div class="col-md-9 col-sm-9">
                            <h1 class="search-title"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','campus-education'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'campus-education' ),
                                        'next_text'          => __( 'Next page', 'campus-education' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'campus-education' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>      
                        <div class="col-md-3 col-sm-3"><?php get_sidebar();?></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Left Sidebar'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3"><?php get_sidebar();?></div>
                        <div class="col-md-9 col-sm-9">
                            <h1 class="search-title"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','campus-education'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'campus-education' ),
                                        'next_text'          => __( 'Next page', 'campus-education' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'campus-education' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                    </div>                   
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'One Column'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                        <h1 class="search-title"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','campus-education'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'campus-education' ),
                                    'next_text'          => __( 'Next page', 'campus-education' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'campus-education' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>                   
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Three Columns'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                        <div class="col-md-6 col-sm-6">
                            <h1 class="search-title"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','campus-education'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'campus-education' ),
                                        'next_text'          => __( 'Next page', 'campus-education' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'campus-education' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    </div>               
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Four Columns'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                        <div class="col-md-3 col-sm-3">
                            <h1 class="search-title"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','campus-education'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content' );
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'campus-education' ),
                                        'next_text'          => __( 'Next page', 'campus-education' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'campus-education' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>
                        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-3');?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else if($left_right == 'Grid Layout'){ ?>
        <div id="blog_post">
            <div class="innerlightbox">
                <div class="container"> 
                    <div class="row">       
                        <div class="col-md-8 col-sm-8">
                            <h1 class="search-title"><?php /* translators: %s: search term */ printf(esc_html('Search Results for: %s','campus-education'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                            <div class="row">               
                                <?php if ( have_posts() ) :
                                    /* Start the Loop */
                                    while ( have_posts() ) : the_post();
                                        get_template_part( 'template-parts/grid-layout' );
                                    endwhile;
                                      else :
                                        get_template_part( 'no-results' );
                                    endif; 
                                ?>
                            </div>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'campus-education' ),
                                        'next_text'          => __( 'Next page', 'campus-education' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'campus-education' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>      
                        <div class="col-md-4 col-sm-4"><?php get_sidebar();?></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

<?php get_footer(); ?>