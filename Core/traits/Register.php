<?php

class Register extends Main
{
    public function register()
    {
        $sql = "";
        $res = $this->query($sql);
        if ($res == 1) {
            return 1;
        } else {
            return 0;
        }
    }
}
