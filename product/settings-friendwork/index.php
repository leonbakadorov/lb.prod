<?
$achievement = '
        Универсальные элементы дизайна и&nbsp;функции, созданные Леоном, ускорили и&nbsp;упростили процесс разработки, 
        сделали интерфейс интуитивнее на&nbsp;86%, позволили пользователям настраивать сервис мгновенно.
    ';

$solutions = '
        <li class="product-main__inline__item">Генерация идей</li>
        <li class="product-main__inline__item">Конкурентный и сравнительный анализ</li>
        <li class="product-main__inline__item">Пользовательские интервью и опросы</li>
        <li class="product-main__inline__item">Карта взаимодействия</li>
        <li class="product-main__inline__item">Дизайн интерфейса</li>
        <li class="product-main__inline__item">Визуальное исследование</li>
        <li class="product-main__inline__item">Эвристическая оценка</li>
        <li class="product-main__inline__item">Обзор аналитики</li>
        <li class="product-main__inline__item">Истории пользователя</li>
        <li class="product-main__inline__item">Стратегия продукта</li>
        
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
            <h2 class="product-main__headline">Персонализация увеличена в&nbsp;2,7&nbsp;раза.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">
                    Службу поддержки FriendWork перегружали похожими запросами об&nbsp;изменении интерфейса
                    и&nbsp;настроек веб-сервиса. Требовалось изучить эти вопросы и&nbsp;реализовать такие настройки,
                    которые помогали пользователям решать задачи без обращения в&nbsp;поддержку.
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
            <h2 class="product-gallery__headline">Эталоны удобства</h2>
            <p class="product-gallery__author">Александр Красс,</p>
            <p class="product-gallery__author-post">директор FriendWork</p>
        </div>
    </div>

    <div class="product-gallery__container">
        <div class="product-gallery__project-name">
            <span class="product-gallery__project-name_caption">UX/UI Design · Settings Design</span>
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
                    <dd class="dd-description dd-link"><a class="" href="https://friend.work/" target="_blank">friend.work</a></dd>

                    <!---->
                    <dt class="dt-caption">Тип</dt>
                    <dd class="dd-description">Настольный веб-сервис</dd>


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
                        Увеличена скорость ответа техподдержки в&nbsp;2,4 раза, увеличена персонализация
                        сервиса в&nbsp;2,7 раз, повышена удовлетворенность пользователей на&nbsp;175%.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>