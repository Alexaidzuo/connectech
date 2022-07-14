<?php
/**
 * Template part for displaying Our Team Members.
 *
 * @package connectech
 */

?>

<?php

$position = get_field( 'position' );
$member_image = get_field( 'member_image' );

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
