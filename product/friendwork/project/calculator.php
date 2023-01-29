<div class="product-gallery__container">
    <div class="product-gallery__project-name">
        <span class="product-gallery__project-name_caption">Kareliadsp · Проект №2</span>
        <h3 class="product-gallery__project-name__headline">Калькулятор материалов.</h3>
    </div>
</div>

<div class="swiper-container">

    <div class="swiper-wrapper">

        <?
        $folder = '/img/kareliadsp';
        $slides = [
            5 => [
                'desc' => 'Главная страница калькулятора',
                'img' => '5'
            ],
            6 => [
                'desc' => 'Выбор транспортировки',
                'img' => '6'
            ],
            7 => [
                'desc' => 'Проверка заказа',
                'img' => '7'
            ],
            8 => [
                'desc' => 'Экран успешного завершения',
                'img' => '8'
            ],

        ];
        ?>


        <? foreach($slides as $item){?>
            <div class="swiper-slide">
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
                        <source srcset="<?= $folder; ?>/<?=  $item['img']?>.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__screen"
                             src="<?= $folder; ?>/small/<?=  $item['img']?>.jpg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>


                    <!-- MACBOOK -->
                    <picture>
                        <source srcset="/screen/macbook-large.png" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__macbook" src="/screen/macbook-small.png">
                    </picture>



                    <!-- BACKGROUND -->
                    <picture>
                        <source srcset="<?= $folder; ?>/bg/<?=  $item['img']?>.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__bg"
                             src="<?= $folder; ?>/bg/small/<?=  $item['img']?>.jpg"
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