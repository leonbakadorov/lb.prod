
<div class="header">


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

    .product-subheadline {
        margin-top: 0;
        margin-bottom: 2px;
        color: #fff;
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


    .typography-headline-reduced {
        font-size: 40px;
        line-height: 1.1;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
    }



    .product-cta:nth-child(2) {
        margin-left: 13px;
    }

    .product-bugatti figure.image-bugatti-01:before {
        z-index: 1000;
        content: '';
        position: absolute;
        top: 1px;
        left: 1px;
        width: calc(100% - 2px);
        height: calc(100% - 2px);
        box-shadow: -34px 55px 84px rgb(0 0 0 / 25%);
        border-radius: 1.28em;
    }

    .product-bugatti figure.image-bugatti-01 {
        margin-top: 55px;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: 0;
        padding-bottom: 38.5714285714%;
        position: relative;
        border-radius: 1.27em;
    }

    .product-bugatti figure.image-bugatti-01:after {
        z-index: 2000;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: top left;
        background-repeat: no-repeat;
        background-image: url(/img/bugatti/bugatti-promo-top.svg), url(/img/bugatti/bugatti-promo-image_large.jpg);
        mask-image: url(/img/bugatti/bugatti-promo-mask.svg);
        -webkit-mask-image: url(/img/bugatti/bugatti-promo-mask.svg);
        -webkit-mask-size: cover;
        -webkit-mask-position: center;
        -webkit-mask-repeat: no-repeat;
    }




    .bugatti-scroll-down {
        font-size: 28px;
        display: block;
        margin-top: 8px;
    }


    @media only screen and (max-width: 1068px) {
        .section-content {
            margin-left: auto;
            margin-right: auto;
            width: 692px
        }

        .product-headline {
            margin-bottom: 3px;
            font-size: 59px;
            line-height: 1.10227;
            font-weight: 600;
            letter-spacing: -.025em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }

        .product-subheadline {
            margin-bottom: 2px
        }

        .typography-headline-reduced {
            font-size: 32px;
            line-height: 1.125;
            font-weight: 600;
            letter-spacing: .004em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif
        }

        .product-more {
            font-size: 19px;
            line-height: 1.42115;
            font-weight: 400;
            letter-spacing: .012em;
            font-family: "Pro Display", "Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            margin-top: 13px
        }


    }


    @media only screen and (max-width: 735px) {
        .section-content {
            margin-left: auto;
            margin-right: auto;
            width: 87.5%
        }

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

        .product-headline {
            margin-bottom: 8px;
            font-weight: 600
        }

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

        .product-more {
            font-size: 20px;
            line-height: 1.5446;
            font-weight: 400;
            letter-spacing: -.002em;
            max-width: 300px;
            margin-top: 12px
        }

        .product-bugatti figure.image-bugatti-01 {
            margin-top: 32px;
        }
        .product-bugatti figure.image-bugatti-01:after {
            background-image: url(/img/bugatti/bugatti-promo-top.svg), url(/img/bugatti/bugatti-promo-image_small.jpg);
        }
    }

    @media only screen and (max-width: 374px) {
        .product-headline {
            font-size: 64px;
        }
        .typography-headline-reduced {
            white-space: break-spaces;
        }
    }


</style>


<section class="fp-product product-bugatti section theme-dark">
    <div class="section-content">
        <div class="row">
            <h2 class="product-headline">Leon<br>Bakadorov</h2>
            <h3 class="product-subheadline typography-headline-reduced">Величественная суперсила.</h3>
            <div class="product-more constrained">

                <div class="product-cta" style="opacity: .7">
                    Больше о&nbsp;разработках Leon&nbsp;Bakadorov
                    <span class="bugatti-scroll-down">
                        <?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/css/scroll-down.svg'); ?>
                    </span>
                </div>
            </div>

            <figure class="image-bugatti-01"></figure>

        </div>
    </div>
</section>

</div>