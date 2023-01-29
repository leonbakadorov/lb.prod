<?


$folder = '/img/mobile-friendwork';
$slides = [
    [
        'desc' => 'Профиль кандидата',
        'img' => '1'
    ],
    [
        'desc' => 'Список публикаций',
        'img' => '2'
    ],
    [
        'desc' => 'Список кандидатов',
        'img' => '3'
    ],
    [
        'desc' => 'Настройки почты',
        'img' => '4'
    ]

];
?>

<style>
    .iphone-layers{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    .iphone-layers__background{
        z-index: 1;
    }
    .iphone-layers__screen{
        z-index: 2;
        -webkit-mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkyMCIgaGVpZ2h0PSIxMDgwIiB2aWV3Qm94PSIwIDAgMTkyMCAxMDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cmVjdCB4PSI3ODciIHk9IjE1NCIgd2lkdGg9IjM0NCIgaGVpZ2h0PSI3NDgiIGZpbGw9ImJsYWNrIi8+Cjwvc3ZnPgo=) center/100% 100% no-repeat;
        mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkyMCIgaGVpZ2h0PSIxMDgwIiB2aWV3Qm94PSIwIDAgMTkyMCAxMDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cmVjdCB4PSI3ODciIHk9IjE1NCIgd2lkdGg9IjM0NCIgaGVpZ2h0PSI3NDgiIGZpbGw9ImJsYWNrIi8+Cjwvc3ZnPgo=) center/100% 100% no-repeat;
    }


    .iphone-layers__iphone{
        z-index: 3;
    }
    @media only screen and (max-width: 739px){
        .iphone-layers__screen{
            z-index: 2;
            -webkit-mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODI4IiBoZWlnaHQ9IjE0NzIiIHZpZXdCb3g9IjAgMCA4MjggMTQ3MiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwKSI+CjxyZWN0IHg9IjIwNiIgeT0iMjcwIiB3aWR0aD0iNDE2IiBoZWlnaHQ9IjkwMCIgZmlsbD0iYmxhY2siLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHdpZHRoPSIxNDcyIiBoZWlnaHQ9IjgyOCIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDgyOCkgcm90YXRlKDkwKSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo=) center/100% 100% no-repeat;
            mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODI4IiBoZWlnaHQ9IjE0NzIiIHZpZXdCb3g9IjAgMCA4MjggMTQ3MiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwKSI+CjxyZWN0IHg9IjIwNiIgeT0iMjcwIiB3aWR0aD0iNDE2IiBoZWlnaHQ9IjkwMCIgZmlsbD0iYmxhY2siLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHdpZHRoPSIxNDcyIiBoZWlnaHQ9IjgyOCIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDgyOCkgcm90YXRlKDkwKSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo=) center/100% 100% no-repeat;
        }
    }
</style>

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


                    <!-- IPHONE -->
                    <picture>
                        <source srcset="/img/preloader-large.svg" data-srcset="/screen/iphone-large.png" media="(min-width: 740px)">

                        <img class="iphone-layers iphone-layers__iphone"
                             src="/img/preloader-small.svg" data-src="/screen/iphone-small.png"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>


                    <!-- SCREEN -->
                    <picture>
                        <source  srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/<?=  $item['img']?>-screen-large.jpg" media="(min-width: 740px)">
                        <img class="iphone-layers iphone-layers__screen"
                             src="/img/preloader-small.svg" data-src="<?= $folder; ?>/<?=  $item['img']?>-screen-small.jpg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>




                    <!-- BACKGROUND -->
                    <picture>
                        <source  srcset="/img/preloader-large.svg" data-srcset="<?= $folder; ?>/<?=  $item['img']?>-bg-large.jpg" media="(min-width: 740px)">

                        <img class="iphone-layers iphone-layers__background"
                             src="/img/preloader-small.svg" data-src="<?= $folder; ?>/<?=  $item['img']?>-bg-small.jpg"
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