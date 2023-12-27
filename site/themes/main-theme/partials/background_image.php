<section id="img-banner" class="img-banner">
    <?php if (get_sub_field('image')): ?>
        <?php
        $src = wp_get_attachment_image_src(get_sub_field('image'), 'full');
        $img = $src[0];
        ?>
    <?php endif; ?>
    <div class="img-banner__body" style="background: url('<?php echo $img; ?>')"></div>
</section>