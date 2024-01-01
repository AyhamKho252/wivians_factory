<?php if (get_sub_field('visible')): ?>
    <section id="split-section" class="split-section">
        <div class="split-section-bg" style="background: <?php echo get_sub_field('background_color') ?>;">
            <div class="<?php echo get_sub_field('width'); ?>">
                <div class="row gy-4 justify-content-between">
                    <div
                        class="col col-lg-6 col-12 <?php if (!get_sub_field('image_left')): ?>order-md-last<?php endif; ?>">
                        <?php if (get_sub_field('title')): ?>
                            <h3 class="split-section__body__heading d-lg-none d-block">
                                <?php echo get_sub_field('title'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="2" viewBox="0 0 44 2" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M44 1.5H0V0.5H44V1.5Z" fill="white" />
                                </svg>
                            </h3>
                        <?php endif; ?>

                        <?php if (get_sub_field('image')): ?>
                            <?php
                            $src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                            $img = $src[0];
                            ?>
                            <div class="split-section__img"><img class="img-fluid w-100" src="<?php echo $img; ?>"></div>
                        <?php endif; ?>
                    </div>
                    <div class="col col-xl-5 col-lg-6 col-12">
                        <div class="split-section__body">
                            <?php if (get_sub_field('title')): ?>
                                <h3 class="split-section__body__heading d-lg-block d-none">
                                    <?php echo strip_tags(get_sub_field('title')); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="2" viewBox="0 0 44 2"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44 1.5H0V0.5H44V1.5Z" fill="white" />
                                    </svg>
                                </h3>
                            <?php endif; ?>

                            <div class="split-section__body__paragarph">
                                <?php if (get_sub_field('content')): ?>
                                    <p>
                                        <?php echo get_sub_field('content'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex justify-content-end">
                                <?php if (get_sub_field('link')): ?>
                                    <?php $link = get_sub_field('link'); ?>
                                    <a class="split-section__body__link" href="<?php echo $link['url']; ?>"
                                        target="<?php echo $link['target']; ?>">
                                        <?php echo $link['title']; ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="1" viewBox="0 0 22 1"
                                            fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22 1H0V0H22V1Z" fill="#AAAAAA" />
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>