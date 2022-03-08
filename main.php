<?php

require 'components/header.php';

YolkUI::run(new Wrapper(
    el::html(
        'lang="en"',
        [
            el::head(
                [
                    meta::charset(),
                    meta::author('Frederick Ennin'),
                    meta::description('Php Yolk is lightweight php framework that comes with almost all database queries , custom UI, custom ajax to handle request , php codes to process all request from the ajax '),
                    meta::keywords('Php,Framework,Lightweight,Best,programming,developers,who,what,which'),
                    meta::browser(),
                    meta::viewport(),
                    el::title('Yolk Framework'),

                    import('favicon'),
                    Yolk::uicore('corecss'),
                    import('css'),
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
