<div class="luxe" id="luxe">

    <style>

        .luxe-container {
            display: block;
            background: linear-gradient(#0E0E0E 66%, #FFFFFF 66%);
            position: relative;
        }
        [data-luxe-image] {
            position: relative;
            display: block;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top left;
        }
        [data-luxe-image]:after {
            z-index: 2000;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: transparent;
        }

    </style>
    <div class="luxe-container">
        <?

        $width = 1440;
        $precision = 8;
        $images = [
            0 => round($width / 888, $precision),
            1 => round($width / 3692, $precision),
            2 => round($width / 2142, $precision),
            3 => round($width / 1604, $precision),
            4 => round($width / 2094, $precision),
            5 => round($width / 1956, $precision)
        ];

        foreach($images as $key => $value) {?>
                <style>
                    [data-luxe-image="<?= $key; ?>"] {
                        height: calc(100vw / <?= $value; ?>);
                    }

                    [data-luxe-image="<?= $key; ?>"] {
                        background-image: url(/luxe/luxe-<?= $key; ?>_small.jpg);
                    }
                    [data-luxe-image="<?= $key; ?>"]:after {
                        background-image: url(/luxe/luxe-<?= $key; ?>-top.svg);
                    }
                    @media (min-width: 765px) {
                        [data-luxe-image="<?= $key; ?>"] {
                            background-image: url(/luxe/luxe-<?= $key; ?>_large.jpg);
                        }
                    }
                </style>
            <div data-luxe-image="<?= $key; ?>"></div>

        <?}?>
    </div>
</div>