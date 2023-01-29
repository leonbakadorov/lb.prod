<style>
    .product-projects{
        padding: 210px 0 190px;
        border-bottom: 1px solid #D5D5E2;
    }
    .product-projects__subheadline{
        font-size: 28px;
        font-family: "SF Pro Display";
        font-weight: 700;
        line-height: 1.3;
        text-align: center;
        margin: 0 auto 20px;
    }
    .product-projects__headline{
        font-size: 104px;
        font-family: "SF Pro Display";
        font-weight: 700;
        line-height: 1.1;
        text-align: center;
        margin: 0 auto 40px;
        letter-spacing: -.007em;
        color: #000;
    }
    .product-projects__dropdown{
        width: 280px;
        border-bottom: 1px solid #BCBCCC;
        margin: 0 auto;
        position: relative;
    }
    .product-projects__dropdown__select{
        display: block;
        width: 100%;
        font-size: 19px;
        line-height: 1.23536;
        font-weight: 500;
        letter-spacing: -.022em;
        font-family: "SF Pro Text","Helvetica Neue","Helvetica","Arial",sans-serif;
        padding: 17px 14px 17px 0;
        color: #111;
        background: transparent;
        border: 0;
        overflow: hidden;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        outline: none;
    }
    .product-projects__dropdown__arrow{
        position: absolute;
        bottom: 0;
        right: 0;
        width: 12px;
        height: 44px;
        background-size: 12px 44px;
        background-repeat: no-repeat;
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSI0NCIgZmlsbD0ibm9uZSIgdmlld0JveD0iMCAwIDEyIDQ0Ij48ZGVmcy8+PHBhdGggZmlsbD0iIzAwNzBDOSIgZD0iTTEuNSAxNEwuNDMgMTUuMmw1LjUzIDQuODIgNS41Mi00LjgyLTEuMDUtMS4yLTQuNDcgMy45TDEuNDkgMTR6Ii8+PC9zdmc+);
        background-position: center center;
    }
    @media only screen and (max-width: 1279px){
        .product-projects__headline {
            font-size: 74px;
            max-width: 850px;
        }
    }
    @media only screen and (max-width: 739px){
        .product-projects {
            padding: 88px 0 0;
            border-bottom: none;
        }
        .product-projects__subheadline {
            font-size: 22px;
            font-weight: 600;
            margin: 0 auto 8px;
            color: #888;
        }
        .product-projects__subheadline-lb{
            display: block;
        }
        .product-projects__headline {
            font-size: 32px;
            line-height: 1.2;
            letter-spacing: -.02em;
            margin: 0 auto 12px;
        }
        .product-projects__dropdown__select {
            font-size: 17px;
        }
        /*.product-projects__dropdown__arrow {
            bottom: -2px;
        }*/
    }

    .hide-project{
        display: none;
    }
</style>
<section class="body-section product-projects">
    <div class="body-section__container">
        <h3 class="product-projects__subheadline">Портфолио <span class="product-projects__subheadline-lb">Леона Бакадорова</span></h3>
        <h2 class="product-projects__headline">Для вас есть нечто интересное.</h2>
        <div class="product-projects__dropdown">
            <select class="product-projects__dropdown__select" id="projects-select">
                <optgroup label="Суперэксклюзивная разработка">
                    <option value="all" selected>Все проекты</option>
                    <option value="website">Разработка веб-сайтов</option>
                    <option value="mobile">Мобильные интерфейсы</option>
                    <option value="desktop">Настольные платформы</option>
                </optgroup>
            </select>

            <div class="product-projects__dropdown__arrow"></div>
        </div>

    </div>
</section>

<script>
    /*var select = document.getElementById('projects-select');

    function selectProject(s){
        var project = document.querySelectorAll('[data-project]');

        for(var i = 0; i < project.length; i++){
            if(project[i].getAttribute('data-project') != s){
                project[i].classList.add('hide-project');
            } else {
                project[i].classList.remove('hide-project');
            }

            if(s == 'all'){
                project[i].classList.remove('hide-project');
            }

        }
    }

    select.addEventListener('change', function(){


        selectProject(select.value);


    });*/
</script>