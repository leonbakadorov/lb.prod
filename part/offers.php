<?
$folder = '/img/offers';
$offers = [
    [
        'img' => 'ideas',
        'title' => 'Прорывные<br>идеи',
        'small' => 'left'
    ],
    [
        'img' => 'websites',
        'title' => 'Инновационные<br>веб-сайты',
        'small' => 'center'
    ],
    [
        'img' => 'mobile',
        'title' => 'Мобильные<br>приложения',
        'small' => 'right'
    ],
    [
        'img' => 'ux',
        'title' => 'Гиперопыт<br>пользователя',
        'small' => 'left'
    ],
    [
        'img' => 'i',
        'title' => 'Сопровож-<br>дение',
        'small' => 'center'
    ],
    [
        'img' => 'design',
        'title' => 'Логотипы,<br>Брендбуки',
        'small' => 'right'
    ]
];
?>

<style>
    .body-section.offers{
        background: #0E0E0E;
    }
    .product-offers{
        height: 136px;
        padding: 20px 0 0;
        box-sizing: border-box;
        position: relative;
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: none;
        text-align: center;
    }
    :root{
        --offers-margin: 20px;
    }
    .product-offers__item:first-child {
        margin: 0 var(--offers-margin) 0 0;
    }
    .product-offers__item:last-child {
        margin: 0 0 0 var(--offers-margin);
    }
    .product-offers__item {
        display: inline-block;
        max-width: 110px;
        margin: 0 var(--offers-margin);
    }
    .product-offers__item__title {
        font-size: 12px;
        line-height: 1.2;
        font-family: "SF Pro Text";
        font-weight: 500;
        color: #fff;
        text-align: center;
    }

    .product-offers__item-image{
        display: block;
        margin: 0 auto;
        width: 64px;
        height: 64px;
        background-size: 64px 64px;
        background-repeat: no-repeat;
        background-position: center center;
    }
    @media only screen and (max-width: 777px){
        :root{
            --offers-margin: 16px;
        }
    }

    @media only screen and (max-width: 739px){
        .product-offers {
            height: auto;
        }
        .product-offers {
            padding: 26px 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-row-gap: 14px;
            grid-column-gap: 12px;
        }
        .product-offers__item, .product-offers__item:first-child, .product-offers__item:last-child {
            margin: 0;
        }



        .product-offers__item-container.center {
            left: 50%;
            transform: translateX(-50%);
        }
        .product-offers__item-container.left{
            left: 0;
        }
        .product-offers__item-container.right{
            float: right;
            right: 0;
        }
    }
    <?/* foreach($offers as $item){*/?>/*
        .product-offers__item-image.<?/*= $item['img']; */?>{
            background-image: url(/img/offers/<?/*= $item['img']; */?>.svg);
        }
    */<?/*}*/?>
</style>

<section class="body-section offers">
    <div class="body-section__container">
        <ul class="product-offers">

            <? foreach($offers as $item){?>
                <li class="product-offers__item">
                    <div class="product-offers__item-container ">
                        <figure class="product-offers__item-image <?= $item['img']; ?>">
                            <?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/offers/'.$item['img'].'.svg'); ?>
                        </figure>
                        <h2 class="product-offers__item__title"><?= $item['title']; ?></h2>
                    </div>
                </li>
            <?}?>
        </ul>
    </div>
</section>