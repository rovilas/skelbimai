<?php

namespace Helper;

class Url
{
    public static function redirect($route)
    {
        header('Location: ' . BASE_URL . $route);
        exit;
    }

    public static function link($path, $parm = null)
    {
        $link = BASE_URL . $path;
        if ($parm !== null) {
            $link .= '/' . $parm;
        }
        return $link;
    }

    public static function slug($string)
    {
        $string = strtolower($string);
        $string = str_replace(' ','-',$string);
        return $string;
    }
}
