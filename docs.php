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
                                                el::div('id="gettingstarted"',[
                                                    el::divi('id="getStarted"', [
                                                        'Get Started',
                                                    ]),
                                                    el::divi('id="introbox"', [
                                                        el::p('', 'Welcome to the Yolk PHP documentation!'),
                                                        el::p('', 'This documentation is intended to help you get started with the Yolk PHP framework.'),
                                                        el::p('', 'If you have any questions, please feel free to contact us at'),
                                                        el::a('t4', '', 'yolk@gmail.com'),
                                                    ]),
                                                    el::divi('id="pcont"', [
                                                        el::h4('', ['System Requirements']),
                                                        el::ul('id="ul"', [
                                                            el::li('', ['PHP 7.2+']),
                                                            el::li('', ['Xampp or Wamp']),
                                                            el::li('', ['Mysql']),
                                                            el::li('', ['MacOS, Windows  and Linux are supported']),
                                                        ]),
    
                                                        el::h3('', ['Automatic Setup']),
    
                                                        CodeBox('js', 'composor install yolk'),
    
                                                        el::h3('', ['Manual Setup']),
                                                        el::p('', [
                                                            'Visit ',
                                                            el::a('http://www.phpyolk.com/downloads', '', 'phpyolk.com/downloads '),
                                                            ' and download the latest version of php yolk. Unzip the files and put all inisde your server root directory ',
                                                        ]),
                                                        el::p('',[
                                                            'After exporting the files to your root directory you can create your new website by ceating new php files in the root directory  <strong>eg: main.php .</strong> as show below ',
                                                            el::image('yolkassets/img/mm.png'),

                                                        ]),
                                                        el::p('',[
                                                            'so to route the page you have created, open the <strong>engine.php</strong> files which comes with yolk and give your page a short url  eg: i want to route main.php as index page so is shown in the picture below',
                                                            el::image('yolkassets/img/mr.png'),    
                                                        ]),
                                                        el::p('',[
                                                            'To navigate this page you can type your website address and the <strong>main.php</strong> page will run '
                                                        ])
                                                    ]),
                                                ]),
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
