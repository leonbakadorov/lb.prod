<?
$folder = '/img/icq';
$slides = [
    [
        'desc' => 'Раздел Discover',
        'img' => '1'
    ],
    [
        'desc' => 'Аудио и видео звонки',
        'img' => '2'
    ],
    [
        'desc' => 'Диалоги и групповые чаты',
        'img' => '3'
    ],
    [
        'desc' => 'Групповой видео-звонок',
        'img' => '4'
    ],

];
?>



<style>
    .product-gallery__image__iphones{
        z-index: 2;
    }
    @media only screen and (max-width: 739px){
        .product-gallery__image__iphones, .screen-mask{
            display: none;
        }

        .product-gallery__image__bg {
            filter: none;
        }
    }
</style>

<? foreach($slides as $item){?>
    <style>
        @media only screen and (min-width: 740px) {
        <? if($item['img'] != 2 || $item['img'] != 3) {?>
            .product-gallery__image__<?=  $item['img']?>-screen-mask {
                -webkit-mask: url(<?= $folder; ?>/<?=  $item['img']?>-large-screen-mask.png) center/100% 100% no-repeat;
                mask: url(<?= $folder; ?>/<?=  $item['img']?>-large-screen-mask.png) center/100% 100% no-repeat;
                z-index: 3;
            }

        <?} else {?>
            .product-gallery__image__2-screen-mask, .product-gallery__image__3-screen-mask {
                -webkit-mask: url(<?= $folder; ?>/3-large-screen-mask.png) center/100% 100% no-repeat;
                mask: url(<?= $folder; ?>/3-large-screen-mask.png) center/100% 100% no-repeat;
                z-index: 3;
            }

        <?}?>
        }

    </style>
<?}?>



<div class="swiper-container">

    <div class="swiper-wrapper">






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
                        <source srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/<?=  $item['img']?>-large-screen.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers screen-mask product-gallery__image__<?=  $item['img']?>-screen-mask"
                             src="/img/preloader-small.svg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">

                    </picture>



                    <!-- IPHONES -->
                    <picture>
                        <source srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/<?=  $item['img']?>-large-iphones.png" media="(min-width: 740px)">
                        <img class="gallery-layers product-gallery__image__iphones"
                             src="/img/preloader-small.svg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>


                    <!-- BACKGROUND -->
                    <picture>
                        <source srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/<?=  $item['img']?>-large-bg.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__bg"
                             src="/img/preloader-small.svg" data-src="<?= $folder; ?>/<?=  $item['img']?>-small.jpg"
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