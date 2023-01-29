<style>
    footer.footer{
        width: 100%;
        background: rgba(16,16,16, 1);
        font-size: 12px;
        font-family: "Pro Text";
        font-weight: 500;
        color: #fff;
    }


    .footer__container{
        width: 100%;
        max-width: 1600px;
        padding: 20px 40px 20px;
        margin: 0 auto;
    }
    .footer__description{
        padding-bottom: 12px;
        margin-bottom: 12px;
        position: relative;
        color: rgba(255,255,255, .5);
    }
    .footer__description:after{
        content: '';
        display: block;
        position: absolute;
        width: 100%;
        height: 1px;
        left: 0;
        bottom: 0;
        background: #fff;
        opacity: .2;
    }
    .footer__description__link{
        display: inline-block;
        color: #2997FF;
        opacity: 1;
    }
    .footer__copyright-text{
        display: block;
        width: 100%;
        opacity: .5;
        line-height: 150%;
        margin-bottom: 5px;
    }
    .footer__copyright-text-right{
        float: right;
    }
    .footer__copyright__link{
        margin-right: 7px;
        padding-right: 10px;
        display: inline-block;
        margin-top: 5px;
        position: relative;
        opacity: .84;
    }
    .footer__copyright__link:hover{
        text-decoration: underline;
    }
    .footer__copyright__link:after{
        content: '';
        display: block;
        height: 100%;
        width: 1px;
        background: #fff;
        opacity: .2;
        position: absolute;
        top: 0;
        right: 0;
    }
    .footer__copyright__link:last-child:after{
        display: none;
    }

    @media only screen and (max-width: 739px){
        .footer__container {
            max-width: 414px;
            padding: 24px 16px calc(24px + env(safe-area-inset-bottom));
        }
        .footer__description {
            padding-bottom: 16px;
            margin-bottom: 16px;
        }
        .footer__copyright-text{
            margin-bottom: 8px;
        }
        .footer__copyright__link {
            margin-top: 3px;
        }
        .footer__copyright-text-right{
            display: none;
        }
    }
    /*@media only screen and (prefers-color-scheme: light){
        .footer{
            background: #f5f5f7;
        }
        .footer__description{
            color: rgba(0,0,0, .5);
        }
        .footer__description:after{
            background: #000;
        }
        .footer__copyright__link:after {
            background: #000;
        }
    }*/
</style>


<footer class="footer">
    <div class="footer__container">
        <div class="footer__description">
            *Интересующую вас информацию уточняйте по телефону
            <a class="footer__description__link" href="tel:+79110201030">8-911-020-10-30</a> или электронной почте <a class="footer__description__link" href="mailto:leonbakadorov@gmail.com">leonbakadorov@gmail.com</a>
        </div>
        <div class="footer__copyright">
            <p class="footer__copyright-text">Copyright © Leon Bakadorov, <?php echo date('Y'); ?>&nbsp;г. Все&nbsp;права&nbsp;защищены.
                <span class="footer__copyright-text-right">love.leon.cash</span></p>
            <!--<a class="footer__copyright__link" href="#">Политика конфиденциальности</a>
            <a class="footer__copyright__link" href="#">Использование cookies</a>
            <a class="footer__copyright__link" href="#">Условия использования</a>-->
        </div>
    </div>

</footer>































