<?php
/**
 * Image & Text
 * Change layout ImageText : TextImage
 */
?>

<?php

$section_subtitle = get_sub_field('section_subtitle');
$section_title = get_sub_field('section_title');
$change_position = get_sub_field('change_position');
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');

?>

<section class="imageText">
    <div class="container">

        <div class="row">

            <?php if($section_subtitle || $section_title) : ?>

                <div class="section-header">

                    <?php if($section_subtitle) : ?>
                        <h4 class="section-subtitle"><?php echo $section_subtitle ?></h4>
                    <?php endif; ?>

                    <?php if($section_title) : ?>
                        <h2 class="section-title"><?php echo $section_title ?></h2>
                    <?php endif; ?>

                </div>

            <?php endif; ?>

        </div>

        <div class="imageText__wrap">

            <?php if($image) : ?>
                <div class="imageText__image">
                    <img src="<?php echo $image['url'] ?>">
                </div>
            <?php endif; ?>

            <?php if($title || $content) : ?>

                <div class="imageText__content">

                    <?php if($title) : ?>

                        <div class="imageText__content-title">
                            <h3><?php echo $title; ?></h3>
                        </div>

                    <?php endif; ?>

                    <?php if($content) : ?>

                        <div class="imageText__content-text">
                            <?php echo $content; ?>
                        </div>

                    <?php endif; ?>

                </div>

            <?php endif; ?>

        </div>

    </div>
</section>