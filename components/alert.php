<?php

// Developed by Frederick Ennin (Dollarstir)
require 'components/codes.php';
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
                    el::title('Documentation'),
                    import('favicon'),

                    Yolk::uicore('corecss'),
                    import('css'),
                ]
            ),

            el::body(
                [
                    topbar(2),
                    el::divi(
                        'id="mainCont"',
                        [
                            el::divi(
                                '',
                                [
                                    // el::button('id="ddo"','Submit'),

                                    Container::fluid(
                                        'id="maindiv"',
                                        [
                                            el::divi(
                                                'id="navlist"',
                                                [
                                                    el::divi('id="searchbox"', [
                                                        icons::far('search', '15', '', 'se'),
                                                        el::input('search', 'search', 'inps', '', 'placeholder="Search..."'),
                                                    ]),
                                                    el::divi('', [
                                                        // el::h4('id="doctitle"', 'Documentation'),
                                                    ]),
                                                    Navbar::sbar(),
                                                ]
                                            ),

                                            el::divi('id="contents"', [
                                                el::div('id="alerts"', [
                                                    el::divi('id="getStarted"', [
                                                        'Alerts',
                                                    ]),
                                                    el::divi('id="introbox"', [
                                                        el::p('', 'Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.'),
                                                    ]),
                                                    el::divi('id="pcont"', [
                                                        el::h3('', ['Examples of Basic Alerts']),
                                                        el::p('', 'Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.'),
                                                        alert::basic('success', 'basic success alert'),
                                                        alert::basic('primary', 'basic primary alert'),
                                                        alert::basic('secondary', 'basic secondary alert'),
                                                        alert::basic('danger', 'basic danger alert'),
                                                        alert::basic('warning', 'basic warning alert'),
                                                        alert::basic('info', 'basic info alert'),
                                                        alert::basic('dark', 'basic dark alert'),
                                                        alert::basic('light', 'basic light alert'),

                                                        el::p('', 'To use this component , first add below code inside your yolk head element just below import("favicon")'),
                                                        el::p('', [CodeBox('php', 'Yolk::uicore("corecss")')]),
                                                        el::image('yolkassets/img/al1.png'),

                                                        el::p('', 'Secondly add below code  at the far end inside the body element '),
                                                        el::p('', [CodeBox('php', 'Yolk::uicore("corejs")')]),
                                                        el::image('yolkassets/img/al2.png'),
                                                    ]),
                                                ]),

                                                // dealing with alerts

                                                // el::div('class="spacey"', []),

                                                el::div('class="spacey"', []),
                                            ]),
                                        ]
                                    ),
                                ]
                            ),
                        ]
                    ),
                    Yolk::uicore('corejs'),
                    import('js'),

                    el::script('', [
                        'var dropdown = document.getElementsByClassName("dropdown-btn");
                        var i;
                        
                        for (i = 0; i < dropdown.length; i++) {
                          dropdown[i].addEventListener("click", function() {
                          this.classList.toggle("active");
                          var dropdownContent = this.nextElementSibling;
                          if (dropdownContent.style.display === "block") {
                          dropdownContent.style.display = "none";
                          } else {
                          dropdownContent.style.display = "block";
                          }
                          });
                        }',
                    ]),
                    // el::script("src='ui/js/sweetalert2.all.min.js'"),
                    // el::script('src="yolkassets/prism.js"'),
                ]
            ),
        ]
    )
));
