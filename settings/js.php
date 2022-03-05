<?php

$js = [
    el::linkjs('yolkassets/js/prism.js'),
    el::linkjs('https://unpkg.com/aos@2.3.1/dist/aos.js'),
    el::linkjs('yolkassets/js/aos.js'),
];

$rp = '';

foreach ($js as $key) {
    $rp .= $key;
}
$rp .= '';

return $rp;
