<?php if (get_sub_field('visible')): ?>
    <section id="grid-banner" class="grid-banner grid-banner-transparent ">
        <div class="grid-banner-bg">
            <div class="<?php echo get_sub_field('width'); ?>">
                <div class="grid-banner__body">
                    <div class="row gx-md-4 gy-md-4 gy-3 gx-3">
                        <?php if (get_sub_field('image')): ?>
                            <?php
                            $src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                            $img = $src[0];
                            ?>
                            <div class="col col-12">
                                <div class="grid-banner__body__img"><img class="img-fluid w-100" src="<?php echo $img; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (have_rows('content_repeater')): ?>
                            <?php while (have_rows('content_repeater')):
                                the_row(); ?>
                                <?php if (get_sub_field('image2')): ?>
                                    <?php
                                    $src2 = wp_get_attachment_image_src(get_sub_field('image2'), 'full');
                                    $img2 = $src2[0];
                                    ?>
                                    <div class="col col-6">
                                        <div class="grid-banner__body__img"><img class="img-fluid w-100" src="<?php echo $img2; ?>">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (get_sub_field('image3')): ?>
                            <?php
                            $src3 = wp_get_attachment_image_src(get_sub_field('image3'), 'full');
                            $img3 = $src3[0];
                            ?>
                            <div class="col col-12">
                                <div class="grid-banner__body__img"><img class="img-fluid w-100" src="<?php echo $img3; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>