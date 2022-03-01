<?php

// var_dump(import());

// Developed by Frederick Ennin (Dollarstir)
require 'components/codes.php';

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
                    // Yolk::uicore('allcss'),
                    // el::linkcss('yolkassets/style.css'),
                    // el::linkcustomcss('https://fonts.googleapis.com', 'preconnect'),
                    // el::linkcustomcss('https://fonts.gstatic.com', 'preconnect'),
                    // el::linkcustomcss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', 'stylesheet'),
                    // el::linkcss('yolkassets/prism.css'),
                    import('favicon'),
                    Yolk::uicore('corecss'),
                    import('css'),
                    import('php'),
                ]
            ),

            el::body(
                [
                    el::div('class="tbar"',
                    [
                         Navbar::basiclight('', Navbar::Navbrand('home', [el::image('yolkassets/img/logo.png', 'class="logo"')]),
                         [
                            Navbar::Navactive('', ['Guide' => 'documentation']),
                            Navbar::Navbasic('', ['Component' => 'components']),
                            Navbar::Navbasic('', ['Plugins' => 'plugins']),
                            Navbar::Navbasic('', ['Community' => 'community']),
                            Navbar::Navbasic('', ['Blog' => 'blog']),
                         ]),
                    ]),
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
