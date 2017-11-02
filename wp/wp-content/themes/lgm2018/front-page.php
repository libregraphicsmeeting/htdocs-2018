<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<!-- Header -->
<?php get_header(); ?>
<?php $img_folder = get_stylesheet_directory_uri() . '/img/'; ?>
<!-- Main -->
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="region-landing">
            <img class="intro-bg" src="<?php echo $img_folder ?>logo-big--web.svg" 
                 alt="Logo of LGM. Drawing of three squares joined together made with blue lines." />
            <div class="intro-title">
                <img src="<?php echo $img_folder ?>save-the-date--web.svg" 
                     alt="Save the date image. See text below."/>
                <h1 class="hidden">
                    Libre Graphics Meeting 2018. Seville, 26-30 April
                </h1>
            </div>
            <div class="intro-text">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile ?>
            </div>
            <div class="intro-menu">
                <?php wp_nav_menu( array(
                    name => 'main', 
                )); ?>
            </div>
            <h4 class="see-news" id="lastnews">
                Recent news
            </h4>
         </div>  
         <div class="recent-news">
                <?php wp_reset_query(); ?>
                <?php $args = array(
                  'posts_per_page'   => 5,
                  'orderby'          => 'date',
                  'order'            => 'DESC',
                  'post_type'        => 'post',
                  'post_status'      => 'publish',
                );
                $posts = get_posts( $args );
                foreach($posts as $post) : setup_postdata( $post ); ?>
                    <div class="recent-news__item">
                        <a href="<?php the_permalink(); ?>">
                        <figure class="recent-news__item-picture">
                            <?php echo the_post_thumbnail(); ?>
                        </figure>
                        <div class="recent-news__item-meta">
                            <p class="recent-news__item-date">
                                <?php echo get_the_date(); ?>
                            </p>
                            <h2 class="recent-news__item-title">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                        </a>
                    </div>              
                <?php endforeach; ?>
            </div>
      
        </div>
        <?php get_template_part( 'regions/recent-news.php' ); ?>
    </main>
</div>

<!-- Footer -->
<?php get_footer(); ?>


