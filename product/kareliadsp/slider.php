
<div class="swiper-container">

    <div class="swiper-wrapper">

        <?
        $folder = '/img/kareliadsp';
        $slides = [
            [
                'desc' => 'Главная страница калькулятора',
                'img' => '1'
            ],
            [
                'desc' => 'Способы транспортировки',
                'img' => '2'
            ],
            [
                'desc' => 'Проверка заказа',
                'img' => '3'
            ],
            [
                'desc' => 'Экран успешного завершения',
                'img' => '4'
            ],

        ];
        ?>


        <? foreach($slides as $item){?>
            <div class="swiper-slide slide-<?= $item['img'];?>">
                <div class="product-gallery__slide-section">
                    <div class="product-gallery__slide-section__container">
                        <p class="product-gallery__slide-description">
                            <?= $item['desc']; ?>
                        </p>
                    </div>
                    <div class="product-gallery__slide-shadow"></div>

                </div>


                <div class="layers-image">
                    <!-- SCREEN -->
                    <picture>
                        <source srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/<?=  $item['img']?>-screen-large.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__screen"
                             src="/img/preloader-small.svg" data-src="<?= $folder; ?>/<?=  $item['img']?>-screen-small.jpg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>


                    <!-- MACBOOK -->
                    <picture>
                        <source srcset="/img/preloader-large.svg" data-srcset="/screen/macbook-large.png" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__macbook"
                             src="/img/preloader-small.svg" data-src="/screen/macbook-small.png">
                    </picture>



                    <!-- BACKGROUND -->
                    <picture>
                        <source srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/bg/<?=  $item['img']?>.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__bg"
                             src="/img/preloader-small.svg" data-src="<?= $folder; ?>/bg/small/<?=  $item['img']?>.jpg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>
                </div>
            </div>
        <?}?>
    </div>

    <div class="product-gallery__slide-section">
        <div class="product-gallery__slide-section__container">
            <div class="product-gallery__navigations">
                <div class="product-gallery__pagination"></div>
                <div class="product-gallery__buttons">
                    <div class="product-gallery__button product-gallery__previous"></div>
                    <div class="product-gallery__button product-gallery__next"></div>
                </div>
            </div>
        </div>
    </div>

</div>