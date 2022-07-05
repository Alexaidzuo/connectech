<?php
/**
 * Sponsors & Partners
 */
?>

<?php

$sponsors = get_sub_field( 'sponsors' );

?>

<section class="sponsors">
    <div class="container">
        <div class="row sponsors__row">

            <?php
            if ( $sponsors ) :
            ?>

            <div class="sponsors__wrap col-lg-12">
                <?php foreach ( $sponsors as $post ):  ?>
                    <?php setup_postdata ( $post ); ?>

                    <?php

                    $sponsor_logo = get_field( 'sponsor_logo' );
                    $url = get_field( 'sponsor_url' );

                    ?>


                        <?php
                        if ( $sponsor_logo ) :
                        ?>

                        <div class="sponsor-logo__wrap">

                            <?php
                            if($url) : ?>

                            <a href="<?php echo $url; ?>" target="_blank">
                                <img class="sponsors-logo" src="<?php echo $sponsor_logo['url']; ?>" alt="<?php echo $sponsor_logo['alt']; ?>" />
                            </a>

                            <?php else : ?>

                                <img class="sponsors-logo" src="<?php echo $sponsor_logo['url']; ?>" alt="<?php echo $sponsor_logo['alt']; ?>" />

                            <?php endif; ?>

                        </div>

                        <?php endif; ?>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

                </div>
            <?php endif; ?>

        </div>

        <div class="row partners__row">
            <?php
            if ( have_rows( 'partnerts' ) ) :
            ?>

				<div class="partners__wrap col-lg-12">
                    <?php while ( have_rows( 'partnerts' ) ) : the_row(); ?>

                    <?php

                    $logo = get_sub_field( 'logo' );
                    $url = get_sub_field( 'url' );

                    ?>

                    <?php
                    if ( $logo ) :
                    ?>

                        <div class="partners-logo__wrap">
                            <?php
                            if($url) : ?>

                            <a href="<?php echo $url; ?>" target="_blank">
                                <img class="partners-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                            </a>

                            <?php else : ?>

                                <img class="partners-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />

                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php endwhile; ?>
                </div>

			<?php else : ?>
                <?php // no rows found ?>
			<?php endif; ?>
        </div>

    </div>
</section>