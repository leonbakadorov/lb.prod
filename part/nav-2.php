<style>
    #navigation-state {
        display: none;
    }

    .navigation{
        display: block;
        width: 100%;
        min-width: 320px;
        overflow: hidden;
        height: 48px;
        position: fixed;
        top: 0;
        z-index: 9999999;
        --cubic: cubic-bezier(0.77, 0, 0.175, 1);
        transition: height .3s var(--cubic) .1s, background .5s ease-out .1s, box-shadow .4s ease-out, -webkit-backdrop-filter .4s ease-out, backdrop-filter .4s ease-out;

        background: rgba(0,0,0,.72);
        box-shadow: 0 0.5px 0 rgba(235,235,245,0.05);
        backdrop-filter: blur(34px) saturate(140%);
        -webkit-backdrop-filter: blur(34px) saturate(140%);

    }
    .navigation.gallery {
        background: rgba(0,0,0,.01);
        transition: background .2s ease-out 0s;
    }
    .navigation.brilliant {
        background: rgba(0,0,0,.01);
        box-shadow: 0 0.5px 0 rgba(235,235,245,.2);
        backdrop-filter: blur(34px) saturate(180%);
        -webkit-backdrop-filter: blur(34px) saturate(180%);
    }
    .navigation-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 48px;

        z-index: 1;
    }
    .navigation-header{
        text-align: center;
        position: relative;
        z-index: 50;
    }
    .navigation-item{
        display: inline-block;
        position: absolute;
        top: 0;
        height: 48px;
        z-index: 10;
    }
    .navigation-item.left{
        left: 0;
    }
    .navigation-item.center{
        left: 50%;
        transform: translateX(-50%);
    }
    .navigation-item.right{
        right: 0;
    }



    .navigation-item-link{
        height: 48px;
        position: relative;
        z-index: 1;
        display: inline-block;
        box-sizing: content-box;
        background-repeat: no-repeat;
        background-position: center center;
        text-decoration: none;
        white-space: nowrap;
        -webkit-transition: opacity 0.3s cubic-bezier(0.25, 0.1, 0.25, 1);
        transition: opacity 0.3s cubic-bezier(0.25, 0.1, 0.25, 1);
        -webkit-tap-highlight-color: transparent;
        outline-offset: -7px;
    }
    .navigation-item-link.leonbakadorov {
        background-image: url(/css/nav/leonbakadorov-small.svg);
        background-size: 232px 48px;
        width: 232px;
    }
    .navigation-item-link.lb {

        background-image: url(/css/nav/lb-small.svg);
        background-size: 48px 48px;
        width: 48px;
    }
    .navigation-text {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
        clip-path: inset(0px 0px 99.9% 99.9%);
        overflow: hidden;
        height: 1px;
        width: 1px;
        padding: 0;
        border: 0;
        top: 50%;
    }



    /* *********************************************** */
    .navigation-menu{
        width: 48px;
        height: 48px;
        position: relative;
        display: block;
        -webkit-tap-highlight-color: transparent;
        z-index: 20;
        cursor: pointer;
    }
    .menu-container {
        position: absolute;
        width: 30px;
        height: 30px;
        top: 9px;
        left: 9px;
        transition: transform .2806s cubic-bezier(0.04, 0.04, 0.12, 0.96) .05s;
    }
    .menu-line{
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: transform .2806s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1s;
    }
    .menu-line-item{
        display: block;
        position: absolute;
        width: 17px;
        height: 1px;
        border-radius: 0.5px;
        background: #fff;
        z-index: 1;
        left: 7px;

        transition: transform .2806s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1s;
    }
    .menu-line-top, .menu-line-bottom{

    }
    .menu-line-item-top{
        top: 11px;
    }
    .menu-line-item-bottom{
        bottom: 11px;
    }

    #navigation-state:checked ~ .navigation {
        height: 100%;
        background: rgba(0,0,0,1);
        transition: height .5s var(--cubic) .1s, background .3s ease-out .0s, backdrop-filter 0s .3s;
    }

    #navigation-state:checked ~ .navigation .menu-container {
        transition: transform .3806s cubic-bezier(0.04, 0.04, 0.12, 0.96) .1s;
    }
    #navigation-state:checked ~ .navigation .menu-line {
        transition: transform .3806s cubic-bezier(0.04, 0.04, 0.12, 0.96) .37s;
    }
    #navigation-state:checked ~ .navigation .menu-line-item {
        transition: transform .3806s cubic-bezier(0.04, 0.04, 0.12, 0.96) .37s;
    }

    #navigation-state:checked ~ .navigation .menu-container{
        transform: rotate(90deg);
    }
    #navigation-state:checked ~ .navigation .menu-line-top{
        transform: rotate(45deg);
    }
    #navigation-state:checked ~ .navigation .menu-line-item-top{
        transform: translateY(3px);
    }
    #navigation-state:checked ~ .navigation .menu-line-bottom {
        transform: rotate(-45deg);
    }
    #navigation-state:checked ~ .navigation .menu-line-item-bottom{
        transform: translateY(-3px);
    }





    .navigation-list{
        padding: 4px 48px 8px;
        max-width: 664px;
        margin: 0 auto;
        z-index: 20;
        overflow-y: auto;
        position: absolute;
        top: 48px;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .navigation-list-item{
        height: 43px;
        opacity: 0;
        transform: scale(1.15) translateY(-30px);
        transition: transform 0.5s cubic-bezier(0.4, 0.01, 0.165, 0.99), opacity 0.5s cubic-bezier(0.4, 0.01, 0.165, 0.99);
    }


    #navigation-state:checked ~ .navigation .navigation-list-item {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    .navigation-list-item:last-child{
        border-bottom: none;
    }
    /*.navigation-list-item:nth-child(1) {
        transition-delay: 0.56s;
    }
    .navigation-list-item:nth-child(2) {
        transition-delay: 0.49s;
    }
    .navigation-list-item:nth-child(3) {
        transition-delay: 0.42s;
    }
    .navigation-list-item:nth-child(4) {
        transition-delay: 0.35s;
    }
    .navigation-list-item:nth-child(5) {
        transition-delay: 0.28s;
    }
    .navigation-list-item:nth-child(6) {
        transition-delay: 0.21s;
    }
    .navigation-list-item:nth-child(7) {
        transition-delay: 0.14s;
    }
    .navigation-list-item:nth-child(8) {
        transition-delay: 0.07s;
    }*/



    /*#navigation-state:checked ~ .navigation .navigation-list-item:first-child {
        transition-delay: 0.2s;
    }
    #navigation-state:checked ~ .navigation .navigation-list-item:nth-child(2) {
        transition-delay: 0.27s;
    }
    #navigation-state:checked ~ .navigation .navigation-list-item:nth-child(3) {
        transition-delay: 0.34s;
    }
    #navigation-state:checked ~ .navigation .navigation-list-item:nth-child(4) {
        transition-delay: 0.41s;
    }
    #navigation-state:checked ~ .navigation .navigation-list-item:nth-child(5) {
        transition-delay: 0.48s;
    }
    #navigation-state:checked ~ .navigation .navigation-list-item:nth-child(6) {
        transition-delay: 0.55s;
    }
    #navigation-state:checked ~ .navigation .navigation-list-item:nth-child(7) {
        transition-delay: 0.62s;
    }
    #navigation-state:checked ~ .navigation .navigation-list-item:nth-child(8) {
        transition-delay: 0.69s;
    }*/



    /*.navigation-list-header{
        user-select: none;
        color: rgba(235,235,245,1);
        font-family: "Pro Display", Helvetica, sans-serif;
        font-weight: 700;
        !*letter-spacing: .01em;*!
        text-decoration: none;
        font-size: 17px;
        line-height: 1.4;
        margin-bottom: 11px;
        opacity: 0;
        transition: opacity .5s ease-out;
    }*/
    .navigation-list-link, .navigation-list-header{
        display: block;
        line-height: 44px;
        align-items: center;
        height: 100%;
        width: auto;
        font-family: "Pro Text", Helvetica, sans-serif;
        font-size: 17px;
        letter-spacing: -.022em;
        font-weight: 400;
        opacity: 1;
        transition: opacity .3s ease-out, transform .3s ease-out;
        -webkit-tap-highlight-color: transparent;
        text-decoration: none;
        white-space: nowrap;
        outline-offset: 0;
        background-position: left center;
        background-repeat: no-repeat;
    }
    .navigation-list-link.text-hover-motion{
        transition: opacity .3s ease-out, transform .3s ease-out;
    }
    .navigation-list-header{
        opacity: 1;

    }
    .navigation-list-link:hover{
        opacity: 1;
    }


    @media only screen and (min-width: 1065px) {
        #navigation-state:checked ~ .navigation {
            backdrop-filter: none;
        }
        .navigation-item.left {
            left: 19px;
        }
        .navigation-item.right {
            right: 19px;
        }
        .navigation-list{
            max-width: 100%;
        }
        .navigation-list-item{
            max-width: 400px;
            border: none;
        }
        .navigation-list-header{
            font-size: 19px;
        }

    }





    :root{
        --icon-left: 45px;
    }
    .navigation-list-link{
        position: relative;
        background-position: var(--icon-left) center;
    }


    .navigation{
        -webkit-user-select: none;
        user-select: none;
    }
    @media only screen and (max-width: 735px){

        .navigation-list {
            padding: 4px 40px 8px;
        }
        .navigation-list-link:after {
            content: '';
            position: absolute;
            width: 100%;
            height: .5px;
            background: rgba(235,235,245,.24);
            left: var(--icon-left);
            bottom: 0;
        }
        .navigation-list-item:last-child .navigation-list-link:after {
            display: none;
        }
    }



    /*.navigation-list-link:before{
        content: '';
        display: inline-block;
        width: 30px;
        height: 30px;
        background-size: 100% 100%;
        position: relative;
        top: 6px;
    }*/

    @media (max-width: 735px){
        .navigation-list-item.dir:after {
            content: '';
            position: absolute;
            width: 100%;
            height: .5px;
            background: rgba(235,235,245,.24);
            left: 0;
            bottom: 0;
        }
        .navigation-list-item.dir:last-child:after {
            display: none;
        }
    }


    .navigation-list-item.dir .navigation-list-link:after {
        display: none;
    }



    .navigation-list-item.dir .navigation-list-link {
        background-position: left center;
    }
    .navigation-list-item.dir .navigation-list-link {
        opacity: .8;
    }

    .navigation-list-item.dir .navigation-list-link.active, .navigation-list-item.dir .navigation-list-link:hover {
        opacity: 1;
    }

    .navigation-list-item.margin-contact {
        margin-bottom: 16px;
    }


    .navigation-list-link {
        background: none;
    }

    @media (min-width: 1065px) {
        .navigation-list-link {
            display: inline-block;
        }

        .navigation, .navigation-item, .navigation-item-link {
            height: 44px;
        }
        .navigation-menu {
            width: 44px;
            height: 44px;
        }
        .menu-container {
            top: 7px;
            left: 7px;
        }
        .navigation-item-link.leonbakadorov {
            background-image: url(/css/nav/leonbakadorov-large.svg);
            background-size: 212px 44px;
            width: 212px;
        }
        .navigation-item-link.lb {

            background-image: url(/css/nav/lb-large.svg);
            background-size: 44px 44px;
            width: 44px;
        }
    }

    .navigation-link-text{
        /*position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
        clip-path: inset(0px 0px 99.9% 99.9%);
        overflow: hidden;
        height: 1px;
        width: 1px;
        padding: 0;
        border: 0;
        top: 50%;*/

        transition: opacity 200ms ease;
        display: inline-block;
        position: relative;
        color: #fff;
        font-family: "Pro Text", sans-serif;
        font-weight: 400;
        letter-spacing: -.02em;
        text-decoration: none;
        font-size: 17px;
        line-height: 44px;
        width: 100%;
    }



