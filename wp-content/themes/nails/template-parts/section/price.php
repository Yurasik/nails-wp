<?php
$price_title = get_field('price_title');
$price_button = get_field('price_button');
?>
<section>
    <div id="menu2_child">
        <?php if ($price_title): ?>
            <div class="row line__price">
                <div class="col-sm-12">
                    <div class="about__us "><p><?php echo $price_title; ?></p>
                        <div class="pink__line"></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( have_rows('price_items') ): ?>
            <div class="row" id="rw_photos" style="margin:0;">
                <?php while( have_rows('price_items') ): the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $image = get_sub_field('image');
                    $icon = get_sub_field('icon');
                    $price = get_sub_field('price');
                    $currency = get_sub_field('currency');
                    ?>
                    <div class="col-md-4 col-sm-12 img-col1">
                        <div class="father">
                            <div class="opasity__block"></div>
                            <div class=""><img class="first__photo" src="<?php echo $image; ?>" alt="Service Image"></div>
                            <div class="icon"><img class="icon__photo__one" src="<?php echo $icon; ?>" alt="Service Icon">
                            </div>
                            <div class="text__on-block">
                                <div class="circle__flag"></div>
                                <?php if ($price): ?>
                                    <div class="circle__flag-price-how_much"><?php echo $price; ?></div>
                                <?php endif; ?>
                                <?php if ($currency): ?>
                                    <div class="circle__flag-price-uan"><?php echo $currency; ?></div>
                                <?php endif; ?>
                                <?php if ($title): ?>
                                    <div><p class="main__text__one"><?php echo $title; ?></p></div>
                                <?php endif; ?>

                                <?php if ($description): ?>
                                    <div><p class="dependent__text__one"><?php echo $description; ?></p></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col subheder-col" id="btn-main2">
                <button type="button" class="btn btn-primary button__more-price" id="next__nails"
                        data-toggle="modal" data-target=".bd-example-modal-lg"><?php echo $price_button; ?>
                </button>
            </div>
        </div>
    </div>
</section>