<div class="product-gallery__container">
    <div class="product-gallery__project-name">
        <span class="product-gallery__project-name_caption">Kareliadsp · Проект №1</span>
        <h3 class="product-gallery__project-name__headline">Информационный сайт.</h3>
    </div>
</div>

<div class="swiper-container">

    <div class="swiper-wrapper">

        <?
        $screen = '/img/kareliadsp';
        $bg = '/bg/kareliadsp';
        $slides = [
            1 => [
                'desc' => 'Главная страница сайта',
                'img' => '1'
            ],
            2 => [
                'desc' => 'Преимущества ЛДСП&nbsp;PRO&nbsp;M',
                'img' => '2'
            ],
            3 => [
                'desc' => 'Надёжная упаковка',
                'img' => '3'
            ],
            4 => [
                'desc' => 'Толщины ДСП&nbsp;RAW&nbsp;X',
                'img' => '4'
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
                        <source srcset="<?= $screen; ?>/<?=  $item['img']?>.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__screen"
                             src="<?= $screen; ?>/small/<?=  $item['img']?>.jpg"
                             alt="<?= $item['desc'].' | Leon Bakadorov LB'; ?>">
                    </picture>


                    <!-- MACBOOK -->
                    <picture>
                        <source srcset="/screen/macbook-large.png" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__macbook" src="/screen/macbook-small.png">
                    </picture>



                    <!-- BACKGROUND -->
                    <picture>
                        <source srcset="<?= $bg; ?>/<?=  $item['img']?>.jpg" media="(min-width: 740px)">

                        <img class="gallery-layers product-gallery__image__bg"
                             src="<?= $bg; ?>/small/<?=  $item['img']?>.jpg"
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