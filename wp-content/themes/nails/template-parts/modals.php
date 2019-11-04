<!-----FORM - ORDER------->
<div class="modal fade " id="fistModal" tabindex="-1" role="dialog" aria-labelledby="fistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="20" title="Заказать услугу" html_id="order_form"]'); ?>
        </div>
    </div>
</div>
<!-----/FORM - ORDER------->

<!-------FORM - CALL YOU------->
<div class="modal fade " id="secondModal" tabindex="-1" role="dialog" aria-labelledby="secondModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content modal_thank">
            <p class="wordsofthanks">Спасибо за запись! Мы сегодня свяжемся с Вами!</p>
        </div>
        <div class="modal-footer">
            <div class="col-sm-12" id="btn-main">
                <button type="button" class="btn btn-primary button__order" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<!---------/FORM CALL YOU---------->

<!---------PRICE-------------->
<?php
$services_args = [
    'post_type' => 'services',
    'posts_per_page' => -1,
];
$services = get_posts( $services_args );
?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="my__price">
                <form id="my__price" method="POST" action="" target="FormName">
                    <div class="row price price__row">
                        <div class="offset-sm-1 col-sm-10">
                            <div id="price"><p>Прайс</p>
                                <div class="pink__line"></div>
                            </div>
                        </div>
                    </div>

                    <?php if ( $services ): ?>
                        <?php foreach( $services as $post ): setup_postdata($post); ?>
                            <?php
                            $service_price_from = get_field('service_price_from');
                            $service_price = get_field('service_price');
                            ?>
                            <div class="row price">
                                <div class="col-md-10 col-sm-12 manicure"><p><?php the_title(); ?></p>
                                    <p class="red__text"><?php echo get_the_content(); ?></p></div>
                                <div class="col-md-1 col-sm-6 text-right"><?php if ( $service_price_from ) echo 'от'; ?></div>
                                <div class="col-md-1 col-sm-6 text-left"><p><?php echo $service_price; ?> грн</p></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>
<!-------/PRICE----------->