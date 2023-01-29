<?
$achievement = '
        Веб-сайт Bugatti, созданный Leon&nbsp;Bakadorov, отвечает высочайшим требованиям эстетики, технологичности и&nbsp;инновационности. Он потрясающий и&nbsp;стирает грани между пользователем и веб-сайтом — создаётся ощущение, что всё происходит вживую и&nbsp;к&nbsp;автомобилям Bugatti можно по-настоящему прикоснуться.
        
    ';

$solutions = '

<li class="product-main__inline__item">Визуальное исследование</li>
<li class="product-main__inline__item">Конкурентный и сравнительный анализ</li>
<li class="product-main__inline__item">Информационная архитектура</li>
<li class="product-main__inline__item">Генерация идей</li>
<li class="product-main__inline__item">Пользовательские интервью и опросы</li>
<li class="product-main__inline__item">Карта взаимодействия</li>
<li class="product-main__inline__item">Дизайн интерфейса</li>
<li class="product-main__inline__item">Эвристическая оценка</li>
<li class="product-main__inline__item">Обзор аналитики</li>
<li class="product-main__inline__item">Истории пользователя</li>
<li class="product-main__inline__item">Стратегия продукта</li>
<li class="product-main__inline__item">Front-end инжиниринг</li>
<li class="product-main__inline__item">Дизайн продукта</li>
<li class="product-main__inline__item">Развитие персонажа</li>
<li class="product-main__inline__item">Прототипирование</li>
<li class="product-main__inline__item">Пользовательское тестирование прототипа</li>

        
    ';

$technologies = '
        <li class="product-main__inline__item">Luxe&nbsp;Fusion&nbsp;2</li>
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
            <!--<div class="product-main__space-plus"></div>-->
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
            <h2 class="product-main__headline">Божественный. Бесподобный. Непревзойдённый.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">
                    Bugatti разрабатывает суперспортивные, супермощные и&nbsp;суперэксклюзивные автомобили. Их утонченные дизайны, инновационные технологии и&nbsp;культовые, ориентированные на&nbsp;производительность формы делают их уникальным шедевром искусства, формы и&nbsp;техники, который раздвигает границы за&nbsp;пределы воображения. Для производителя таких автомобилей требуется соответствующий подход, который и&nbsp;был реализован Леоном Бакадоровым.
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
    <div class="product-gallery__space-plus"></div>

    <div class="product-gallery__container">
        <div class="product-gallery__project-name">
            <span class="product-gallery__project-name_caption">Web Design · Interaction Design</span>
            <h3 class="product-gallery__project-name__headline">Инновационный веб-сайт для Bugatti.</h3>
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
                    <dd class="dd-description dd-link"><a class="" href="http://www.bugatti.com/" target="_blank">bugatti.com</a></dd>

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
                        Для создания такого высококлассного результата, Leon Bakadorov создал ряд эсклюзивных технологий разработки сверхгармоничного дизайна.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>