<?php
/**
 * Testimonials
 */
?>

<?php

$section_text = get_sub_field( 'section_text' );

?>

<section class="testimonials">
    <div class="container">
        <div class="row testimonials__row">

            <div class="testimonials__side--wrap col-lg-3">

            <div class="testimonials__side">
                <p class="testimonials__side-text"><?php echo $section_text; ?></p>
            </div>

                <div class="slick-arrows">
                    <?php $select_testimonial = get_sub_field( 'select_testimonial' ); ?>
                    <?php if ( $select_testimonial ) : ?>

                        <?php foreach ( $select_testimonial as $post ):  ?>
                            <?php setup_postdata ( $post ); ?>

                            <span></span>

                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>
                </div>
            </div>

            <div class="testimonials__content-wrap col-lg-9">

            <?php $select_testimonial = get_sub_field( 'select_testimonial' ); ?>
            <?php if ( $select_testimonial ) : ?>

                <?php foreach ( $select_testimonial as $post ):  ?>
                    <?php setup_postdata ( $post ); ?>

                    <div class="testimonial__wrap">

                        <div class="testimonial__student">
                            <?php

                            $student_image = get_field( 'student_image' );
                            $student_testimonial = get_field( 'content', false, false );

                            ?>

                            <div class="testimonials__content">

                                <?php
                                if($student_testimonial) : ?>

                                <div class="testimonials__student-testimonial">
                                    <p class="testimonials__student-testimonial--text"><?php echo $student_testimonial; ?></p>
                                </div>

                                <?php endif; ?>


                                <div class="testimonials__student-name">
                                    <p class="testimonials__student-name--text"><?php the_title(); ?></p>
                                </div>

                            </div>

                            <?php
                            if($student_image) : ?>

                            <div class="testimonials__student-image">
                                <img src="<?php echo $student_image['url']; ?>" alt="<?php echo $student_image['alt']; ?>" />
                            </div>

                            <?php endif; ?>
                        </div>

                    </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

            </div>

        </div>
    </div>
</section>
