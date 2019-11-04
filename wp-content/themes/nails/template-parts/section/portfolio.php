<?php
$portfolio_title = get_field('portfolio_title');
$portfolio_gallery = get_field('portfolio_gallery');
$portfolio_button = get_field('portfolio_button');
$portfolio_button_url = get_field('portfolio_button_url');
?>
<section>
    <?php if ($portfolio_title): ?>
        <div id="menu3_child" class="row line__photo">
            <div class="col-sm-12">
                <div class="photo__nails"><p><?php echo $portfolio_title; ?></p>
                    <div class="pink__line"></div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($portfolio_gallery): ?>
        <div class="outer__container">
            <div class="owl-carousel owl-theme">
                <?php foreach( $portfolio_gallery as $image ): ?>
                    <div class="overflow">
                        <div>
                            <a class="fancybox" rel="group" href="<?php echo $image['url']; ?>">
                                <img src="<?php echo $image['url']; ?>" class="photo__gallery" alt="">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <div id="cont-button">
        <div class="row">
            <div class="col-sm-12" id="btn-main3">
                <a class="click-me" href="<?php echo $portfolio_button_url; ?>">
                    <button class='btn btn-outline-primary button__more-nails'><?php echo $portfolio_button; ?></button>
                </a>
            </div>
        </div>
    </div>
</section>