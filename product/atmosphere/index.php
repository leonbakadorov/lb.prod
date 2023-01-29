<?
$achievement = '
        Леон Бакадоров создал сверхинновационный, сверхбыстрый и&nbsp;сверхэффективный веб-сайт, 
        который открывает новое пространство и&nbsp;время. Его совершенные формы, инновационные технологии 
        и&nbsp;непревзойдённая архитектура 
        делают его шедевром искусства, дизайна и&nbsp;технологий, который выходит за&nbsp;рамки воображения.
        C&nbsp;2014 по 2020 годы через сайт сделано 19 заказов на 317 миллионов рублей.
        
    ';

$solutions = '

<li class="product-main__inline__item">Развитие бренда</li>
<li class="product-main__inline__item">Конкурентный и сравнительный анализ</li>
<li class="product-main__inline__item">Информационная архитектура</li>
<li class="product-main__inline__item">Генерация идей</li>
<li class="product-main__inline__item">Визуальное исследование</li>
<li class="product-main__inline__item">Дизайн логотипа</li>
<li class="product-main__inline__item">Пользовательские интервью и опросы</li>
<li class="product-main__inline__item">Карта взаимодействия</li>
<li class="product-main__inline__item">Дизайн интерфейса</li>
<li class="product-main__inline__item">Эвристическая оценка</li>
<li class="product-main__inline__item">Обзор аналитики</li>
<li class="product-main__inline__item">Истории пользователя</li>
<li class="product-main__inline__item">Стратегия продукта</li>
<li class="product-main__inline__item">Front-end инжиниринг</li>
<li class="product-main__inline__item">Дизайн продукта</li>
<li class="product-main__inline__item">Пользовательское тестирование прототипа</li>
<li class="product-main__inline__item">Развитие персонажа</li>
<li class="product-main__inline__item">Прототипирование</li>

        
    ';

$technologies = '
        <li class="product-main__inline__item">worldSearch</li>
        <li class="product-main__inline__item">Process</li>
        <li class="product-main__inline__item">SSGC 5</li>
        <li class="product-main__inline__item">DepthColor</li>
        <li class="product-main__inline__item">Perspective</li>
        <li class="product-main__inline__item">GoldSpace</li>
        <li class="product-main__inline__item">SuperSmooth</li>
        <li class="product-main__inline__item">UserPersona</li>
        <li class="product-main__inline__item">NanoPixel</li>
        <li class="product-main__inline__item">BigBoon</li>
    ';


?>
<section class="body-section">
    <div class="body-section__container">
        <div class="product-main">
            <div class="product-main__space-plus"></div>
            <h2 class="product-main__caption">Санкт-Петербург</h2>
            <style>
                .defis-small{
                    display: none;
                }
                @media only screen and (max-width: 739px){
                    .defis-small{
                        display: inline;
                    }
                }
            </style>
            <h2 class="product-main__headline">Ультра<span class="defis-small">-</span>современный минимализм. + 317 млн ₽.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">
                    Компания АТМОСФЕРА предлагает радикальную трактовку передовых интерьеров и&nbsp;экстраординарной флористики.
                    Выйдя на&nbsp;рынок в&nbsp;1999 году АТМОСФЕРА прошла большой путь. Среди её&nbsp;клиентов
                    крупнейшие организации, владельцы недвижимости в&nbsp;Москва-Сити и&nbsp;зарубежные персоны, которые ценят время,
                    изысканный стиль и&nbsp;высокую эстетику. Поэтому компания обратилась к&nbsp;Леону Бакадорову,
                    чтобы он создал такой веб-сайт, который бы&nbsp;отвечал самым высоким требованиям и максимальным
                    показателям простоты, скорости и&nbsp;изящности.
                </p>
            </div>
            <div class="product-main__grid" data-part>

                <div class="product-main__grid__module">
                    <h2 class="product-main__caption">Достижения</h2>
                    <p class="product-main__typography__plus">
                        <?= $achievement; ?>
                    </p>
                </div>

                <div class="product-main__grid__module">
                    <h2 class="product-main__caption">Решения</h2>
                    <ul class="product-main__typography">
                        <?= $solutions; ?>
                    </ul>

                    <br><br>

                    <h2 class="product-main__caption">Технологии</h2>
                    <ul class="product-main__typography">
                        <?= $technologies; ?>
                    </ul>
                </div>


            </div>
        </div>

    </div>
</section>


<section class="product-gallery">
    <div class="product-gallery__container product-gallery__review">
        <div class="product-gallery__review-container">
            <h2 class="product-gallery__headline">Шикарно — то, что надо</h2>
            <p class="product-gallery__author">Максим Лангуев,</p>
            <p class="product-gallery__author-post">директор Atmosphere</p>
        </div>
    </div>

    <div class="product-gallery__container">
        <div class="product-gallery__project-name">
            <span class="product-gallery__project-name_caption">UX/UI Design · Development</span>
            <h3 class="product-gallery__project-name__headline">Инновационный веб-сайт для Atmosphere.</h3>
        </div>
    </div>


    <!-- ------- Калькулятор ------ -->
    <? include 'slider.php'; ?>


</section>

<section class="product-footer">


    <div class="product-gallery__container footer">

        <h2 class="product-gallery__headline-footer">Обзор</h2>


        <div class="product-gallery__footer">
            <div class="flex-column">
                <h3 class="product-gallery__footer__heading">Информация</h3>

                <dl class="dl-section">
                    <dt class="dt-caption">URL</dt>
                    <dd class="dd-description dd-link"><a class="" href="http://www.atmosphere.spb.ru/" target="_blank">atmosphere.spb.ru</a></dd>

                    <!---->
                    <dt class="dt-caption">Тип</dt>
                    <dd class="dd-description">Разработка веб-сайта</dd>


                    <!---->
                    <dt class="dt-caption">Локация</dt>
                    <dd class="dd-description">Санкт-Петербург</dd>

                    <!---->
                    <dt class="dt-caption">Разработка</dt>
                    <dd class="dd-description">Леон Бакадоров</dd>
                </dl>

            </div>

            <div class="flex-column double-solutions">
                <h3 class="product-gallery__footer__heading">Решения</h3>
                <dl class="dl-section">
                    <dt class="dt-caption">Основное</dt>
                    <dd class="dd-description">
                        <ul class="product-main__typography">
                            <?= $solutions; ?>
                        </ul>
                    </dd>

                    <!---->
                    <dt class="dt-caption">Технологии</dt>
                    <dd class="dd-description">
                        <ul class="product-main__typography">
                            <?= $technologies; ?>
                        </ul>
                    </dd>

                </dl>

            </div>

            <div class="flex-column">
                <h3 class="product-gallery__footer__heading">Достижения</h3>
                <dl class="dl-section">
                    <div class="double-achievement">
                        <dt class="dt-caption">Главное</dt>
                        <dd class="dd-description">
                            <?= $achievement; ?>
                        </dd>
                    </div>


                    <!---->
                    <dt class="dt-caption">Дополнительно</dt>
                    <dd class="dd-description">
                        Рост клиентов, увеличение количества заказов на&nbsp;125%, увеличено время нахождения на&nbsp;сайте на&nbsp;130%,
                        повышение узнаваемости бренда.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>