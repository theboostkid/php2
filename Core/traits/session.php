<?php

trait Session
{
    public static function setSession($key, $data)
    {
        $_SESSION[$key] = $data;
        return 1;
    }
}
