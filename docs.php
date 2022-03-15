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
                                                el::div('id="gettingstarted"', [
                                                    el::divi('id="getStarted"', [
                                                        'Get Started',
                                                    ]),
                                                    el::divi('id="introbox"', [
                                                        el::p('', 'Welcome to the Yolk PHP documentation!'),
                                                        el::p('', 'This documentation is intended to help you get started with the Yolk PHP framework.'),
                                                        el::p('', [
                                                            '<strong>Note :</strong> Yolk framework  has two main Categories',
                                                            el::ul('', [
                                                                el::li('', 'Yolk UI (which deals with the frontend)'),
                                                                el::li('', 'Yolk Backend (Handles almost all database queries. <em>all comes with the framwork so you dont have to worry</em> )'),
                                                            ]),
                                                        ]),
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
                                                        el::p('', [
                                                            'After exporting the files to your root directory you can create your new website by ceating new php files in the root directory  <strong>eg: main.php .</strong> as show below ',
                                                            el::image('yolkassets/img/mm.png'),
                                                        ]),
                                                        el::p('', [
                                                            'so to route the page you have created, open the <strong>engine.php</strong> file which comes with yolk and give your page a short url  eg: i want to route main.php as index page so is shown in the picture below',
                                                            el::image('yolkassets/img/mr.png'),
                                                        ]),
                                                        el::p('', [
                                                            'To navigate this page you can type your website address and the <strong>main.php</strong> page will run. <br> Below is a code example of   Yolk page ',
                                                        ]),
                                                        el::p('', [
                                                            CodeBox('php', " YolkUI::run(new Wrapper(
el::html('',[
el::head([
    meta::viewport(),
el::title('York Framework'),

import('css'),
]),
el::body([
    // content goes here   
                                                      
import('js'),
])
])
));"),
                                                        ]),
                                                        el::p('', [
                                                            'Now we have created a a page and imported css so to link <strong>css ,javascript and favicon </strong>  , navigate to settings folder it contains <strong>css.php, js.php and favicon.php</strong> as shown in the image below<br>',
                                                            el::image('yolkassets/img/st.png'),
                                                        ]),
                                                        el::p('', [
                                                            'Note: all assets(audios,videos,images,favicon and other docs must be kept in yolkassets folder. as shown below)<br>',
                                                            el::image('yolkassets/img/yat.png'),
                                                        ]),
                                                        el::p('', [
                                                            el::h3('', 'Linking CSS files.'),
                                                            'To link css you ',
                                                            el::ol('', [
                                                                el::li('', 'go to your settings folder and open the <strong>css.php</strong>'),
                                                                el::li('', 'seperate your links with commas as shown in the picture below '),
                                                            ]),
                                                        ]),
                                                        el::p('', [
                                                            el::image('yolkassets/img/css.png'),
                                                        ]),

                                                        el::p('', [
                                                            el::h3('', 'Linking JS files.'),
                                                            'To link js you ',
                                                            el::ol('', [
                                                                el::li('', 'go to your settings folder and open the <strong>js.php</strong>'),
                                                                el::li('', 'seperate your links with commas as shown in the picture below '),
                                                            ]),
                                                        ]),
                                                        el::p('', [
                                                            el::image('yolkassets/img/js.png'),
                                                        ]),

                                                        el::p('', [
                                                            el::h3('', 'Linking Favicon files.'),
                                                            'To link favicon you ',
                                                            el::ol('', [
                                                                el::li('', 'go to your settings folder and open the <strong>favicon.php</strong>'),
                                                                el::li('', 'seperate your links with commas as shown in the picture below '),
                                                            ]),
                                                        ]),
                                                        el::p('', [
                                                            el::image('yolkassets/img/fav.png'),
                                                        ]),

                                                        el::p('', [
                                                            el::h3('', 'Importing CSS in Main Project '),
                                                            'To use the css we registered above ',
                                                            el::ol('', [
                                                                el::li('', 'open your <strong>main.php</strong> or any file you will use the <strong>css</strong> in '),
                                                                el::li('', 'Write the below code  inside the yolk head element as show below'),
                                                                el::li('', [CodeBox('php', 'import("css"),')]),
                                                            ]),
                                                        ]),
                                                        el::p('', [
                                                            el::image('yolkassets/img/ic.png'),
                                                        ]),

                                                        el::p('', [
                                                            el::h3('', 'Importing JS in Main Project '),
                                                            'To use the JS we registered above ',
                                                            el::ol('', [
                                                                el::li('', 'open your <strong>main.php</strong> or any file you will use the <strong>js</strong> in '),
                                                                el::li('', 'Write the below code at the far end  inside the yolk body element as show below'),
                                                                el::li('', [CodeBox('php', 'import("js"),')]),
                                                            ]),
                                                        ]),
                                                        el::p('', [
                                                            el::image('yolkassets/img/ij.png'),
                                                        ]),
                                                        el::p('', [
                                                            el::h3('', 'Importing favicon in Main Project '),
                                                            'To use the faviocon we registered above ',
                                                            el::ol('', [
                                                                el::li('', 'open your <strong>main.php</strong> or any file you will use the <strong>favicon</strong> in '),
                                                                el::li('', 'Write the below code inside the yolk head element just above the <strong>import("css")</strong> as show below'),
                                                                el::li('', [CodeBox('php', 'import("favicon"),')]),
                                                            ]),
                                                        ]),
                                                        el::p('', [
                                                            el::image('yolkassets/img/if.png'),
                                                        ]),                                                    ]),
                                                ]),
                                                el::div('class="spacey"', []), ]),
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
