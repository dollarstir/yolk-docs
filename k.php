<?php

 // Developed By Frederick Ennin
//Contact: +233556676471
//Email: kpin463@gmail.com
YolkUI::run(new Wrapper(
el::html('',
[
el::head([
meta::viewport(),
el::title('York Framework'),
import('favicon'),
import('css'),
]),
el::body([
import('js'),
]),
])
));
YolkUI::run(new Wrapper(
el::html('',
[
el::head([
meta::viewport(),
el::title('York Framework'),
import('favicon'),
import('css'),
Yolk::uicore('corecss'),
]),
el::body([
    el::div('class="container"', [
        component::accordion([
            'Introduction to Yolk' => 'In this topic we will be talking into details what you have to know',
            'Fighting to Yolk' => 'In this topic we will be talking into details what you have to know',
            'Man of the moment' => 'In this topic we will be talking into details what you have to know',
        ]),
    ]),
import('js'),
]),
])
));
