<?php
/**
 * The template for displaying all single posts.
 *
 * @package connectech
 */

get_header(); ?>

<section class="section-single-news">

    <div class="section-single-news__header">

        <div class="section-single-news__background" <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url() ?>)" <?php endif;?>></div>

        <div class="section-single-news__inner">
            <div class="section-single-news__header-title">
                <h1><?php the_title(); ?></h1>
                <p class="section-single-news__date"><?php echo get_the_date(); ?></p>

            </div>
        </div>

    </div>

    <div class="section-single-news__content">
        <div class="container">
            <div class="row">
                <div class="section-single-news__article col-md-8 col-sm-12">

                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'single-news' );

                        the_post_navigation();

                        get_template_part( 'template-parts/post', 'author' );

                    endwhile; // End of the loop.
                    ?>

                </div>

                <div class="section-single-news__sidebar col-md-4 col-sm-12">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
