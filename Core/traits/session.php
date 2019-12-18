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
}
