<?php if (get_sub_field('visible')): ?>
    <section id="hero" class="hero vh-100">
        <div class="simple-slider h-100">
            <div class="swiper-container h-100">
                <div class="swiper-wrapper h-100">
                    <?php if (have_rows('content_repeater')): ?>
                        <?php while (have_rows('content_repeater')):
                            the_row(); ?>
                            <?php if (get_sub_field('image')): ?>
                                <?php
                                $image_src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                                $img = $image_src[0];
                                ?>
                            <?php endif; ?>

                            <div class="swiper-slide h-100"
                                style="background: linear-gradient(#00000066, #00000066),url(&quot;<?php echo $img; ?>&quot;) center center / cover no-repeat;">
                                <div class="hero__body">
                                    <div class="col col-xl-4 col-lg-6 col-11">
                                        <?php if (get_sub_field('title')): ?>
                                            <h1 class="hero__body__heading">
                                                <?php echo get_sub_field('title'); ?>
                                            </h1>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
<?php endif; ?>