<?php
/**
 * The template for displaying all single posts.
 *
 * @package connectech
 */

get_header(); ?>

<section class="our-team">

    <div class="our-team__content">
        <div class="container">
            <div class="row">

                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'single-our-team' );

                endwhile; // End of the loop.
                ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
