<?php

class Image
{
    public static function brandsvg($name, $width = '20px', $height = '20px', $class = '', $id = '')
    {
        return '<img src="'.path::rebase('ui/svgs/brands/'.$name.'.svg').'" width="'.$width.'" height="'.$height.'" class="'.$class.'" id="'.$id.'">';
    }

    public static function regularsvg($name, $width = '20px', $height = '20px', $class = '', $id = '')
    {
        return '<img src="'.path::rebase('ui/svgs/regular/'.$name.'.svg').'" width="'.$width.'" height="'.$height.'" class="'.$class.'" id="'.$id.'">';
    }

    public static function solidsvg($name, $width = '20px', $height = '20px', $class = '', $id = '')
    {
        return '<img src="'.path::rebase('ui/svgs/solid/'.$name.'.svg').'" width="'.$width.'" height="'.$height.'" class="'.$class.'" id="'.$id.'">';
    }
}
