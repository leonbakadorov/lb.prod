<?
$achievement = '
        Комплексная разработка Леона Бакадорова для KareliaDSP принесла компании за&nbsp;2019 год 
        725 заказов на&nbsp;общую сумму в&nbsp;размере 1,2 миллиарда рублей. 
        Инновационный сайт, система брендов, новый логотип — всё для лучшего пользовательского взаимодейтсвия.
                    
    ';

$solutions = '
<li class="product-main__inline__item">Конкурентный и сравнительный анализ</li>
<li class="product-main__inline__item">Информационная архитектура</li>
<li class="product-main__inline__item">Генерация идей</li>
<li class="product-main__inline__item">Развитие бренда</li>
<li class="product-main__inline__item">Пользовательские интервью и опросы</li>
<li class="product-main__inline__item">Карта взаимодействия</li>
<li class="product-main__inline__item">Дизайн интерфейса</li>
<li class="product-main__inline__item">Визуальное исследование</li>
<li class="product-main__inline__item">Эвристическая оценка</li>
<li class="product-main__inline__item">Обзор аналитики</li>
<li class="product-main__inline__item">Истории пользователя</li>
<li class="product-main__inline__item">Стратегия продукта</li>
<li class="product-main__inline__item">Front-end инжиниринг</li>
<li class="product-main__inline__item">Пользовательское тестирование прототипа</li>
<li class="product-main__inline__item">Измерение конверсии</li>
<li class="product-main__inline__item">Развитие персонажа</li>
<li class="product-main__inline__item">Прототипирование</li>
<li class="product-main__inline__item">Дизайн продукта</li>
        
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
            <h2 class="product-main__caption">Москва</h2>
            <h2 class="product-main__headline">Новый имидж и&nbsp;725 заказов на&nbsp;1,2 миллиарда руб.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">

                    У&nbsp;руководства компании встала задача идентифицировать KareliaDSP
                    как отдельную и&nbsp;независимую компанию. Партнёрства с&nbsp;клиентами
                    из&nbsp; стран СНГ требовали представления компании в&nbsp;интернете
                    дополнительно на&nbsp;английском и&nbsp;азербайджанском языках.

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
            <h2 class="product-gallery__headline">Превосходная работа</h2>
            <p class="product-gallery__author">Аркадий Ковалинский,</p>
            <p class="product-gallery__author-post">акционер компании KareliaDSP</p>
        </div>
    </div>

    <div class="product-gallery__container">
        <div class="product-gallery__project-name">
            <span class="product-gallery__project-name_caption">Инновационный веб-сайт · Development</span>
            <h3 class="product-gallery__project-name__headline">Настройки веб-сервиса.</h3>
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
                    <dd class="dd-description dd-link"><a class="" href="https://www.kareliadsp.com/" target="_blank">kareliadsp.com</a></dd>

                    <!---->
                    <dt class="dt-caption">Тип</dt>
                    <dd class="dd-description">Веб-сайт</dd>


                    <!---->
                    <dt class="dt-caption">Локация</dt>
                    <dd class="dd-description">Москва</dd>

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
                        Рост новых клиентов, увеличение среднего чека, повышение конверсии на&nbsp;165%, увеличение удовлетворённости клиентов на&nbsp;180%,
                        увеличение времени нахождения на&nbsp;сайте на&nbsp;320%, повышение вовлечённости на&nbsp;175%.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>