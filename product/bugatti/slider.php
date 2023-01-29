

<style>
    [data-project="bugatti"] .product-gallery__image__screen {
        filter: none;
    }
</style>
<div class="swiper-container" data-project="bugatti">

    <div class="swiper-wrapper">

        <?


        $folder = '/img/bugatti';
        $slides = [
            [
                'desc' => 'Стартовый экран сайта Bugatti',
                'img' => '1'
            ],
            [
                'desc' => 'Демонстрация мобильного дизайна Bugatti',
                'img' => '2'
            ],
            [
                'desc' => 'Раздел новостей и&nbsp;Footer',
                'img' => '3'
            ],
            [
                'desc' => 'Навигация по моделям Bugatti и&nbsp;сайту',
                'img' => '4'
            ]

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
                        <source srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/<?=  $item['img']?>-screen-large.jpg" media="(min-width: 740px)">
                        <img class="gallery-layers product-gallery__image__screen"
                             src="/img/preloader-small.svg" data-src="<?= $folder; ?>/<?=  $item['img']?>-screen-small.jpg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>



                    <!-- MACBOOK -->
                    <picture>
                        <source srcset="/img/preloader-large.svg" data-srcset="/screen/macbook-large.png" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__macbook"
                             src="/img/preloader-small.svg"
                             data-src="/screen/macbook-small.png">
                    </picture>




                    <!-- BACKGROUND -->
                    <picture>
                        <source srcset="/img/preloader-large.svg"
                                data-srcset="<?= $folder; ?>/<?=  $item['img']?>-bg-large.jpg"
                                media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__bg"
                             src="/img/preloader-small.svg"
                             data-src="<?= $folder; ?>/<?=  $item['img']?>-bg-small.jpg"
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