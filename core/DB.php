<?php

namespace Core;

use MongoDB\Driver\Exception\ConnectionException;
use PDO;

class DB
{
    private static $db;

    public static function get(): PDO
    {
        if(!is_null(self::$db)) {
            return self::$db;
        }
        $db = new PDO(
            'mysql:host='.Config::get('DB_HOST').';dbname='.Config::get('DB_NAME'),
            Config::get('DB_USERNAME'),
            Config::get('DB_PASSWORD')
        );
        self::$db = $db;
        return $db;
    }
}
