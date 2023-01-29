<style>
    .nav{
        background: #141414;
        overflow: hidden;
        padding: calc(20px + 44px) 0 12px 0;
        position: relative;
        text-align: center;
        width: 100%;
        height: 156px;
        z-index: 9987;
    }
    @media (max-width: 1065px) {
        .nav{
            padding: calc(20px + 48px) 0 12px 0;
            height: 160px;
        }
    }

    #nav-footer > .nav{
        background: transparent;
    }

    .nav:last-child{
        background: transparent;
    }

    .nav a:hover{
        text-decoration: none;
    }

    .nav-wrapper {
        position: relative;
        height: 100%;
        z-index: 1;
    }

    .nav-items {
        max-width: 1024px;
        list-style: none;
        margin: 0 auto;
        overflow-x: auto;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 50px;
        white-space: nowrap;

        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;

    }

    .nav-item {
        display: inline-block;
        vertical-align: top;
        margin: 0 -.11765em;
        padding: 0 22px;
    }

    /*@media only screen and (min-width: 542px){
        .nav-item.nav-item-litsled{
            padding: 0 48px;
        }
    }*/



    .nav-item:first-child{
        padding: 0 22px 0 44px;
    }

    .nav-item:last-child{
        padding: 0 44px 0 22px;
    }

    @media only screen and (max-width: 735px){
        .nav-item:first-child{
            padding: 0 22px 0 34px;
        }

        .nav-item:last-child{
            padding: 0 22px 0 22px;
        }
    }

    .nav-link {
        display: block;
        margin-top: 0px;
        padding: 0;
        position: relative;
        z-index: 1;

    }
    .nav-link:hover .nav-label{
        color: #6bf;
    }

    .nav-label {
        font-size: 11px;
        line-height: 1.09091;
        font-weight: 400;
        letter-spacing: .005em;
        font-family: "SF Pro Text","Helvetica Neue","Helvetica","Arial",sans-serif;
        display: block;
        margin: 0;
        color:#fff;

    }

    .nav-new {
        font-size: 9px;
        line-height: 1.22226;
        font-weight: 400;
        letter-spacing: .017em;
        font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue","Helvetica","Arial",sans-serif;
        color: #e85d00;
        display: block;
        position: absolute;
        top: 100%;
        margin-top: 4px;
        left: 0;
        width: 100%;
    }


    .nav-icon {
        background: center bottom no-repeat;
        display: block;
        margin: 0 auto 10px;
        height: 42px;
    }

    .nav-item-patek .nav-icon {
        background-size: 32px 32px;
        background-repeat: no-repeat;
        background-image: url(logos/patek.svg);
        width: 32px;
    }

    .nav-item-kareliadsp .nav-icon {
        background-size: 38px 20px;
        background-repeat: no-repeat;
        background-image: url(logos/kareliadsp.svg);
        width: 38px;
    }

    .nav-item-friendwork .nav-icon {
        background-size: 30px 30px;
        background-repeat: no-repeat;
        background-image: url(logos/friendwork.svg);
        width: 30px;
    }

    .nav-item-bugatti .nav-icon {
        background-size: 62px 30px;
        background-repeat: no-repeat;
        background-image: url(logos/bugatti.svg);
        width: 62px;
    }

    .nav-item-quon .nav-icon {
        background-size: 68px 16px;
        background-repeat: no-repeat;
        background-image: url(logos/quon.svg);
        width: 68px;
    }

    .nav-item-litsled .nav-icon {
        background-size: 21px 40px;
        background-repeat: no-repeat;
        background-image: url(logos/litsled.svg);
        width: 21px;


    }

    .nav-item-icq .nav-icon {
        background-size: 30px 32px;
        background-repeat: no-repeat;
        background-image: url(logos/icq.svg);
        width: 30px;
    }
</style>






<nav id="brands" class="nav">

    <div class="nav-wrapper">

        <ul class="nav-items">

            <li class="nav-item nav-item-patek">
                <a class="nav-link" href="#patek">
                    <figure class="nav-icon"></figure>
                    <span class="nav-label">Patek Philippe</span>
                    <span class="nav-new">Новый</span>
                </a>
            </li>

            <li class="nav-item nav-item-kareliadsp">
                <a class="nav-link" href="#kareliadsp">
                    <figure class="nav-icon"></figure>
                    <span class="nav-label">Karelia DSP</span>
                </a>
            </li>

            <li class="nav-item nav-item-bugatti">
                <a class="nav-link" href="#bugatti">
                    <figure class="nav-icon"></figure>
                    <span class="nav-label">Bugatti</span>
                </a>
            </li>

            <li class="nav-item nav-item-friendwork">
                <a class="nav-link" href="#friendwork">
                    <figure class="nav-icon"></figure>
                    <span class="nav-label">FriendWork</span>
                </a>
            </li>




            <li class="nav-item nav-item-quon">
                <a class="nav-link" href="#quon">
                    <figure class="nav-icon"></figure>
                    <span class="nav-label">Quon</span>
                </a>
            </li>

            <!--<li class="nav-item nav-item-litsled">
                <a class="nav-link" href="#litsled">
                    <figure class="nav-icon"></figure>
                    <span class="nav-label">Litsled</span>
                </a>
            </li>-->

            <li class="nav-item nav-item-icq">
                <a class="nav-link" href="#icq">
                    <figure class="nav-icon"></figure>
                    <span class="nav-label">Icq</span>
                </a>
            </li>

        </ul>

    </div>
</nav>