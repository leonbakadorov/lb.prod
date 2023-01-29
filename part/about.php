<style>
    .product-about{
        background: #000;
        color: #fff;
        padding: 100px 0 100px;
        border-bottom: 12px solid #1d1d1f;
    }
    .product-about__info{
        width: 50%;
        padding-right: 8.33333333333%;
        box-sizing: border-box;
        float: left;
    }
    .product-about__brands__image{
        width: 100%;
        max-width: 760px;
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-image: url(/img/brands-large.jpg);
        background-position: center center;
    }
    .product-about__brands__image:after{
        display: block;
        content: '';
        padding-bottom: 131.97368421%;
    }
    .product-about__info__headline{
        font-size: 56px;
        line-height: 1.2;
        margin-bottom: 20px;
        font-family: "SF Pro Display";
        font-weight: 600;
    }
    .product-about__info__typography{
        font-size: 28px;
        line-height: 1.472;
        font-family: "SF Pro Display";
        font-weight: 600;
        margin-bottom: 64px;
    }
    .product-about__info__caption{
        font-size: 17px;
        line-height: 1.472;
        font-family: "SF Pro Text";
        font-weight: 500;
        margin-bottom: 8px;
    }
    .product-about__info__large{
        font-size: 90px;
        line-height: 1;
        font-family: "SF Pro Display";
        font-weight: 500;
        margin-bottom: 56px;
    }

    @media only screen and (max-width: 1439px){
        .product-about__info{
            width: 100%;
            padding-right: 0;
            margin-bottom: 80px;
        }
        .product-about__info__intro{
            width: 50%;
            float: left;
            padding-right: 8.33333333333%;
            box-sizing: border-box;
        }
        .product-about__info__typography{
            font-size: 22px;
            margin: 0;
        }
        .product-about__info__numbers{
            width: 50%;
            float: left;
        }
        .product-about__info__large {
            font-size: 62px;
            margin-bottom: 40px;
        }
        .product-about__info__large:last-child {
            margin-bottom: 0;
        }

        .product-about__brands__image{
            width: 100%;
            max-width: 100%;
            background-size: auto 100%;
            background-repeat: no-repeat;
            background-image: url(/img/brands-medium.jpg);
            background-position: center center;
        }
        .product-about__brands__image:after{
            display: block;
            content: '';
            padding-bottom: 62.0938628158%;
        }

    }

    @media only screen and (max-width: 1069px) {
        .product-about__brands__image{
            width: 100%;
            max-width: 100%;
            background-size: auto 100%;
            background-repeat: no-repeat;
            background-image: url(/img/brands-xmedium.jpg);
            background-position: center center;
        }
        .product-about__brands__image:after{
            display: block;
            content: '';
            padding-bottom: 137.735849056%;
        }
    }




    @media only screen and (max-width: 739px) {

        .product-about {
            padding: 52px 0 60px;
        }
        .product-about__offers{
            padding-bottom: 32px;
            font-size: 11px;
            margin-bottom: 40px;
        }

        .product-about__info {
            width: 100%;
            padding-right: 0;
            margin-bottom: 64px;
        }

        .product-about__info__intro {
            width: 100%;
            padding: 0;
        }

        .product-about__info__headline {
            font-size: 32px;
        }
        .product-about__info__typography {

            padding-right: 0;
            font-size: 19px;
            margin-bottom: 40px;
        }
        .product-about__info__numbers {
            width: 100%;
        }
        .product-about__info__caption {
            font-size: 15px;
        }
        .product-about__info__large {
            font-size: 46px;
            margin-bottom: 40px;
        }

        .product-about__brands__image{
            width: 100%;
            background-size: auto 100%;
            background-repeat: no-repeat;
            background-image: url(/img/brands-small.jpg);
            background-position: center center;
        }
        .product-about__brands__image:after{
            padding-bottom: 403.846153846%;
        }
    }

</style>


<section class="body-section product-about">
    <div class="body-section__container">
            <div class="product-about__info">
                <div class="product-about__info__intro">
                    <h2 class="product-about__info__headline">Леон Бакадоров.</h2>
                    <p class="product-about__info__typography">
                        Леон Бакадоров — это цифровой швейцарский нож,
                        который любит работать на&nbsp;стыке концепций,
                        дизайна и&nbsp;технологий. У&nbsp;него есть опыт работы
                        с&nbsp;более чем 150 цифровыми проектами для
                        национальных и&nbsp;международных клиентов
                        и&nbsp;брендов. Леон работает в&nbsp;области
                        цифрового дизайна и&nbsp;онлайн-маркетинга с&nbsp;2012 года.
                    </p></div>

                <div class="product-about__info__numbers"><h3 class="product-about__info__caption">Реализовано более</h3>
                    <h2 class="product-about__info__large">150 проектов</h2>

                    <h3 class="product-about__info__caption">Затронуто пользователей</h3>
                    <h2 class="product-about__info__large">Миллионы</h2>

                    <h3 class="product-about__info__caption">Опыт в UX-бизнесе более</h3>
                    <h2 class="product-about__info__large">8 лет</h2></div>

            </div>

                <!--<figure class="product-about__brands__image"></figure>-->
                <? include 'brands.php'; ?>

            

    </div>

</section>