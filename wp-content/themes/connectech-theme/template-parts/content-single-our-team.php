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

<section class="team-members col-lg-12">
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

                <div class="team-member__member col-lg-3 col-md-4 col-sm-6">
                    <div class="team-member__image">
                    <?php if ( $member_image ) { ?>
                        <img src="<?php echo $member_image['url']; ?>" alt="<?php echo $member_image['alt']; ?>" />
                    <?php } ?>

                        <div class="team-member__social--wrap">
                            <div class="team-member__social">
                            <?php if ( have_rows( 'social_network' ) ): ?>

                                <?php while ( have_rows( 'social_network' ) ) : the_row(); ?>

                                    <?php

                                    $linkedin = get_sub_field( 'linkedin_url' );
                                    $facebook = get_sub_field( 'facebook_url' );
                                    $twitter = get_sub_field( 'twitter_url' );
                                    $instagram = get_sub_field( 'instagram_url' );
                                    $email = get_sub_field( 'email' );

                                    ?>

                                    <?php
                                    if($linkedin) : ?>
                                        <a href="<?php echo $linkedin; ?>">Linkedin</a>
                                    <?php endif; ?>

                                    <?php
                                    if($facebook) : ?>
                                        <a href="<?php echo $facebook; ?>">Facebook</i></a>
                                    <?php endif; ?>

                                    <?php
                                    if($twitter) : ?>
                                        <a href="<?php echo $twitter; ?>">Twitter</i></a>
                                    <?php endif; ?>

                                    <?php
                                    if($instagram) : ?>
                                        <a href="<?php echo $instagram; ?>">Instagram</a>
                                    <?php endif; ?>

                                    <?php
                                    if($email) : ?>
                                        <a href="mailto:<?php echo $email; ?>">Email</a>
                                    <?php endif; ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <h2 class="team-member__name">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <?php
                    if($position) : ?>
                        <h3 class="team-member__position"><?php echo $position; ?></h3>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_query(); ?>

        </div>
    </div>
</section>
