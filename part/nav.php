<style>
    .nav-items__item {
        opacity: 1;
        color: rgba(255,255,255,.62);
        transition: color 1s ease 0.2s;
    }

    .nav-items__item.ux {
        opacity: 1;

        transition: color 1s ease 0.2s;

    }


    .cta-button{
        color: rgba(255,255,255,.88);
        cursor: pointer;
        height: 100%;
        position: relative;
        display: inline-block;
        transition: color 1s ease 0.2s;
    }
    .cta-button:hover {
        color: rgba(255,255,255,.62);
    }
    body.cta-active .cta-button {
        /*background-color: rgba(255, 255, 255, .05);*/
        color: rgba(255,255,255,.62);
        transition: background-color 1s ease 0.1s, color 1s ease 0.1s;
    }

    .cta-button::selection, .nav-items__item::selection, .nav-link::selection{
        background: none;
    }
    .nav-items {
        right: 42px;
    }

    body.cta-active .nav-items__item.ux{
        color: rgba(255,255,255,.6);
        transition: color 1s ease 0.1s;
    }
    @media only screen and (max-width: 850px){
        .nav-items__item.ux {
            display: inline-block;
        }
        .nav-items__item.phone{
            display: none;
        }
    }


    .cta-popup{
        width: 0;
        height: 0;
        position: absolute;
        border-radius: 36px;


        margin-left: -48px;
        margin-top: 16px;
        z-index: 15;
        transform: perspective(1500px) rotateY(180deg) scale(0.38, 0.38) translateY(-32px)/*translateZ(-3000px) */;
        transition:
                transform cubic-bezier(0.77, 0, 0.175, 1) 800ms,
                opacity .4s ease 0.1s,
                width 1s ease 0.2s, height 1s ease 0.2s;
        opacity: 0;
        will-change: opacity, transform;
    }


    body.cta-active .cta-popup{
        width: 302px;

        opacity: 1;
        transform: perspective(1500px)  rotateY(0deg) scale(1, 1) translateY(0)/*translateZ(0) */;
        transition:
                transform cubic-bezier(0.77, 0, 0.175, 1) 600ms,
                opacity .35s ease 0.15s,
                width 0s ease, height 0s ease;
    }

    .cta-popup__wrapper{
        width: 100%;
        padding-top: 114.569536423%;
        position: relative;
    }







    .cta-popup-shadow{
        width: calc(100% - 4px);
        height: calc(100% - 4px);
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 38px;
        background: none;
        transition: box-shadow 0.5s ease 0.1s;
        box-shadow: none;
        margin-left: 2px;
        margin-top: 2px;
        z-index: 11;
    }
    body.cta-active .cta-popup-shadow{
        box-shadow: 0 24px 112px rgba(0,0,0,.16);
        transition: box-shadow .5s cubic-bezier(0.77, 0, 0.175, 1) 0.2s;
    }



    .cta-popup-overlay{
        background: rgba(0,0,0,0.12);
        opacity: 0;
        position: fixed;
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        z-index: 10;
        transition: backdrop-filter 1s ease 1s, opacity 1s ease 0.2s,width 0s ease 1.2s, height 0s ease 1.2s;
        /*-webkit-backdrop-filter: saturate(138%);
        backdrop-filter: saturate(138%);*/
    }
    body.cta-active .cta-popup-overlay{
        opacity: 1;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: opacity 1s ease 0.1s;
        transition: opacity 1s ease 0.1s;
    }
    .cta-popup-mask{
        width: 100%;
        -webkit-mask: url(/css/cta-popup.svg) center/100% 100% no-repeat;
        mask: url(/css/cta-popup.svg) center/100% 100% no-repeat;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 15;

        background: #fff;
        /*-webkit-backdrop-filter: blur(20px) saturate(180%);
        backdrop-filter: blur(20px) saturate(180%);*/

    }

    .cta-popup__close{
        width: 24px;
        height: 24px;
        background: url(/css/cta-popup-close.svg) top left no-repeat;
        background-size: 24px 24px;
        border-radius: 12px;
        position: absolute;
        top: 17px;
        right: 16px;
        cursor: pointer;
        z-index: 20;
    }
    .cta-popup__close:hover{
        opacity: 0.88;
    }
    .cta-popup__container{
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
        padding: 23px 24px;
        box-sizing: border-box;
    }

    .cta-popup__title{
        font-family: "SF Pro Display", "Helvetica", sans-serif;
        font-size: 34px;
        font-weight: 700;
        line-height: 1.1;
        color: #000002;
        letter-spacing: 0em;
        padding-top: 14px;
    }
    .cta-popup__center{
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
    .cta-popup__form__input{
        background: none;
        display: block;
        width: 100%;
        height: 51px;
        font-family: "SF Pro Display", "Helvetica", sans-serif;
        font-size: 17px;
        font-weight: 400;
        line-height: 1;
        color: #000002;
        border: none;
        outline: none;
        border-radius: 0;
        letter-spacing: .016em;
    }
    .cta-popup__form__input::placeholder{
        color: rgba(0,0,2,.4);
    }
    .cta-popup__form__input:first-child{
        border-bottom: 1px solid rgba(0,0,2,.2);
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
    .cta-popup__form__input:last-child{
        padding: 16px 0 22px;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }
    @-webkit-keyframes autofill {
        to {
            color: inherit;
            background: transparent;
        }
    }

    input:-webkit-autofill {
        -webkit-animation-name: autofill;
        -webkit-animation-fill-mode: both;
    }
















    .cta-popup__text{
        font-family: "SF Pro Display", Helvetica, sans-serif;
        font-weight: 400;
        font-size: 17px;
        line-height: 1.4;
        color: rgba(0,0,2,.8);
    }

    .cta-popup__text__name, .cta-popup__text__email{
        font-weight: 600;
        color: rgba(0,0,2,1);
    }
    .cta-popup__text__email{
        color: #0090FF;
    }


















    .cta-popup__form__info{
        font-family: "SF Pro Text", Helvetica, sans-serif;
        font-weight: 500;
        letter-spacing: -.016em;
        font-size: 12px;
        line-height: 1.5;
        color: #0090FF;
        position: absolute;
        left: 0;
        bottom: 61px;
    }




    .cta-popup__form__button{
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .cta-popup__button__blue {
        width: 254px;
        position: relative;
        cursor: pointer;
        display: block;
        text-align: center;
        white-space: nowrap;
        color: #FCFCFF;
        font-size: 17px;
        line-height: 1.33337;
        font-weight: 400;
        letter-spacing: .005em;
        font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
        min-width: 254px;
        height: 46px;
        box-sizing: border-box;
        padding: 6px 14px 7px;
        border-radius: 17px;
        z-index: 3;
        border: none;
        background: #0090FF;
        margin: 0;
        -webkit-mask: url(/css/cta-popup-button.svg) center/100% 100% no-repeat;
        mask: url(/css/cta-popup-button.svg) center/100% 100% no-repeat;

    }
    .cta-popup__button__blue::selection{
        background: none;
    }
    .cta-popup__button__blue, .cta-popup__button__blue:hover{
        text-decoration: none;
    }
    .cta-popup__button__blue:hover{
        opacity: .88;
    }








    /* *********************************** STEPS AND LOADER ********************************* */


    .cta-popup__step{
        width: 100%;
        height: 100%;
        position: relative;
    }

    .cta-popup__success-action, .cta-popup__error-action{
        overflow: hidden;
        background: #fff;
        width: 0;
        height: 0;
        opacity: 0;
        transition: width 0s ease 1s, height 0s ease 1s, opacity 0s ease 0s;
    }
    .cta-popup__error-action.show, .cta-popup__success-action.show{
        width: 100%;
        height: 100%;
        opacity: 1;
        transition: width 0s ease, height 0s ease, opacity 1s ease 0.2s;
    }


    .cta-popup__first-action{
        transition: width 0s ease 0s, height 0s ease 0s, opacity 0s ease 0s;
    }

    .cta-popup__first-action.hide{
        width: 0;
        height: 0;
        overflow: hidden;

    }


    .cta-popup__load-action{
        width: 0;
        height: 0;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
    }
    .cta-popup__load-action.show {
        width: 100%;
        height: 100%;
    }

    .cta-popup__load-action__wrapper{
        width: 72px;
        height: 72px;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        position: relative;
    }

    .cta-popup__load-action__loader{
        display: inline-block;
        width: 72px;
        height: 72px;
        background: url(/css/cta-popup-loader.svg) center center no-repeat;
        background-size: 72px 72px;
    }

    .cta-popup__load-action.show .cta-popup__load-action__loader{
        -webkit-animation: rotating 1s linear infinite;
        -moz-animation: rotating 1s linear infinite;
        -ms-animation: rotating 1s linear infinite;
        -o-animation: rotating 1s linear infinite;
        animation: rotating 1s linear infinite;
    }


    @-webkit-keyframes rotating /* Safari and Chrome */ {
        from {
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    @keyframes rotating {
        from {
            -ms-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }







    @media only screen and (max-width: 739px){
        .nav-items {
            opacity: 1;
            color: rgba(255,255,255,.88);
            right: 0;
        }
        .nav-items__item.ux {
            position: static;
        }
        .cta-button {
            /*display: inline;*/
        }

        .cta-button{
            color: rgba(255,255,255,.88);
        }
        body.cta-active .cta-button {
            color: rgba(255,255,255,.62);
        }

        .cta-popup {


            margin-left: -6px;
            margin-top: 0px;
        }

        .cta-popup{
            transform: perspective(1500px) rotateY(180deg) scale(0.32, 0.32) translateY(-20px)/*translateZ(-3000px) */;

        }
        /*.cta-popup{
            left: -12px;
            right: -15px;
            top: 41px;
            width: calc(100% + 30px);
            height: calc(100vh - 43px);
            min-height: 300px;
            position: absolute;
            border-radius: 0;
            background: none;
            margin-left: 0;
            margin-top: 0;
            overflow: hidden;
        }
        .cta-popup{

            transform: perspective(0) rotateY(0) scale(1, 1) translateY(110%)!*translateZ(-3000px) *!;
            opacity: 1;

        }
        body.cta-active .cta-popup{
            width: calc(100% + 24px);
            height: calc(100vh - 43px);

            transform: perspective(0) rotateY(0deg) scale(1, 1) translateY(0) !*translateZ(0) translateY(0)*!;
        }

        .cta-popup__container {
            width: 254px;
            height: calc((100vh - 64px)/1.64);
            min-height: 256px;
            max-height: 336px;
        }*/
        .cta-popup-mask {
            /*-webkit-mask: none;
            mask: none;*/
        }
        .cta-popup-shadow {
            /*display: none;*/
        }
        .cta-popup-overlay{
            background: rgba(0,0,0,.4);
        }
    }




</style>


<nav class="global-nav">
    <div class="nav-container">
        <a href="/">
            <div class="leonbakadorov"></div>
        </a>
        <div class="lb"></div>
        <ul class="nav-items">

            <li class="nav-items__item ux"><span class="cta-button" id="cta-toggle">Заказать разработку</span>
                <div class="cta-popup">

                    <div class="cta-popup__wrapper">

                        <div class="cta-popup-shadow"></div>
                        <div class="cta-popup-mask">
                            <div class="cta-popup__close close-popup"></div>
                            <div class="cta-popup__container">


                                <div class="cta-popup__load-action" id="cta-loader">
                                    <div class="cta-popup__load-action__wrapper">
                                        <figure class="cta-popup__load-action__loader"></figure>
                                    </div>
                                </div>
                                <div class="cta-popup__first-action cta-popup__step">
                                    <h2 class="cta-popup__title">Умножайте прибыль.</h2>
                                    <div class="cta-popup__center">
                                        <form class="cta-popup__form" action="/sendmail.php" id="cta-form">
                                            <input class="cta-popup__form__input" placeholder="Ваше имя" name="name" type="text" autocomplete="on" required id="cta-name">
                                            <input class="cta-popup__form__input" placeholder="Электронная почта" name="email" type="email"  autocomplete="on" required id="cta-email">
                                        </form>
                                    </div>

                                    <div class="cta-popup__form__info" id="cta-info">

                                    </div>
                                    <div class="cta-popup__form__button">
                                        <div class="cta-popup__button__blue-wrapper">
                                            <button class="cta-popup__button__blue" form="cta-data" type="submit" id="cta-submit">Заказать Мощь UX-Дизайна</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="cta-popup__success-action cta-popup__step">
                                    <h2 class="cta-popup__title">Красиво сделано.</h2>
                                    <div class="cta-popup__center">
                                        <p class="cta-popup__text">
                                            <span class="cta-popup__text__name"></span>, скоро на&nbsp;вашу почту
                                            <span class="cta-popup__text__email"></span> придёт письмо.
                                        </p>
                                    </div>
                                    <div class="cta-popup__form__button">
                                        <button class="cta-popup__button__blue close-popup">Отлично</button>
                                    </div>
                                </div>

                                <div class="cta-popup__error-action cta-popup__step">
                                    <h2 class="cta-popup__title">Данные не&nbsp;отправлены.</h2>
                                    <div class="cta-popup__center">
                                        <p class="cta-popup__text">
                                            <span class="cta-popup__text__name"></span>, к&nbsp;сожалению,
                                            произошла непредвиденная ошибка.
                                        </p>
                                    </div>
                                    <div class="cta-popup__form__button">
                                        <button class="cta-popup__button__blue repeat-popup">Попробовать снова</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-items__item phone"><a class="nav-link" href="tel:+79110201030">+7(911)020-10-30</a></li>
            <li class="nav-items__item email"><a class="nav-link" href="mailto:hello@leon.cash">hello@leon.cash</a></li>

        </ul>
    </div>
</nav>

<div class="cta-popup-overlay close-popup"></div>

<script>
    var cta = document.getElementById('cta-toggle');

    var ctaPopup = document.querySelector('.cta-popup');
    var body = document.querySelector('body');
    var ctaClose = document.querySelectorAll('.close-popup');

    function startActions(){
        document.querySelector('.cta-popup__success-action').classList.remove('show');
        document.querySelector('.cta-popup__error-action').classList.remove('show');
        document.querySelector('.cta-popup__first-action').classList.remove('hide');

        document.getElementById('cta-loader').classList.remove('show');
    }

    function clear(){
        document.getElementById('cta-name').value = '';
        document.getElementById('cta-email').value = '';
        document.getElementById('cta-info').innerHTML = '';
    }

    function FullClear(){
        setTimeout(startActions, 800);
        setTimeout(clear, 800);
    }

    function ClearAndClose(){
        body.classList.remove('cta-active');
        setTimeout(startActions, 800);
        setTimeout(clear, 800);
    }



    cta.addEventListener('click', function(){
        body.classList.toggle('cta-active');
        FullClear();

    });



    for(var i = 0; i < ctaClose.length; i++){
        ctaClose[i].addEventListener('click', function(){
            event.preventDefault();

            ClearAndClose();
        });
    }



    if(document.documentElement.clientWidth > 739){
        window.addEventListener('scroll', ClearAndClose);
    }



    /* ************ REPEAT ************** */

    var repeat = document.querySelector('.repeat-popup');

    function repeatForm(){
        setTimeout(startActions, 100);
    }

    repeat.addEventListener('click', repeatForm);









    /* *************************************************************************** */

    var form = document.getElementById('cta-form');

    var button = document.getElementById('cta-submit');
    var info = document.getElementById('cta-info');
    var input = document.querySelectorAll('.cta-popup__form__input');

    button.addEventListener('click', function () {
        event.preventDefault();
        var name = document.getElementById('cta-name').value;
        var email = document.getElementById('cta-email').value;


        if(!name && !email){
            info.innerHTML = 'Введите ваше имя и&nbsp;электронную почту.';
        } else if(!name){
            info.innerHTML = 'Введите своё имя.';
        } else if(!email){
            info.innerHTML = 'Введите действующий адрес электронной&nbsp;почты.';
        }


        function validate(e) {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if(reg.test(e) == false) {
                info.innerHTML = 'Введите действующий адрес электронной&nbsp;почты.';
                return false;
            }
        }

        if(name && email){
            validate(email);
        }


        if(info.innerHTML == ''){

            var textName = document.querySelectorAll('.cta-popup__text__name');

            var textEmail = document.querySelectorAll('.cta-popup__text__email');

            for(var i = 0; i < textName.length; i++){
                textName[i].innerHTML = name;
            }

            for(var i = 0; i < textEmail.length; i++){
                textEmail[i].innerHTML = email;
            }

            document.querySelector('.cta-popup__first-action').classList.add('hide');
            document.querySelector('.cta-popup__load-action').classList.add('show');
            //console.log('Name: ' + name + ', Email: ' + email );

            var body = "name=" + name + "&email=" + email;

            var request = new XMLHttpRequest();
            function reqReadyStateChange() {
                if (request.readyState == 4 && request.status == 200){
                    //document.getElementById("output").innerHTML=request.responseText;


                    function results(){
                        document.querySelector('.cta-popup__load-action').classList.remove('show');

                        if(request.responseText){
                            document.querySelector('.cta-popup__error-action').classList.add('show');
                        } else {
                            document.querySelector('.cta-popup__success-action').classList.add('show');
                        }
                    }

                    setTimeout(results, 200);

                    console.log(request.responseText);
                }

            }

            request.open("POST", "../contact.php");
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            request.onreadystatechange = reqReadyStateChange;
            request.send(body);
        }


    });


    for(i = 0; i < input.length; i++){
        input[i].addEventListener('focus', function () {

            info.innerHTML = '';
        });
    }



</script>