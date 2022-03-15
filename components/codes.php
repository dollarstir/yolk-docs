<?php

function CodeBox($type, $code)
{
    return
        el::divi('id="codeBox"',
        // el::button('class="copy-to-clipboard-button" type="button" data-copy-state="copy"', 'copy'),
        el::pre('', [el::code('class="language-'.$type.'"', [$code])])
        )
    ;
}
