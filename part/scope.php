<div class="ux-section__scope">

    <?
    $scopes = [
        [
            'icon' => 'lifetime',
            'title' => 'Умножение показателей LTV и&nbsp;ROI.',
            'color' => 'F71B53'
        ],
        [
            'icon' => 'competitive',
            'title' => 'Конкурентный и&nbsp;сравнительный анализ.',
            'color' => 'FC3E39'
        ],
        [
            'icon' => 'hypotheses',
            'title' => 'Определение и&nbsp;тестирование гипотез.',
            'color' => 'FD9526'

        ],
        [
            'icon' => 'prototypes',
            'title' => 'Каркасы и&nbsp;интерактивные прототипы.',
            'color' => '25DC76'
        ],
        [
            'icon' => 'communications',
            'title' => 'Коммуникация и&nbsp;координация сторон.',
            'color' => '2AF5E9'
        ],
        [
            'icon' => 'cjm',
            'title' => 'Карты пользовательских путешествий.',
            'color' => '60C9F8'
        ],
        [
            'icon' => 'metrics',
            'title' => 'Контроль и&nbsp;аналитика метрик.',
            'color' => '2B97F7'
        ],
        [
            'icon' => 'users',
            'title' => 'Сбор и&nbsp;анализ пользовательских данных.',
            'color' => '797EFC'
        ],

    ];
    ?>



    <? foreach($scopes as $item){?>
        <div class="ux-section__scope-item">
            <figure class="ux-section__scope-item__icon"><?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/scope/'.$item['icon'].'.svg');?></figure>
            <p class="ux-section__scope-item__title" style="color: <?= '#'.$item['color']?>;"><?= $item['title']; ?></p>
        </div>
    <?}?>
</div>