<?php

require_once 'loader/autoloader.php';

$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('/main.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('/main.php', $context);
        }
    ),
    new Route(
        '/k',
        function ($context) {
            return Viewer::view('/k.php', $context);
        }
    ),
    new Route(
        '/component/accordion',
        function ($context) {
            return Viewer::view('/components/m.php', $context);
        }
    ),

    new Route(
        '/component/alert',
        function ($context) {
            return Viewer::view('/components/alert.php', $context);
        }
    ),
    new Route(
        '/documentation',
        function ($context) {
            return Viewer::view('/docs.php', $context);
        }
    ),
    new Route(
        '/t4',
        function ($context) {
            return Viewer::view('/test4.php', $context);
        }
    ),
    new Route(
        '/t5',
        function ($context) {
            return Viewer::view('/test5.php', $context);
        }
    ),

    new Route(
        '/t3',
        function ($context) {
            return Viewer::view('/test3.php', $context);
        }
    ),

    new Route(
        '/login1',
        function ($context) {
            return Viewer::view('/widgets/login/login.php', $context);
        }
    ),
    // new Route(
    //     '/test/{id}/customers/{cid}',
    //     function ($context) {
    //         return Viewer::view('j/testing.php', $context);
    //     }
    // ),
]);

// $router->route('/home', function ($context) {
//     return Viewer::view('/main.php', $context);
// });

$router->launch();
