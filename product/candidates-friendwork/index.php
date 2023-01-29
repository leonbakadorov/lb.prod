<?
$achievement = '
       Инновационный дизайн продукта, который создал Леон Бакадоров, вызвал у&nbsp;пользователей потрясающий восторг. 
       Чистый, интуитивный и&nbsp;невероятно удобный дизайн с&nbsp;новыми функциями привлёк в&nbsp;сервис лидеров банкоского 
       дела Сбербанк, Альфабанк и&nbsp;Тинькофф.
    ';

$solutions = '
        <li class="product-main__inline__item">Оптимизация конверсий</li>
        <li class="product-main__inline__item">Развитие бренда</li>
        <li class="product-main__inline__item">Пользовательские интервью</li>
        <li class="product-main__inline__item">Дизайн продукта</li>
        <li class="product-main__inline__item">Конкурентный анализ</li>
        <li class="product-main__inline__item">Визуальное исследование</li>
        <li class="product-main__inline__item">Генерация идей</li>
        <li class="product-main__inline__item">Карта взаимодействия</li>
        <li class="product-main__inline__item">Прототипирование</li>
        <li class="product-main__inline__item">Разработка системы дизайна</li>
        <li class="product-main__inline__item">Стратегия продукта</li>
        <li class="product-main__inline__item">Тепловое картирование и скроллинг</li>
        <li class="product-main__inline__item">Руководства по HTML / CSS</li>
    ';

$technologies = '
         <li class="product-main__inline__item">Process</li>
        <li class="product-main__inline__item">SSGC 5</li>
        <li class="product-main__inline__item">Perspective</li>
        <li class="product-main__inline__item">worldSearch</li>
        <li class="product-main__inline__item">DepthColor</li>
        <li class="product-main__inline__item">BigBoon</li>
        <li class="product-main__inline__item">NanoPixel</li>
        <li class="product-main__inline__item">UserPersona</li>
        <li class="product-main__inline__item">SuperSmooth</li>
        <li class="product-main__inline__item">GoldSpace</li> 
    ';


?>
<section class="body-section">
    <div class="body-section__container">
        <div class="product-main">
            <div class="product-main__space-plus"></div>
            <h2 class="product-main__caption">Санкт-Петербург</h2>
            <h2 class="product-main__headline"><span style="color: #19bb4f; ">Сбербанк</span> вошёл в&nbsp;чат. Рост клиентов на&nbsp;374%.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">
                    Веб-сервис по автоматизации рекрутинга FriendWork начал свою работу в&nbsp;2012 году.
                    За 5&nbsp;лет состояние системы требовало как визуального, так и&nbsp;функционального улучшения.
                    В&nbsp;компании приняли решение создать новый современный дизайн и&nbsp;функционально
                    оптимизировать требуемые моменты.
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
            <h2 class="product-gallery__headline">Невероятно сильно</h2>
            <p class="product-gallery__author">Снежана Красс,</p>
            <p class="product-gallery__author-post">менеджер продукта FriendWork</p>
        </div>
    </div>

    <div class="product-gallery__container">
        <div class="product-gallery__project-name">
            <span class="product-gallery__project-name_caption">UX/UI Design · Desktop Systems</span>
            <h3 class="product-gallery__project-name__headline">Интерфейс списка кандидатов.</h3>
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
                    <dd class="dd-description dd-link"><a class="" href="https://friend.work/" target="_blank">friend.work</a></dd>

                    <!---->
                    <dt class="dt-caption">Тип</dt>
                    <dd class="dd-description">Настольный веб-сервис</dd>


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
                        Упрощение навигации среди большого количества информации на&nbsp;155%, улучшение
                        информационной архитектуры, повышение удобства, новая функциональность для ускорения работы.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>