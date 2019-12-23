<?php

trait Session
{
    public static function put($key, $data)
    {
        $_SESSION[$key] = $data;
        return 1;
    }

    public static function get($key)
    {
        return $_SESSION[$key];
    }

    public static function remove($key)
    {
        $_SESSION[$key] = null;
        return 1;
    }
}
