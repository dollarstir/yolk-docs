<?php

$css = [
    el::linkcss('ui/css/all.min.css'),

   el::linkcss('yolkassets/prism.css'),
    el::linkcss('yolkassets/style.css'),
    el::linkcss('yolkassets/main.css'),
    el::linkcss('https://unpkg.com/aos@2.3.1/dist/aos.css'),
     el::linkcustomcss('https://fonts.googleapis.com', 'preconnect'),
    el::linkcustomcss('https://fonts.gstatic.com', 'preconnect'),
    el::linkcustomcss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', 'stylesheet'),
    el::linkcustomcss('https://fonts.googleapis.com/css?family=Poppins:600&display=swap', 'stylesheet'),
];

$rp = '';

foreach ($css as $key) {
    $rp .= $key;
}
$rp .= '';

return $rp;
