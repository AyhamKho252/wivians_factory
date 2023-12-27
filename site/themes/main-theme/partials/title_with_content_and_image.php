<?php if (get_sub_field('visible')): ?>
    <section id="split-img-text" class="split-img-text">
        <div class="<?php echo get_sub_field('width'); ?>">
            <div class="row gy-4 justify-content-between">

                <div
                    class="col col-lg-6 col-12 <?php if (!get_sub_field('image_left')): ?>order-md-last<?php endif; ?> order-first">
                    <h3 class="split-img-text__body__heading d-lg-none d-flex align-items-center gap-2">chi
                        siamo<svg xmlns="http://www.w3.org/2000/svg" width="22" height="1" viewBox="0 0 22 1" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22 1H0V0H22V1Z" fill="#3F3F3E" />
                        </svg></h3>

                    <?php if (get_sub_field('image')): ?>
                        <?php
                        $src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                        $img = $src[0];
                        ?>
                    <?php endif; ?>

                    <div class="split-img-text__img"><img class="img-fluid w-100" src="<?php echo $img; ?>"></div>
                </div>

                <div class="col col-xl-5 col-lg-6 col-12 align-self-end">
                    <div class="split-img-text__body">
                        <?php if (get_sub_field('title')): ?>
                            <h3 class="split-img-text__body__heading d-lg-block d-none">
                                <?php echo get_sub_field('title'); ?><svg xmlns="http://www.w3.org/2000/svg" width="44"
                                    height="2" viewBox="0 0 44 2" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M44 1.5H0V0.5H44V1.5Z" fill="#3F3F3E" />
                                </svg>
                            </h3>
                        <?php endif; ?>
                        <div class="split-img-text__body__paragraph">
                            <?php if (get_sub_field('content')): ?>
                                <p>
                                    <?php echo get_sub_field('content'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>