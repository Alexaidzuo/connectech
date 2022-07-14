<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package connectech
 */

get_header(); ?>

<section class="our-team-archive">

    <div class="container">
        <div class="row">
            <div class="page-white-header col-md-10">
                <?php
                echo connectech_archive_title('<h1 class="page-white-header__title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
                ?>

                <h6 class="page-white-header__subtitle">This is our dedicated team that creates amazing projects for a digitally connected world.</h6>
            </div>
        </div>
    </div>

</section>

<div class="container">
    <div class="row">

        <?php if (have_posts()) : ?>

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php

                /*
                    * Include the Post-Format-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                    */
                get_template_part('template-parts/content', 'our-team');
                ?>

            <?php endwhile; ?>

            <?php connectech_post_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
