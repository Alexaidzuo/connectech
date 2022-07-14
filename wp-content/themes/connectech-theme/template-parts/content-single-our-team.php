<?php
/**
 * Template part for displaying single news.
 *
 * @package connectech
 */

?>

<?php

$image = get_field('member_image');
$position = get_field('position');
$social_network = get_field('social_network');
$about = get_field('about');

// Other Members
$position = get_field( 'position', get_the_ID() );


?>

<div class="page-white-header col-md-10">
    <h1 class="page-white-header__title"><?php the_title(); ?></h1>
    <h6 class="page-white-header__subtitle"><?php echo $position; ?></h6>
</div>

<div class="our-team__sl col-lg-5">
    <div class="our-team__sl-inner">

        <?php if($image['url']) : ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
        <?php endif; ?>

        <?php if ( have_rows( 'social_network' ) ): ?>
            <div class="our-team__sl-social">

                <?php while ( have_rows( 'social_network' ) ) : the_row(); ?>

                    <?php
                        // Social
                        $linkedin = get_sub_field('linkedin_url');
                        $facebook = get_sub_field('facebook_url');
                        $instagram = get_sub_field('instagram_url');
                        $twitter = get_sub_field('twitter_url');
                        $email = get_sub_field('email');
                    ?>

                    <?php if ( get_row_layout() == 'linkedin' ) : ?>
                        <a href="<?php echo $linkedin; ?>"><i class="icon icon-linkedin"></i></a>

                    <?php elseif ( get_row_layout() == 'facebook' ) : ?>
                        <a href="<?php echo $facebook; ?>"><i class="icon icon-facebook"></i></a>

                    <?php elseif ( get_row_layout() == 'twitter' ) : ?>
                        <a href="<?php echo $twitter; ?>"><i class="icon icon-twitter"></i></a>

                    <?php elseif ( get_row_layout() == 'instagram' ) : ?>
                        <a href="<?php echo $instagram; ?>"><i class="icon icon-instagram"></i></a>

                    <?php elseif ( get_row_layout() == 'email' ) : ?>
                        <a href="mailto:<?php echo $email; ?>"><i class="icon icon-email"></i></a>
                    <?php endif; ?>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>

    </div>
</div>

<div class="our-team__sr col-lg-7">
    <div class="our-team__sr-inner">
        <?php echo $about; ?>
    </div>
</div>

<div class="our-team__other col-lg-12">
    <div class="container">
        <div class="row">

        <div class="our-team__other-header page-white-header col-md-10">
            <p class="page-white-header__subtitle">Meet the other team members</p>
        </div>

        <?php
        $args = array(
            'post_type' => 'our-team',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'post__not_in' => array( $post->ID )
        );

        $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php
                $member_image = get_field( 'member_image' );
                $position = get_field('position');
                ?>

                <div class="our-team__other-member col-lg-3 col-md-4 col-sm-6">
                    <div class="our-team__other-image">
                    <?php if ( $member_image ) { ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $member_image['url']; ?>" alt="<?php echo $member_image['alt']; ?>" />
                        </a>
                        <?php } ?>

                    </div>

                    <h2 class="our-team__other-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php
                    if($position) : ?>
                        <h3 class="our-team__other-position"><?php echo $position; ?></h3>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_query(); ?>

        </div>
    </div>
</div>
