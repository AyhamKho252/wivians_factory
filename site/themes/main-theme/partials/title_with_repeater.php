<?php if (get_sub_field('visible')): ?>
    <section id="slider-section" class="slider-section" style="background: var(--Black, #141414);">
        <div class="<?php echo get_sub_field('width'); ?>">
            <?php if (get_sub_field('title')): ?>
                <h3 class="slider-section__heading">
                    <?php echo get_sub_field('title'); ?>
                    <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="44" height="2" viewBox="0 0 44 2" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44 1.5H0V0.5H44V1.5Z" fill="white" />
                    </svg>
                </h3>
            <?php endif; ?>

            <div id="slider-section-carousel" class="owl-carousel owl-theme">
                <?php if (have_rows('content_repeater')): ?>
                    <?php while (have_rows('content_repeater')):
                        the_row(); ?>
                        <?php if (get_sub_field('image')): ?>
                            <?php
                            // Get image source
                            $image_src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                            $img = $image_src[0];
                            ?>
                        <?php endif; ?>

                        <?php if (get_sub_field('link')): ?>
                            <?php $link = get_sub_field('link'); ?>
                        <?php endif; ?>

                        <a class="item" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                            <div class="slider-section__bg"
                                style="background: linear-gradient(#00000066, #00000066),url(&quot;<?php echo $img; ?>&quot;);">
                                <div class="slider-section__body d-flex flex-column justify-content-end gap-4">
                                    <?php if (get_sub_field('title')): ?>
                                        <h2 class="slider-section__body__heading">
                                            <?php echo get_sub_field('title'); ?>
                                        </h2>
                                    <?php endif; ?>
                                    <div class="slider-section__body__paragarph align-self-end">
                                        <p>
                                            <?php echo $link['title']; ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="1" viewBox="0 0 22 1"
                                                fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 1H0V0H22V1Z" fill="white" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>