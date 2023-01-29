
<style>
    .ux-section{
        width: 100%;
        position: relative;
        overflow: hidden;
        background: #000;
        padding: 130px 0;
    }
    .ux-section__container{
        width: 100%;
        margin: 0 auto;
        max-width: 1600px;
        position: relative;
        overflow: hidden;
        background: #000;
        padding: 0 40px;
        box-sizing: border-box;
    }
    .ux-section__header{
        max-width: 1130px;
        margin: 0 auto;
        margin-bottom: 32px;
        font-size: 74px;
        line-height: 1.2;
        font-weight: 600;
        font-family: "SF Pro Display";
        /*text-align: center;*/
        color: #fff;
    }
    .ux-section__caption{
        font-size: 13px;
        text-transform: uppercase;
        line-height: 1.2;
        font-weight: 700;
        font-family: "SF Pro Text";
        color: #fff;
        margin-bottom: 21px;
    }
    .ux-section__typography{
        max-width: 1400px;
        margin-bottom: 80px;
        font-size: 46px;
        line-height: 1.16667;
        font-weight: 600;
        font-family: "SF Pro Display";
        /*text-align: center;*/
        color: rgba(255,255,255,.7);
    }
    .ux-section__typography-copy{
        font-weight: 700;
        color: rgba(255,255,255,1);
    }
    .ux-section__image{
        position: relative;
        margin: 0 auto;
        width: 100%;
        max-width: 860px;
        /*background-size: auto 100%;
        background-repeat: no-repeat;
        background-image: url(/img/ux.svg);
        background-position: center center;*/
    }


    .ux-section__image svg{
        width: 100%;
        height: auto;
    }
    @media only screen and (max-width: 900px){
        .ux-section__typography__br{
            display: none;
        }
    }
    @media only screen and (max-width: 739px){
        .ux-section{
            padding: 80px 0;
        }
        .ux-section__intro {
            padding: 0 4%;
        }
        .ux-section__container{
            max-width: calc(414px + (3.25% * 2));
            padding: 0 3.25%;
        }
        .ux-section__header {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .ux-section__typography{
            font-size: 22px;
            margin-bottom: 64px;
        }
        .ux-section__typography__br{
            display: none;
        }
    }




    /* ****************************************************************************************** */

    .ux-section__scope{
        overflow: hidden;
        padding: 80px 0 130px;
    }
    .ux-section__scope-item{
        width: 25%;
        float: left;
    }
    .ux-section__scope-item__icon{
        margin-top: 80px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        margin-bottom: 7px;
        width: 104px;
        height: 104px;

    }
    .ux-section__scope-item__icon svg{
        position: relative;
    }
    .ux-section__scope-item__title{
        font-family: "SF Pro Display", Helvetica, sans-serif;
        letter-spacing: .02em;
        font-size: 19px;
        font-weight: 700;
        text-align: center;
        line-height: 1.3;
        max-width: 256px;
        margin: 0 auto;
    }

    @media only screen and (max-width: 1220px){
        .ux-section__scope{
            padding: 60px 0 60px;
        }
        .ux-section__scope-item{
            width: 50%;
        }
    }


    @media only screen and (max-width: 739px){
        .ux-section__scope{
            padding: 0 0 32px;
        }
        .ux-section__scope-item{
            width: 100%;
        }
    }



</style>

<section class="ux-section">
    <div class="ux-section__container">
        <div class="ux-section__intro"><h3 class="ux-section__caption">Компетенции</h3>
            <p class="ux-section__typography"><span class="ux-section__typography-copy">Небольшой выбор безграничных возможностей.</span>
                Леон — структурированный концептуальный мыслитель с&nbsp;графическим фоном и&nbsp;глубоким
                техническим пониманием. Он&nbsp;работает с&nbsp;цифровыми концепциями, уделяя особое внимание
                взаимодействию
                с&nbsp;пользователем на&nbsp;всех цифровых платформах.
            </p></div>
        <figure class="ux-section__image">
            <?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/ux.svg');?>
        </figure>

        <? //include 'scope.php'; ?>
    </div>
</section>

