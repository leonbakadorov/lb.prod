<?
    $brands = [
        'lukoil',
        'google',
        'tatneft',
        'mcdonalds',
        'nlmk',
        'ebay',
        'x5retail',







        'severstal',
        'nike',
        'friendwork',
        'mts',
        'kareliadsp',
        'cocacola',
        'sberbank',








        'polymetal',
        'burgaz',
        'ford',
        'evraz',
        'paypal',
        'amazon',
        'citibank',









        'nornikel',
        'alfabank',
        'microsoft',
        'louisvuitton',
        'visa',
        'americanexpress',
        'magnit',









        'eurochem',
        'svyaznoy',
        'mail.ru',
        'mastercard',
        'toyota',
        'avtotor',
        '1cbitrix',








        's7',
        'kfc',
        'gazprom',
        'kdv',
        'zara',
        'pampers',
        'mercedesbenz',





        'polyus',
        'rusal',
        'tinkoff',
        'ingrad',
        'ikea',
        '2gis',
        'mechel',









        'metalloinvest',
        'redbull',
        'gaz',
        'granelle',
        'mercury',

        'starbuks',

        'megafon',








        'vsk',
        'lanit',
        'tts',
        'tashir',
        'siemens',
        'reso',
        'vostbank',








        'merlion',
        'verizon',
        'veon',
        'samsung',
        'acron',
        'mvideo',
        'fosagro',







        'mkb',
        'intel',
        'alfastrah',
        'bmw',
        'setlgroup',
        'pepsi',
        'kaspersky',

    ];

?>

<style>
    .product-about__brands{
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        grid-column-gap: 20px;
        grid-row-gap: 26px;
        width: 50%;
        float: left;
    }
    .product-about__brands__description{
        grid-column-start: 1;
        grid-column-end: 8;
        font-family: "SF Pro Text", "Helvetica", sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.6;
        opacity: .6;
    }
    .product-about__brands__item svg{
        width: 100%;
        height: 100%;
    }
    @media only screen and (max-width: 1439px){
        .product-about__brands{
            width: 100%;
            grid-template-columns: repeat(11, 1fr);
        }
        .product-about__brands__description{
            grid-column-end: 12;
        }
    }
    @media only screen and (max-width: 1279px){
        .product-about__brands{
            grid-template-columns: repeat(7, 1fr);
        }
        .product-about__brands__description{
            grid-column-end: 8;
        }
    }
    @media only screen and (max-width: 739px) {
        .product-about__brands{
            width: 100%;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 20px;
            grid-row-gap: 20px;
        }
        .product-about__brands__description{
            grid-column-end: 4;
            font-size: 13px;
        }
    }

</style>

<div class="product-about__brands">
   <!-- <?/* foreach ($brands as $item){*/?>
        <div class="product-about__brands__item">
            <?/*= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/brands/'.$item.'.svg');*/?>
        </div>
    --><?/*}*/?>
    <? for($i = 1; $i < 78; $i++){?>
        <div class="product-about__brands__item">
            <?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/brands-numbers/'.$i.'.svg');?>
        </div>
    <?}?>


</div>


<style>
    .innovation-cta__wrapper{
        display: none;
    }

    @media only screen and (max-width: 739px) {
        .product-about__brands{
            height: 616px;
            overflow: hidden;
            transition: height 1.6s cubic-bezier(0.77, 0, 0.175, 1) 0.1s;
        }
        .product-about__brands.full{
            height: 2008px;
        }
        .innovation-cta__wrapper{
            display: block;
        }

        .innovation-cta {
            font-weight: 600;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 20px;
            padding: 12px 24px 12px 18px;
            border-radius: 68px;
            -webkit-box-shadow: inset 0 0 0 2px #888;
            box-shadow: inset 0 0 0 2px #888;
            -webkit-transition: 300ms background cubic-bezier(0.4, 0, 0.6, 1),300ms -webkit-box-shadow cubic-bezier(0.4, 0, 0.6, 1);
            transition: 300ms background cubic-bezier(0.4, 0, 0.6, 1),300ms -webkit-box-shadow cubic-bezier(0.4, 0, 0.6, 1);
            transition: 300ms background cubic-bezier(0.4, 0, 0.6, 1),300ms box-shadow cubic-bezier(0.4, 0, 0.6, 1);
            transition: 300ms background cubic-bezier(0.4, 0, 0.6, 1),300ms box-shadow cubic-bezier(0.4, 0, 0.6, 1),300ms -webkit-box-shadow cubic-bezier(0.4, 0, 0.6, 1);
            -webkit-appearance: button;
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: -internal-light-dark-color(buttontext, rgb(170, 170, 170));
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            background: none;
            border: 0;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            color: inherit;
            cursor: pointer;
            font: inherit;
            line-height: inherit;
            overflow: visible;
            vertical-align: inherit;
        }
        .innovation-cta__icon-plus{
            font-family: "SF Pro Icons";
            display: inline-block;
            font-style: normal;
            font-weight: inherit;
            font-size: inherit;
            line-height: 1;
            position: relative;
            z-index: 1;
            color: #888;
            -webkit-transition: 300ms color cubic-bezier(0.4, 0, 0.6, 1);
            transition: 300ms color cubic-bezier(0.4, 0, 0.6, 1);
            user-select: none;
        }
        .innovation-cta__icon-plus::before {
            -webkit-padding-end: 0.6em;
            -moz-padding-end: 0.6em;
            padding-inline-end: 0.6em;
            display: inline;
            content: "";
            text-decoration: none;
        }
        .more-brands.opened .innovation-cta__icon-plus::before {
            content: "";
        }
        .innovation-cta__typography{
            user-select: none;
            font-size: 14px;
            line-height: 1.28577;
            font-weight: 600;
            letter-spacing: -.016em;
            font-family: "SF Pro Text","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
            color: #888;
            -webkit-transition: 300ms color cubic-bezier(0.4, 0, 0.6, 1);
            transition: 300ms color cubic-bezier(0.4, 0, 0.6, 1);
        }


        .innovation-cta:hover{
            -webkit-box-shadow: inset 0 0 0 4px #fff;
            box-shadow: inset 0 0 0 4px #fff;
        }
        .innovation-cta:hover .innovation-cta__icon-plus{
            color: #fff;
        }
        .innovation-cta:hover .innovation-cta__typography{
            color: #fff;
        }

        .innovation-cta:active{
            background: #fff;

        }
        .innovation-cta:active .innovation-cta__icon-plus{
            color: #000;
        }
        .innovation-cta:active .innovation-cta__typography{
            color: #000;
        }
    }
</style>

<div class="innovation-cta__wrapper">
    <button class="innovation-cta more-brands">
        <span class="innovation-cta__icon-plus"></span>
        <span class="innovation-cta__typography">
            Смотрите,  с&nbsp;какими компаниями Леон работал&nbsp;ещё
        </span>
    </button>

</div>

<script>
    var brands = document.querySelector('.product-about__brands');
    var moreBrands = document.querySelector('.more-brands');

    moreBrands.addEventListener('click', function(){
        moreBrands.classList.toggle('opened');
        brands.classList.toggle('full');
    });

</script>




