<?php

namespace Logger;

class Logger
{
    public static function accessLog($server)
    {
        $accessLog = __DIR__ . '/../../logs/access.log';
        $uri = $_SERVER['REQUEST_URI'];
        $domain = $_SERVER['HTTP_HOST'];
        $method = $_SERVER['REQUEST_METHOD'];
        $date = date("D M j G:i:s");

        $data = $date . ' ' . $domain . ' REQUEST IN ' . $method . ' URI : ' . $uri . "\n";

        file_put_contents($accessLog, $data, FILE_APPEND);
    }

    public static function errorLog($server)
    {

    }
}