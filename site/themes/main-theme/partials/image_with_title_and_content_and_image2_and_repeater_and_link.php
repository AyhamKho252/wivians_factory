<?php if (get_sub_field('visible')): ?>
    <section id="factoryGrid-banner" class="grid-banner">
        <div class="grid-banner-bg"
            style="background: var(--Wivians-Factory-Gray, <?php echo get_sub_field('background_color') ?>);">
            <div class="<?php echo get_sub_field('width'); ?>">
                <?php if (get_sub_field('image')): ?>
                    <?php
                    $src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                    $img = $src[0];
                    ?>
                    <div class="grid-banner__img"><img class="img-fluid w-100" src="<?php echo $img; ?>"></div>
                <?php endif; ?>
                <div class="grid-banner__body">
                    <?php if (get_sub_field('title')): ?>
                        <h3 class="grid-banner__body__heading">
                            <?php echo get_sub_field('title'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="2" viewBox="0 0 44 2" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M44 1.5H0V0.5H44V1.5Z" fill="white" />
                            </svg>
                        </h3>
                    <?php endif; ?>
                    <div class="col col-lg-6 col-12">
                        <div class="grid-banner__body__paragarph">
                            <?php if (get_sub_field('content')): ?>
                                <p>
                                    <?php echo get_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row gx-md-4 gy-md-4 gy-3 gx-3">
                        <div class="col col-12">
                            <?php if (get_sub_field('image2')): ?>
                                <?php
                                $src2 = wp_get_attachment_image_src(get_sub_field('image2'), 'full');
                                $img2 = $src2[0];
                                ?>
                                <div class="grid-banner__body__img"><img class="img-fluid w-100" src="<?php echo $img2; ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (have_rows('content_repeater')): ?>
                            <?php while (have_rows('content_repeater')):
                                the_row(); ?>
                                <?php if (get_sub_field('image3')): ?>
                                    <?php
                                    $src3 = wp_get_attachment_image_src(get_sub_field('image3'), 'full');
                                    $img3 = $src3[0];
                                    ?>
                                    <div class="col col-6">
                                        <div class="grid-banner__body__img"><img class="img-fluid w-100" src="<?php echo $img3; ?>">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-md-5 mt-4">
                    <?php if (get_sub_field('link')): ?>
                        <?php $link = get_sub_field('link'); ?>
                        <a class="grid-banner__link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                            <?php echo $link['title']; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="1" viewBox="0 0 22 1" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 1H0V0H22V1Z" fill="white" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>