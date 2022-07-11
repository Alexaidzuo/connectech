<?php
/**
 * Template part for displaying News.
 *
 * @package connectech
 */

?>

<div class="content-news col-lg-4 col-md-6 col-sm-12">

        <div class="content-news__thumbnail">
            <a class="content-news__permalink" href="<?php the_permalink(); ?>">
                <?php if(the_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                    <h1>upload default thumbnail</h1>
                <?php endif; ?>
            </a>
        </div>


    <div class="content-news__title">
        <a class="content-news__permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>

</div>