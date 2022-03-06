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
                                                el::div('id="'.$context['id'].'"', [
                                                    el::divi('id="getStarted"', [
                                                        'Accordion',
                                                    ]),
                                                    el::divi('id="introbox"', [
                                                        el::p('', 'Build vertically collapsing accordions in combination with our Collapse JavaScript plugin.'),
                                                    ]),
                                                    el::divi('id="pcont"', [
                                                        el::h3('', ['How it works']),
                                                        el::p('', [
                                                            'The accordion uses collapse internally to make it collapsible. To render an accordion that’s expanded, add the .open class on the .accordion.',
                                                        ]),

                                                        el::h3('', ['Example']),
                                                        el::p('', 'Click the accordions below to expand/collapse the accordion content.'),
                                                        component::accordion([
                                                            'Introduction to Yolk' => 'In this topic we will be talking into details what you have to know',
                                                            'Fighting to Yolk' => 'In this topic we will be talking into details what you have to know',
                                                            'Man of the moment' => 'In this topic we will be talking into details what you have to know',
                                                        ]),
                                                    ]),
                                                ]),
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
