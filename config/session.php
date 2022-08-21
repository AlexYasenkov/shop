<?php
session_start();

function setSession($key, $value)
{
    $k = APP_ID . '_' . $key;
    $_SESSION[$k] = $value;

    return true;
}

function getSession($key)
{
    $k = APP_ID . '_' . $key;

    return (isset($_SESSION[$k])) ? $_SESSION[$k] : false;
}

function delSession($key)
{
    $k = APP_ID . '_' . $key;

    if (isset($_SESSION[$k])) {
        unset($_SESSION[$k]);
        return true;
    }

    return false;
}