<div class="luxe">

    <style>

        .luxe-container {
            display: block;
            background: linear-gradient(#0E0E0E 66%, #FFFFFF 66%);
            position: relative;
        }
        .luxe-image {
            width: 100%;
            position: relative;
            z-index: 1000;
            vertical-align: middle;
        }
        [data-luxe-image] {
            position: relative;
            display: block;
            width: 100%;
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center center;
        }
        [data-luxe-image]:before, [data-luxe-image]:after {
            content: '';
            position: absolute;
            z-index: 2000;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center center;
        }
        [data-luxe-image]:before {
            z-index: 1000;
        }


    </style>
    <div class="luxe-container">
        <?

        $width = 1440;
        $precision = 8;
        $images = [
            0 => round($width / 889, $precision),
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

                    [data-luxe-image="<?= $key; ?>"]:before {
                        background-image: url(/luxe/luxe-<?= $key; ?>_small.jpg);
                    }
                    @media (min-width: 765px) {
                        [data-luxe-image="<?= $key; ?>"]:before {
                            background-image: url(/luxe/luxe-<?= $key; ?>_large.jpg);
                        }
                    }


                    [data-luxe-image="<?= $key; ?>"]:after {
                        background-image: url(/luxe/luxe-<?= $key; ?>-top.svg);
                    }
                </style>
            <div data-luxe-image="<?= $key; ?>"></div>

        <?}?>
    </div>
</div>