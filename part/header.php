<style>
    .fp-product {
        padding-top: calc(68px + 44px);
        text-align: center;
    }
    .product-bugatti {
        background-color: #D1112A;
    }
    .section-content {
        margin: 0 auto;
        width: 100%;
        max-width: 980px;
        color: #222;
    }

    @media only screen and (max-width: 1068px) {
        .section-content {
            margin-left: auto;
            margin-right: auto;
            width: 692px
        }
    }
    .product-bugatti .section-content {
        padding-bottom: 136px;
    }

    .product-headline {
        font-size: 80px;
        line-height: 1.0625;
        color: #fff;
        letter-spacing: -.02em;
        font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        font-weight: 600;
        margin-bottom: 8px;
    }
    @media only screen and (max-width: 1068px) {
        .product-headline {
            font-size: 59px;
            line-height: 1.10227;
            font-weight: 500;
            letter-spacing: -.025em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }
    }
    @media only screen and (max-width: 735px) {
        .fp-product {
            padding-top: calc(84px + 48px);
        }
        .product-headline {
            font-size: 74px;
            line-height: 1.15825;
            font-weight: 500;
            letter-spacing: -.002em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            display: flex;
            justify-content: center;
        }
    }


    @media only screen and (max-width: 1068px) {
        .product-headline {
            margin-bottom: 3px;
            font-weight: 600
        }
    }

    @media only screen and (max-width: 735px) {
        .product-headline {
            margin-bottom: 8px;
            font-weight: 600
        }
    }

    .product-subheadline {
        margin-top: 0;
        margin-bottom: 2px;
        color: #fff;
    }

    @media only screen and (max-width: 1068px) {
        .product-subheadline {
            margin-bottom: 2px
        }
    }

    .product-more {
        font-size: 21px;
        line-height: 1.38105;
        font-weight: 400;
        letter-spacing: .011em;
        font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        display: inline-block;
        margin-top: 16px;
        z-index: 15;
        position: relative;
        color: #fff;

    }


    @media only screen and (max-width: 1068px) {
        .product-more {
            font-size: 19px;
            line-height: 1.42115;
            font-weight: 400;
            letter-spacing: .012em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }
    }

    @media only screen and (max-width: 735px) {
        .product-more {
            font-size: 19px;
            line-height: 1.5446;
            font-weight: 400;
            letter-spacing: -.032em;
            font-family: "Pro Text", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            max-width: 300px;
        }
    }

    @media only screen and (max-width: 1068px) {
        .product-more {
            margin-top: 13px
        }
    }

    @media only screen and (max-width: 735px) {
        .product-more {
            margin-top: 12px
        }
    }


    .typography-headline-reduced {
        font-size: 40px;
        line-height: 1.1;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
    }


    @media only screen and (max-width: 1068px) {
        .typography-headline-reduced {
            font-size: 32px;
            line-height: 1.125;
            font-weight: 600;
            letter-spacing: .004em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }
    }

    @media only screen and (max-width: 735px) {
        .typography-headline-reduced {
            font-size: 28px;
            line-height: 1.14815;
            font-weight: 400;
            letter-spacing: -.002em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            white-space: nowrap;
            display: flex;
            justify-content: center;
        }
    }
    @media only screen and (max-width: 355px) {
        .typography-headline-reduced {
            white-space: break-spaces;
        }
    }

    .icon::before, .icon::after, .more::before, .more::after {
        font-family: "Pro Icons";
        color: inherit;
        display: inline-block;
        font-style: normal;
        font-weight: inherit;
        font-size: inherit;
        line-height: 1;
        position: relative;
        z-index: 1;
    }
    .icon-after::after, .more::after {
        padding-left: 0.3em;
        top: 0;
    }
    .more::after {
        content: "";
    }

    .product-cta:nth-child(2) {
        margin-left: 13px;
    }

    .product-bugatti figure.image-bugatti-01 {
        margin-left: auto;
        margin-right: auto;
        width: 980px;
        height: 378px;
        background-size: 980px 378px;
        background-repeat: no-repeat;
        background-image: url(img/bugatti/bugatti-promo.png);
        box-shadow: -34px 55px 84px rgb(0 0 0 / 25%);
        border-radius: 1.27em;
        overflow: visible;
    }
    .product-bugatti figure.image-bugatti-01 {
        margin-top: 55px;
    }

    @media only screen and (max-width: 1068px) {

        .product-bugatti figure.image-bugatti-01 {

            margin-left: auto;
            margin-right: auto;
            width: 100%;
            height: 0px;
            padding-bottom: 38.57%;
            background-size: cover;
            background-repeat: no-repeat;
            /*background-image: url(images/bugatti-promo.png);*/
            box-shadow: -34px 55px 84px rgba(0,0,0,.25);

        }

    }

    @media only screen and (max-width: 735px) {
        .section-content {
            margin-left: auto;
            margin-right: auto;
            width: 87.5%
        }
    }

    @media only screen and (max-width: 1065px){
        .product-bugatti figure.image-bugatti-01 {
            border-radius: 0.87em;
        }
    }

    @media only screen and (max-width: 735px){
        .product-bugatti figure.image-bugatti-01 {
            border-radius: 0.34em;
            margin-top: 32px;
        }
    }

    .bugatti-scroll-down {
        font-size: 28px;
        display: block;
        margin-top: 8px;
    }


</style>


<section class="fp-product product-bugatti section theme-dark">
    <div class="section-content">
        <div class="row">
            <h2 class="product-headline">Leon<br>Bakadorov</h2>
            <h3 class="product-subheadline typography-headline-reduced">Величественная суперсила.</h3>
            <div class="product-more constrained">
                <!--<a class="more product-cta" href="#bugatti">Подробнее</a>
                <a class="more product-cta" href="mailto:leobakadorov@gmail.com">Заказать разработку</a>-->
                <div class="product-cta" style="opacity: .7">
                    <!--Скрольте ниже для подробностей-->
                    Больше о&nbsp;разработках Leon&nbsp;Bakadorov
                    <span class="bugatti-scroll-down">
                        <?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/css/scroll-down.svg'); ?>
                        <!---->
                    </span>
                </div>
            </div>

            <figure class="image-bugatti-01"></figure>

        </div>
    </div>
</section>