<?php
$about_us_title = get_field('about_us_title');
$about_us_content = get_field('about_us_content');
$about_us_hidden_content = get_field('about_us_hidden_content');
$about_us_button = get_field('about_us_button');
?>
<section class="section__none_padding">
    <div class=" about " id="menu1_child">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($about_us_title): ?>
                    <div class="about__us "><p><?php echo $about_us_title; ?></p><div class="pink__line"></div></div>
                <?php endif; ?>

                <?php if ($about_us_content): ?>
                    <div class="text-center text__about_us">
                        <?php echo $about_us_content; ?>

                        <?php if ($about_us_hidden_content): ?>
                            <div class="collapse" id="collapseExample">
                                <?php echo $about_us_hidden_content; ?>
                            </div>
                        <?php endif; ?>

                        <div id="btn-main1">
                            <button class="btn btn-outline-primary button__more" type="button"
                                    data-toggle="collapse" data-target="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <?php echo $about_us_button; ?>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>