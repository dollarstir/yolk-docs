<?php

// var_dump(import());

// Developed by Frederick Ennin (Dollarstir)
require 'components/header.php';

YolkUI::run(new Wrapper(
    el::html(
        'lang="en"',
        [
            el::head(
                [
                    meta::charset(),
                    meta::browser(),
                    meta::viewport(),
                    el::title('Yolk Framework'),

                    import('favicon'),
                    Yolk::uicore('corecss'),
                    import('css'),
                    import('php'),
                ]
            ),
            el::body(
                [
                    topbar(1),
                    el::div('class="tb"', [
                        el::div('class="tbleft" data-aos="flip-left" data-aos-easing="ease-out-cubic"  data-aos-duration="2000"', [
                            el::div('class="twrap"', [
                                el::h1('class="btitle"', 'Php Yolk'),
                                el::h2('class="bsubtitle"', 'State of Art Framework'),
                            ]),
                        ]),
                        el::div('class="tbright"', [
                            el::image('yolkassets/img/code.png', 'class="mig" data-aos="fade-down-left" data-aos-duration="1500"'),
                        ]),
                    ]),
                    Yolk::uicore('corejs'),
                    import('js'),
                ]
            ),
        ]
    )
));
