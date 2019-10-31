<?php
$contact_title = get_field('contact_title');
$contact_image = get_field('contact_image');
$contact_google_map = get_field('contact_google_map');
?>
<section class="section__none_padding">
    <div id="menu4_child">
        <?php if ($contact_title): ?>
            <div class="row line__contacts">
                <div class="col-sm-12">
                    <div id="inst" class="contacts"><p><?php echo $contact_title; ?></p>
                        <div class="pink__line"></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row" style="margin:0;">
            <div class="col-md-4 col-sm-12 f-1">
                <?php if ($contact_image): ?>
                    <img class="photo__fasad" src="<?php echo $contact_image; ?>" alt="">
                <?php endif; ?>
            </div>

            <?php if ( have_rows('contact_info') ): ?>
                <?php while( have_rows('contact_info') ): the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $address = get_sub_field('address');
                    $social = get_sub_field('social');
                    ?>
                    <div class="col-md-4 col-sm-12 adress">
                        <?php if ($title): ?>
                            <p class="our__adress"><strong><?php echo $title; ?></strong></p><br>
                        <?php endif; ?>

                        <div class="adress__content">
                            <?php if ($address): ?>
                                <?php echo $address; ?>
                            <?php endif; ?>

                            <?php if ($social): ?>
                                <?php echo $social; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="col-md-4 col-sm-12 f-3">
                <?php if ($contact_google_map): ?>
                    <div id="map">
                        <div class="contacts_map">
                            <?php echo $contact_google_map; ?>
                        </div>
                        <br>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>