</style>
<input type="checkbox" id="navigation-state" aria-hidden="true" >
<nav class="navigation">
    <ul class="navigation-header">
        <li class="navigation-item left">
            <label class="navigation-menu" for="navigation-state">
                <div class="menu-container">
                    <span class="menu-line menu-line-top">
                        <span class="menu-line-item menu-line-item-top"></span>
                    </span>
                    <span class="menu-line menu-line-bottom">
                        <span class="menu-line-item menu-line-item-bottom"></span>
                    </span>
                </div>
            </label>
        </li>
        <li class="navigation-item center">
            <a class="navigation-item-link leonbakadorov" href="/">
                <span class="navigation-text">Леон Бакадоров, Leon Bakadorov</span>
            </a>
        </li>
        <li class="navigation-item right">
            <a class="navigation-item-link lb" href="/" onclick="javascript:void(0)">
                <span class="navigation-text">ЛБ, LB</span>
            </a>
        </li>
    </ul>

<?global $URL;?>


    <style>

    <?
    $links = [
        'Call' => 'tel:+79110201030',
        'Email' => 'mailto:leonbakadorov@gmail.com?subject=Заказать разработку&body=Здравствуйте! Хотим заказать у вас:',
        'Instagram' => 'https://www.instagram.com/leonbakadorov/',
        'Twitter' => 'https://www.twitter.com/leonbakadorov',
        'Behance' => 'https://www.behance.net/leonbakadorov',
        'VK' => 'https://www.vk.com/leonbakadorov',
        'Telegram' => 'https://t.me/leonbakadorov',
    ];

    $list = 7; $time = 0.05;

    $d = 0.2; for($i = 1; $i < $list + 1; $i++) {
        echo '
        #navigation-state:checked ~ .navigation .navigation-list-item:nth-child('.$i.') {
        transition-delay: '.$d.'s;
        }';
        $d = $d + $time;
    } ?>

        <? $d = $time; for($i = $list; $i > 0; $i--) {
        echo '
        .navigation-list-item:nth-child('.$i.') {
        transition-delay: '.$d.'s;
        }';
        $d = $d + $time;
    } ?>
    </style>


    <ul class="navigation-list">

        <? foreach($links as $key => $value) {?>
        <li class="navigation-list-item dir">
            <a class="navigation-list-link text-hover-motion " href="<?= $value?>" target="_blank">
                <span class="navigation-link-text"><?= $key; ?></span>
            </a>
        </li>

        <?}?>

    </ul>
    <!--<div class="navigation-background"></div>-->
