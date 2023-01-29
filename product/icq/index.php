<?
$achievement = '
        Леон Бакадоров создал передовой опыт взаимодействия, полностью сфокусированный на&nbsp;задачах
        пользователя. Новый UX/UI-дизайн Леона потрясающе высоко оценивают как сами пользователи,
        так и&nbsp;эксперты UX и&nbsp;дизайн сфер.
    ';

$solutions = '
        <li class="product-main__inline__item">Дизайн продукта</li>
        <li class="product-main__inline__item">Генерация идей</li>
        <li class="product-main__inline__item">Визуальное исследование</li>
        <li class="product-main__inline__item">Дизайн интерфейса</li>
        <li class="product-main__inline__item">Прототипирование</li>
        <li class="product-main__inline__item">Тестирование</li>
        <li class="product-main__inline__item">Moodboards</li>
        <li class="product-main__inline__item">Эвристическая оценка</li>
        <li class="product-main__inline__item">Обзор аналитики</li>
        <li class="product-main__inline__item">Разработка системы дизайна</li>
    ';

$technologies = '
        <li class="product-main__inline__item">Process</li>
        <li class="product-main__inline__item">SSGC 5</li>
        <li class="product-main__inline__item">worldSearch</li>
        <li class="product-main__inline__item">UserPersona</li>
    ';


?>
<section class="body-section">
    <div class="body-section__container">
        <div class="product-main">
            <div class="product-main__space-plus"></div>
            <h2 class="product-main__caption">Москва</h2>
            <h2 class="product-main__headline">Опережающий время.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">
                    Icq является системой мгновенного обмена текстовыми сообщениями для мобильных и&nbsp;настольных платформ
                    с&nbsp;поддержкой голосовой и&nbsp;видеосвязи. Являясь самым первым мессенджером, в&nbsp;Icq осознали,
                    что настала пора вносить явные изменения в&nbsp;интерфейс, следуя совеременным стандартам и&nbsp;тенденциям.
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
            <span class="product-gallery__project-name_caption">UX/UI Design · Mobile App</span>
            <h3 class="product-gallery__project-name__headline">Мобильное приложение мессенджера.</h3>
        </div>
    </div>


    <!-- ------- Gallery ------ -->
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
                    <dd class="dd-description dd-link"><a class="" href="https://icq.com/" target="_blank">icq.com</a></dd>

                    <!---->
                    <dt class="dt-caption">Тип</dt>
                    <dd class="dd-description">Мобильное приложение, Мессенджер</dd>


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
                        Чистый UX/UI-дизайн Леона Бакадорова стал для Icq отправной точкой и&nbsp;переломным моментом
                        в&nbsp;истории. Последующие обновления и&nbsp;усовершествования основываются
                        на&nbsp;эталонном дизайне, являющимся актуальным по&nbsp;сей день.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>