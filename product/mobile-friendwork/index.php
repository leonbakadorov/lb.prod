<?
$achievement = '
        Леон Бакадоров переосмыслил интерфейс и&nbsp;создал невероятно удобный дизайн под мобильные устройства. 
        Пользователи стали достигать своих целей быстрее на&nbsp;75%.
    ';

$solutions = '
        <li class="product-main__inline__item">Развитие бренда</li>
        <li class="product-main__inline__item">Прототипирование</li>
        <li class="product-main__inline__item">Дизайн интерфейса</li>
        <li class="product-main__inline__item">Руководства по HTML / CSS</li>
        <li class="product-main__inline__item">Визуальное исследование</li>
        <li class="product-main__inline__item">Генерация идей</li>
        <li class="product-main__inline__item">Опросы пользователей</li>
        <li class="product-main__inline__item">Moodboards</li>
        <li class="product-main__inline__item">Тестирование</li>
        <li class="product-main__inline__item">Пользовательские интервью</li>
    ';

$technologies = '
        <li class="product-main__inline__item">SSGC 5</li>
        <li class="product-main__inline__item">Process</li>
        <li class="product-main__inline__item">BigBoon</li>
        <li class="product-main__inline__item">DepthColor</li>
        <li class="product-main__inline__item">UserPersona</li>
        <li class="product-main__inline__item">NanoPixel</li>
        <li class="product-main__inline__item">GoldSpace</li>
    ';


?>
<section class="body-section">
    <div class="body-section__container">
        <div class="product-main">
            <div class="product-main__space-plus"></div>
            <h2 class="product-main__caption">Москва</h2>
            <h2 class="product-main__headline">Потрясающее удобство. Выше в&nbsp;3,8&nbsp;раза.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">
                    Пользователи FriendWork использовали сервис на&nbsp;компьютерах, ноутбуках и&nbsp;планшетах.
                    В&nbsp;особых ситуациях они нужнались в&nbsp;быстрых действиях, которые можно сделать прямо
                    на&nbsp;смартфоне. Поэтому дизайн сервиса требовал оптимизации под побильные устройства.
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
            <span class="product-gallery__project-name_caption">UX/UI Design · Mobile Design</span>
            <h3 class="product-gallery__project-name__headline">Мобильная версия веб-сервиса.</h3>
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
                    <dd class="dd-description">Мобильный веб-сервис</dd>


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
                        Увеличение мобильных возможностей веб-сервиса на&nbsp;110%, увеличение скорости закрытия
                        задач пользователей быстрее в&nbsp;1,75 раз.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>