<?php if (get_sub_field('visible')): ?>
    <section id="contact-us" class="contact-us">
        <div class="<?php echo get_sub_field('width'); ?>">
            <div class="row gy-3 gx-md-4 gx-0 justify-content-center">
                <div class="col col-md-10 col-12">
                    <?php if (get_sub_field('title')): ?>
                        <h2 class="contact-us__heading">
                            <?php echo get_sub_field('title'); ?>
                        </h2>
                    <?php endif; ?>
                </div>
                <div class="col col-lg-5 col-md-10 col-12 order-md-0 order-last">
                    <div class="contact-us__body">
                        <?php if (have_rows('card')): ?>
                            <?php while (have_rows('card')):
                                the_row(); ?>
                                <div class="contact-us__body__card">
                                    <?php if (get_sub_field('title_card')): ?>
                                        <h3 class="contact-us__body__card__heading">
                                            <?php echo get_sub_field('title_card'); ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="2" viewBox="0 0 44 2"
                                                fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M44 1.5H0V0.5H44V1.5Z"
                                                    fill="#3F3F3E" />
                                            </svg>
                                        </h3>
                                    <?php endif; ?>
                                    <ul>
                                        <?php if (have_rows('card_repeater')): ?>
                                            <?php while (have_rows('card_repeater')):
                                                the_row(); ?>
                                                <?php if (get_sub_field('content')): ?>
                                                <?php endif; ?>
                                                <?php if (get_sub_field('link')): ?>
                                                    <?php $link = get_sub_field('link'); ?>
                                                <?php endif; ?>
                                                <li>
                                                    <a href="">
                                                        <i class="fas <?php echo get_sub_field('icon') ?> me-1"></i>
                                                        <?php echo get_sub_field('content'); ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col col-lg-5 col-md-10 col-12">
                    <div class="contact-us__body">
                        <?php if (have_rows('custom_card')): ?>
                            <?php while (have_rows('custom_card')):
                                the_row(); ?>
                                <div class="contact-us__body__card">
                                    <?php if (get_sub_field('custom_title_card')): ?>
                                        <h3 class="contact-us__body__card__heading">
                                            <?php echo get_sub_field('custom_title_card'); ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="2" viewBox="0 0 44 2"
                                                fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M44 1.5H0V0.5H44V1.5Z"
                                                    fill="#3F3F3E" />
                                            </svg>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (have_rows('custom_card_repeater')): ?>
                                        <?php while (have_rows('custom_card_repeater')):
                                            the_row(); ?>
                                            <div class="contact-us__body__card__row">
                                                <div class="contact-us__body__card__heading__paragraph">
                                                    <?php if (get_sub_field('title_custom_card_repeater')): ?>
                                                        <p>
                                                            <?php echo get_sub_field('title_custom_card_repeater'); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>
                                                <ul>
                                                    <?php if (have_rows('repeater')): ?>
                                                        <?php while (have_rows('repeater')):
                                                            the_row(); ?>
                                                            <?php if (get_sub_field('contentt')): ?>
                                                            <?php endif; ?>
                                                            <?php if (get_sub_field('linkk')): ?>
                                                                <?php $link = get_sub_field('linkk'); ?>
                                                            <?php endif; ?>
                                                            <li>
                                                                <a href="">
                                                                    <i class="fas <?php echo get_sub_field('iconn') ?> me-1"></i>
                                                                    <?php echo get_sub_field('contentt'); ?>
                                                                </a>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>