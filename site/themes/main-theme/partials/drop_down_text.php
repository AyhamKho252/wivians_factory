<?php if (get_sub_field('visible')): ?>
    <section id="split-accordion" class="split-accordion"
        style="background: var(--Light-Gray-2, <?php echo get_sub_field('background_color') ?>);">
        <div class="<?php echo get_sub_field('width'); ?>">
            <div class="row gy-4 justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="split-accordion__accordion">
                        <div class="accordion d-block nav nav-tabs w-100" role="tablist" id="accordionExample">
                            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-one" type="button"
                                role="tab" aria-controls="accordion-one" aria-selected="true">
                                <?php if (get_sub_field('title')): ?>
                                    <h2 class="accordion-header" role="tab" id="headingOne"><button class="accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            <?php echo get_sub_field('title'); ?>
                                        </button></h2>
                                <?php endif; ?>
                                <div class="accordion-collapse collapse show item-1 show item-1 show item-1 show item-1 show item-1 show"
                                    role="tabpanel" data-bs-parent="#accordionExample" aria-labelledby="headingOne"
                                    id="collapseOne">
                                    <?php if (get_sub_field('content')): ?>
                                        <div class="accordion-body">
                                            <div class="split-accordion__accordion__paragraph">
                                                <p>
                                                    <?php echo get_sub_field('content'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-two" type="button"
                                role="tab" aria-controls="accordion-two" aria-selected="false">
                                <?php if (get_sub_field('title2')): ?>
                                    <h2 class="accordion-header" role="tab" id="headingTwo-1"><button
                                            class="accordion-button collapsed collapsed collapsed collapsed collapsed collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <?php echo get_sub_field('title2'); ?>
                                        </button></h2>
                                <?php endif; ?>
                                <div class="accordion-collapse collapse item-2 item-2 item-2 item-2 item-2" role="tabpanel"
                                    data-bs-parent="#accordionExample" aria-labelledby="headingTwo" id="collapseTwo">
                                    <?php if (get_sub_field('content2')): ?>
                                        <div class="accordion-body">
                                            <div class="split-accordion__accordion__paragraph">
                                                <p>
                                                    <?php echo get_sub_field('content2'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-three" type="button"
                                role="tab" aria-controls="accordion-three" aria-selected="false">
                                <?php if (get_sub_field('title3')): ?>
                                    <h2 class="accordion-header" role="tab" id="headingTwo-2"><button
                                            class="accordion-button collapsed collapsed collapsed collapsed collapsed collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <?php echo get_sub_field('title3'); ?>
                                        </button></h2>
                                <?php endif; ?>
                                <div class="accordion-collapse collapse item-3 item-3 item-3 item-3 item-3" role="tabpanel"
                                    data-bs-parent="#accordionExample" aria-labelledby="headingThree" id="collapseThree">
                                    <?php if (get_sub_field('content3')): ?>
                                        <div class="accordion-body">
                                            <div class="split-accordion__accordion__paragraph">
                                                <p>
                                                    <?php echo get_sub_field('content3'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-first order-lg-last">
                    <div id="nav-tabContent" class="tab-content h-100">
                        <?php if (get_sub_field('image')): ?>
                            <?php
                            $src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
                            $img = $src[0];
                            ?>
                            <div id="accordion-one" class="tab-pane fade show active" role="tabpanel"
                                aria-labelledby="accordion-one-tab"><img class="img-fluid split-accordion__img"
                                    src="<?php echo $img; ?>"></div>
                        <?php endif; ?>
                        <?php if (get_sub_field('image2')): ?>
                            <?php
                            $src2 = wp_get_attachment_image_src(get_sub_field('image2'), 'full');
                            $img2 = $src2[0];
                            ?>
                            <div id="accordion-two" class="tab-pane fade" role="tabpanel" aria-labelledby="accordion-two-tab">
                                <img class="img-fluid split-accordion__img" src="<?php echo $img2; ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('image3')): ?>
                            <?php
                            $src3 = wp_get_attachment_image_src(get_sub_field('image3'), 'full');
                            $img3 = $src3[0];
                            ?>
                            <div id="accordion-three" class="tab-pane fade" role="tabpanel"
                                aria-labelledby="accordion-three-tab"><img class="img-fluid split-accordion__img"
                                    src="<?php echo $img3; ?>"></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>