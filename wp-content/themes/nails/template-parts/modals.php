<!-----FORM - ORDER modal window ------->
<div class="modal fade " id="fistModal" tabindex="-1" role="dialog" aria-labelledby="fistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="my__form">
                <?php echo do_shortcode('[contact-form-7 id="20" title="Заказать услугу" html_id="my__form"]'); ?>

                <form id="my__form" method="POST" action="#">
                    <div class="order__service order__main_text"><span>Заказать услугу</span></div>

                    <input type="hidden" name="type" value="ajax">
                    <input type="hidden" name="action" value="order">
                    <label class="your__name"><input id="yourname" placeholder="Ваше имя" type="text" name="first_name"> </label>
                    <label class="your__phone"><input id="yourphone"  placeholder="+380*********" type="tel" name="phone"> </label>

                    <div class="services order__main_text"><span>Услуги</span></div>

                    <section>
                        <div class="row row__services">
                            <div class="col-md-6 col-sm-12">
                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Маникюр женский" class="form-check-input" type="checkbox" id="service1">
                                        <label class="form-check-label" for="service1">
                                            <p class="manicure__form">Маникюр женский<p class="price__form"> 120 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Маникюр европейский" class="form-check-input" type="checkbox" id="service2">
                                        <label class="form-check-label" for="service2">
                                            <p class="manicure__form">Маникюр европейский<p class="price__form"> 100 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Гель-лак, френч, лунный." class="form-check-input" type="checkbox" id="service3">
                                        <label class="form-check-label" for="service3">
                                            <p class="manicure__form">Гель-лак, френч, лунный.<p class="price__form"> 250 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Дизайн ногтей(1шт)" class="form-check-input" type="checkbox" id="service4">
                                        <label class="form-check-label" for="service4">
                                            <p class="manicure__form">Дизайн ногтей(1шт)<p class="price__form"> 5-30 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Ремонт ногтя(1шт)" class="form-check-input" type="checkbox" id="service5">
                                        <label class="form-check-label" for="service5">
                                            <p class="manicure__form">Ремонт ногтя(1шт)<p class="price__form"> 30 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Снятие нарощенных" class="form-check-input" type="checkbox" id="service6">
                                        <label class="form-check-label" for="service6">
                                            <p class="manicure__form">Снятие нарощенных<p class="price__form"> от 80 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Spa-процедура" class="form-check-input" type="checkbox" id="service7">
                                        <label class="form-check-label" for="service7">
                                            <p class="manicure__form">Spa-процедура<p class="price__form"> 80 грн</p></p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Маникюр мужской" class="form-check-input" type="checkbox" id="service1">
                                        <label class="form-check-label" for="service1">
                                            <p class="manicure__form">Маникюр мужской<p class="price__form">150 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Покрытие гель-лак" class="form-check-input" type="checkbox" id="service2">
                                        <label class="form-check-label" for="service2">
                                            <p class="manicure__form">Покрытие гель-лак<p class="price__form"> 230 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Снятие гель-лака" class="form-check-input" type="checkbox" id="service3">
                                        <label class="form-check-label" for="service3">
                                            <p class="manicure__form">Снятие гель-лака <p class="price__form"> 50 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll ">
                                    <div class="form-check">
                                        <input name="services[]" value="Наращивание ногтей" class="form-check-input" type="checkbox" id="service4">
                                        <label class="form-check-label" for="service4">
                                            <p class="manicure__form">Наращивание ногтей<p class="price__form"> от 700 грн</p></p></label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Коррекция нарощенных" class="form-check-input" type="checkbox" id="service5">
                                        <label class="form-check-label" for="service5">
                                            <p class="manicure__form">Коррекция нарощенных<p class="price__form"> от 400 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Педикюр женский" class="form-check-input" type="checkbox" id="service6">
                                        <label class="form-check-label" for="service6">
                                            <p class="manicure__form">Педикюр женский<p class="price__form"> 170 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Педикюр мужской" class="form-check-input" type="checkbox" id="service7">
                                        <label class="form-check-label" for="service7">
                                            <p class="manicure__form">Педикюр мужской<p class="price__form"> 250 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-sm-12" id="btn-main">
                                <button name="submit" value="order" type="submit" class="btn btn-primary button__order">Отправить</button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<!-----/FORM - ORDER ------->

<!-------FORM_CALL_YOU------->
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

<!---------PRICE modal window-------------->
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