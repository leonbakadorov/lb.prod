<?
$achievement = '
        Феноменальный дизайн приложения, созданный будто самой Apple, 
        открывает для пользователей лучшие условия для достижения 
        своих целей в&nbsp;рекрутинге.
    ';

$solutions = ' 
        <li class="product-main__inline__item">Эвристическая оценка</li>
        <li class="product-main__inline__item">Дизайн приложения</li>
        <li class="product-main__inline__item">Тестирование прототипов</li>
        <li class="product-main__inline__item">Опросы пользователей</li> 
        <li class="product-main__inline__item">Обзор аналитики</li>
        <li class="product-main__inline__item">Иллюстрации, значки и инфографика</li> 
        <li class="product-main__inline__item">Дизайн пользовательского интерфейса</li>
        <li class="product-main__inline__item">Moodboards</li>
        <li class="product-main__inline__item">Истории пользователя</li>
        <li class="product-main__inline__item">Конкурентный и сравнительный анализ</li>
        
    ';

$technologies = '
        <li class="product-main__inline__item">SSGC 5</li>
        <li class="product-main__inline__item">SSGC 5</li>
        <li class="product-main__inline__item">UserPersona</li>
        <li class="product-main__inline__item">FastFlash</li>
        <li class="product-main__inline__item">worldSearch</li>
    ';


?>
<section class="body-section">
    <div class="body-section__container">
        <div class="product-main">
            <div class="product-main__space-plus"></div>
            <h2 class="product-main__caption">Москва</h2>
            <h2 class="product-main__headline">Как сама Apple iOS.</h2>
            <div class="product-main__description" data-part>
                <h2 class="product-main__caption">Описание</h2>
                <p class="product-main__typography">
                    Преимущества мобильного приложения очевидны: максимально возможная скорость работы,
                    полный контроль интерфейса, лучшее удобство работы. FriendWork поставили задачу
                    определить самые важные и&nbsp;значимые функции сервиса и&nbsp;реализовать их в&nbsp;мобильном
                    приложении под iOS.
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
    <!--<div class="product-gallery__container product-gallery__review">
        <div class="product-gallery__review-container">
            <h2 class="product-gallery__headline">Превосходные результаты</h2>
            <p class="product-gallery__author">Аркадий Ковалинский,</p>
            <p class="product-gallery__author-post">акционер компании KareliaDSP</p>
        </div>
    </div>-->
    <div class="product-gallery__space-plus"></div>

    <div class="product-gallery__container">
        <div class="product-gallery__project-name">
            <span class="product-gallery__project-name_caption">UX/UI Design · iOS Design</span>
            <h3 class="product-gallery__project-name__headline">Мобильное приложение iOS.</h3>
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
                    <dd class="dd-description">Мобильное приложение iOS</dd>


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
                        Мгновенный доступ к&nbsp;вакансиям, кандидатам, событиям. Уведомления и&nbsp;напоминания в&nbsp;реальном
                        времени. Инновационный дизайн.
                    </dd>



                </dl>

            </div>


        </div>


    </div>

</section>