</nav>

<script>

    /*window.addEventListener('scroll', function () {
        if(window.pageYOffset > 0){
            document.querySelector('.navigation').classList.add('brilliant');
        } else {
            document.querySelector('.navigation').classList.remove('brilliant');
        }
    });*/


    var textHoverMotion = document.querySelectorAll('.text-hover-motion');

    textHoverMotion.forEach(function(e){

        function touchMove(e, event){
            let mouseCoord = {
                x: event.offsetX,
                y: event.offsetY
            };

            let cardWidth = e.clientWidth,
                cardHeight = e.clientHeight;

            mouseCoord.x = mouseCoord.x < 0 ? 0 : mouseCoord.x;
            mouseCoord.x = mouseCoord.x > cardWidth ? cardWidth : mouseCoord.x;
            mouseCoord.y = mouseCoord.y < 0 ? 0 : mouseCoord.y;
            mouseCoord.y = mouseCoord.y > cardHeight ? cardHeight : mouseCoord.y;

            //----------------------------------

            let transformCard = "scale3d(1.05, 1.05, 1.05) perspective(700px)";
            transformCard += " ";
            //rotateX between -9 and +9
            transformCard += "rotateX(" + ( ( ( (mouseCoord.y / cardHeight) * 18 ) - 9 )) + "deg)";
            transformCard += " ";
            //rotateY between -13 and +13
            transformCard += "rotateY(" + ( ( ( (mouseCoord.x / cardWidth) * 26 ) - 13 ) * -1 ) + "deg)";

            transformCard += " ";
            //translateX between -3 and +3
            transformCard += "translateX(" + ( ( (mouseCoord.x / cardWidth) * 6 ) - 3 ) + "px)";
            transformCard += " ";
            //translateY between -5 and +5
            transformCard += "translateY(" + ( ( (mouseCoord.y / cardHeight) * 10 ) - 5 ) + "px)";

            e.style.transform = transformCard;

        }

        function touchMoveEnd(e, event){
            e.style.transform = " scale3d(1, 1, 1)";
        }

        e.addEventListener('mousemove', function(event){

            e.classList.add('focus');
            if(document.documentElement.clientWidth > 735){
                touchMove(e, event);
            }

            e.addEventListener('mouseleave', function(event) {
                e.classList.remove('focus');
                if(document.documentElement.clientWidth > 735){
                    touchMoveEnd(e, event);
                }

            });
        });



        e.addEventListener('touchstart', function(event){
            e.classList.add('focus');

        });
        e.addEventListener('touchend', function(event) {
            e.classList.remove('focus');
        });

    });
</script>