<?php

class SessionClass
{

    function createSession()
    {
        session_start();
    }

    function destroySession()
    {
        session_destroy();
    }

    function addSessionVar($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    function deleteSessionVar($name)
    {
        unset( $_SESSION[$name]);
    }
}