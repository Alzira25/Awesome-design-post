<?php

include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/database.php';

/**
 * @return string
 */
function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $_SERVER['REMOTE_ADDR'];
}

/**
 * @param string $text
 *
 * @return string
 */
function sanitize($text)
{
    $text = strip_tags($text);
    $text = preg_replace('/([\-]{2,}|\#)/', '', $text);

    return $text;
}

function p($data)
{
    echo '<pre>';
    print_r($data);
}

function pd($data)
{
    p($data);
    die;
}
