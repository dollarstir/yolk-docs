<?php

$a = '';

if (isset($_POST['sub'])) {
    $add = new Add();
    extract($_POST);

    $response = $add->insert('users',
    [
        'name' => $name,
        'email' => $email,
        'password' => md5($password),
    ], $_FILES
    );

    if ($response == 'success') {
        $a = alert::basic('success', 'Registeration Successfuly');
        bolt('home');
    }
}
    // Developed By dollarstir(+233556676471/kpin463@gmail.com)

    YolkUI::run(new Wrapper(
    el::html('',
    [
        el::head(
             [
                 meta::viewport(),
                 el::title('Login Form'),
                 import('css'),
                 Yolk::uicore('corecss'),
            ]
        ),
        el::body([
            el::image('widgets/login/assets/img/wave.png', 'class="wave"'),
            el::div('class="logcont"', [
                $a,
                el::div('class="img"', [el::image('widgets/login/assets/img/bg.svg')]),

                el::div('class="logcontent"', [
                    el::form('', 'post', 'class="form" enctype="multipart/form-data"', [
                        el::image('widgets/login/assets/img/avatar.svg'),
                        el::h2('class="title"', 'Welcome'),
                        el::div('class="input-div one"', [
                            el::div('class="i"', [Icons::fas('user')]),
                            el::div('class="div"', [
                                el::h5('', 'Name'),
                                el::input('text', 'name', 'input'),
                            ]),
                        ]),

                        inputfile::basic('image', 'Upload your image'),

                        el::div('class="input-div one"', [
                            el::div('class="i"', [Icons::fas('envelope')]),
                            el::div('class="div"', [
                                el::h5('', 'email'),
                                el::input('email', 'email', 'input'),
                            ]),
                        ]),

                        el::div('class="input-div pass"', [
                            el::div('class="i"', [Icons::fas('lock')]),
                            el::div('class="div"', [
                                el::h5('', 'password'),
                                el::input('password', 'password', 'input'),
                            ]),
                        ]),
                        el::a('', 'class="a"', ['Forgot Password?']),
                        el::input('submit', 'sub', 'btn1', 'Register'),
                    ]),
                ]),
            ]),
                el::linkjs('widgets/login/assets/js/style.js'),
        ]),
    ])
));
