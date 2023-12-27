<?php if (get_sub_field('visible')): ?>
    <section id="text-banner" class="text-banner">
        <div class="<?php echo get_sub_field('width'); ?>">
            <div class="col-lg-8 col-md-6 col-12">
                <?php if (get_sub_field('title')): ?>
                    <h1 class="text-banner__heading">
                        <?php echo get_sub_field('title'); ?>
                    </h1>
                <?php endif; ?>

                <div class="text-banner__paragarph">
                    <?php if (get_sub_field('content')): ?>
                        <p>
                            <?php echo get_sub_field('content'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>