<?php if (get_sub_field('visible')): ?>
    <section id="form-banner" class="form-banner"
        style="background: var(--Light-Gray-2, <?php echo get_sub_field('background_color') ?>);">
        <div class="<?php echo get_sub_field('width'); ?>">
            <!-- <div class="row justify-content-center">
                <div class="col col-lg-6 col-md-10 col-12">
                    <h1 class="form-banner__heading">Il movimento si genera a partire dal primo contatto</h1>
                    <div class="form-banner__paragraph">
                        <p>Compila il form per richiedere maggiori informazioni.</p>
                    </div>
                    <form>
                        <div class="row gy-3 gx-md-3 gx-0">
                            <div class="col col-md-6 col-12"><input class="form-control" type="text" placeholder="Nome">
                            </div>
                            <div class="col col-md-6 col-12"><input class="form-control" type="text" placeholder="Cognome">
                            </div>
                            <div class="col col-md-6 col-12"><input class="form-control" type="email"
                                    placeholder="Indirizzo email"></div>
                            <div class="col col-md-6 col-12"><input class="form-control" type="text"
                                    placeholder="Città (opzionale)"></div>
                            <div class="col col-12"><textarea class="form-control" placeholder="Richiesta"></textarea></div>
                        </div>
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1"><label
                                class="form-label form-check-label" for="formCheck-1">Ho
                                letto e accetto l’informativa sulla <a href="">Privacy.</a></label></div>
                        <div class="d-flex justify-content-center"><button class="btn" type="submit">invia<svg
                                    xmlns="http://www.w3.org/2000/svg" width="23" height="1" viewBox="0 0 23 1" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 1H0.5V0H22.5V1Z"
                                        fill="#AAAAAA" />
                                </svg></button></div>
                    </form>
                </div>
            </div> -->
            <?php echo do_shortcode('[contact-form-7 id="0fc4b8a" title="Contact Form"]'); ?>
        </div>
    </section>
<?php endif; ?>