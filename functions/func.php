<?php

include 'includes/database_connect.php';

//getting the user IP address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

/**
 * @param string $string
 *
 * @return string
 */
function sanitize($string) {
    $string = strip_tags($string);
    // you can add here more sanitization

    return $string;
}
