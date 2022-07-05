<?php
/**
 * Our Team Section
 * Team members
 */
?>

<?php

$section_text = get_sub_field( 'section_text' );
$button_title = get_sub_field( 'button_title' );
$button_url = get_sub_field( 'button_url' );

?>

<section class="team-members">
    <div class="container">
        <div class="row">

        <div class="team-members__text col-lg-12">
            <?php
            if($section_text) : ?>
                <?php echo $section_text; ?>
            <?php endif; ?>

           <?php
           if($button_url) : ?>
                <a href="<?php echo $button_url; ?>" class="team-members__button"><?php echo $button_title ?></a>
            <?php else : ?>
                <a href="#" class="team-members__button"><?php echo $button_title ?></a>
            <?php endif; ?>
        </div>

        <?php $select_team_members = get_sub_field( 'select_team_members' ); ?>
        <?php if ( $select_team_members ): ?>
            <?php foreach ( $select_team_members as $post ):  ?>
                <?php setup_postdata ( $post ); ?>

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
                                        <a href="<?php echo $linkedin; ?>"><i class="icon icon-linkedin"></i></a>
                                    <?php endif; ?>

                                    <?php
                                    if($facebook) : ?>
                                        <a href="<?php echo $facebook; ?>"><i class="icon icon-facebook"></i></a>
                                    <?php endif; ?>

                                    <?php
                                    if($twitter) : ?>
                                        <a href="<?php echo $twitter; ?>"><i class="icon icon-twitter"></i></a>
                                    <?php endif; ?>

                                    <?php
                                    if($instagram) : ?>
                                        <a href="<?php echo $instagram; ?>"><i class="icon icon-instagram"></i></a>
                                    <?php endif; ?>

                                    <?php
                                    if($email) : ?>
                                        <a href="mailto:<?php echo $email; ?>"><i class="icon icon-email"></i></a>
                                    <?php endif; ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <h2 class="team-member__name"><?php the_title(); ?></h2>

                    <?php
                    if($position) : ?>
                        <h3 class="team-member__position"><?php echo $position; ?></h3>
                    <?php endif; ?>

                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        </div>
    </div>
</section>