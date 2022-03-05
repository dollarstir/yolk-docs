<?php

// Developed by Frederick Ennin (Dollarstir)

function topbar($pid)
{
    switch ($pid) {
        case 1:
            return el::div('class="tbar"',
            [
                 Navbar::basiclight('', Navbar::Navbrand('home', [el::image('yolkassets/img/logo.png', 'class="logo"')]),
                 [
                    Navbar::Navbasic('', ['Guide' => 'documentation']),
                    Navbar::Navbasic('', ['Component' => 'components']),
                    Navbar::Navbasic('', ['Plugins' => 'plugins']),
                    Navbar::Navbasic('', ['Community' => 'community']),
                    Navbar::Navbasic('', ['Blog' => 'blog']),
                 ]),
                ]);
            break;
        case 2:
                return el::div('class="tbar"',
                [
                     Navbar::basiclight('', Navbar::Navbrand('home', [el::image('yolkassets/img/logo.png', 'class="logo"')]),
                     [
                        Navbar::Navactive('', ['Guide' => 'documentation']),
                        Navbar::Navbasic('', ['Component' => 'components']),
                        Navbar::Navbasic('', ['Plugins' => 'plugins']),
                        Navbar::Navbasic('', ['Community' => 'community']),
                        Navbar::Navbasic('', ['Blog' => 'blog']),
                     ]),
                    ]);
                break;
    }
}
