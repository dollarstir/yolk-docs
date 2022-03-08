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
                    meta::author('Frederick Ennin'),
                    meta::description('Php Yolk is lightweighted php framework that comes with almost all database queries , custom UI, custom ajax to handle request , php codes to process all request from the ajax '),
                    meta::keywords('Php,Framework,Lightweight,Best,programming,developers,who,what,which'),
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
                                                        el::p('','After this you can now add any of the alert below inside the body'),
                                                        el::p('','<strong>Note : in the below codes the first parameter of each basic function is type of alert, which can be (success, primary, secondary, danger, info, light and dark) .  <br>Second parameter  is the message to display in alert. <br> last parameter is any other attributes you want to add which is optional eg :  is alert::basic("success","some message ", "attributename=\'value\'")</strong>'),
                                                        el::p('',[
                                                        CodeBox('php',"alert::basic('success', 'basic success alert') 
alert::basic('primary', 'basic primary alert') 
alert::basic('secondary', 'basic secondary alert')
alert::basic('danger', 'basic danger alert')
alert::basic('warning', 'basic warning alert')  
alert::basic('info', 'basic info alert')
alert::basic('dark', 'basic dark alert')
alert::basic('light', 'basic light alert')"),

                                                        ]),

                                                        el::h2('','Alert With Close button'),
                                                        alert::closable('success', 'basic success alert'),
                                                        alert::closable('primary', 'basic primary alert'),
                                                        alert::closable('secondary', 'basic secondary alert'),
                                                        alert::closable('danger', 'basic danger alert'),
                                                        alert::closable('warning', 'basic warning alert'),
                                                        alert::closable('info', 'basic info alert'),
                                                        alert::closable('dark', 'basic dark alert'),
                                                        alert::closable('light', 'basic light alert'),

                                                        el::p('','Below are the codes for each closable alert'),
                                                        el::p('','<strong>Note : in the below codes the first parameter of each closable function is type of alert, which can be (success, primary, secondary, danger, info, light and dark) .  <br>Second parameter  is the message to display in alert. <br> last parameter is any other attributes you want to add which is optional eg :  is alert::closable("success","some message ", "attributename=\'value\'")</strong>'),
                                                        CodeBox('php',"
alert::closable('success', 'basic success alert'),
alert::closable('primary', 'basic primary alert'),
alert::closable('secondary', 'basic secondary alert'),
alert::closable('danger', 'basic danger alert'),
alert::closable('warning', 'basic warning alert'),
alert::closable('info', 'basic info alert'),
alert::closable('dark', 'basic dark alert'),
alert::closable('light', 'basic light alert'),"),       

                                                        el::h2('','Alert With icons'),
                                                        alert::iconalert('success','success', 'basic success alert'),
                                                        alert::iconalert('primary','info', 'basic primary alert'),
                                                        alert::iconalert('secondary','info', 'basic secondary alert'),
                                                        alert::iconalert('danger','warning', 'basic danger alert'),
                                                        alert::iconalert('warning', 'warning','basic warning alert'),
                                                        alert::iconalert('info','info', 'basic info alert'),
                                                        alert::iconalert('dark','info', 'basic dark alert'),
                                                        alert::iconalert('light','info', 'basic light alert'),

                                                        el::p('','<strong>Note : in the below codes the first parameter of each iconalert function is type of alert, which can be (success, primary, secondary, danger, info, light and dark) . <br> Second parameter is the icon type (success, info and warning). <br>third parameter  is the message to display in alert. <br> last parameter is any other attributes you want to add which is optional eg :  is alert::iconalert("success","success","some message ", "attributename=\'value\'")</strong>'),
                                                        codeBox('php',"

alert::iconalert('success','success', 'basic success alert'),
alert::iconalert('primary','info', 'basic primary alert'),
alert::iconalert('secondary','info', 'basic secondary alert'),
alert::iconalert('danger','warning', 'basic danger alert'),
alert::iconalert('warning', 'warning','basic warning alert'),
alert::iconalert('info','info', 'basic info alert'),
alert::iconalert('dark','info', 'basic dark alert'),
alert::iconalert('light','info', 'basic light alert'),"),

                                                        


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
