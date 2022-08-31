<?php

use PHPUnit\Framework\TestCase;

use Core\DB;

final class MvcModelSampleTest extends TestCase
{
    private static $autoloaderFilePath = __DIR__.'/../vendor/autoload.php';
    private static $db;
    private static $users = [];
    private static $tableName = 'users';

    public static function setUpBeforeClass(): void
    {
        require_once self::$autoloaderFilePath;
    }

    public function testDBGet()
    {
        $db = DB::get();
        $this->assertInstanceOf(PDO::class, $db);
        $this->assertSame($db, DB::get());
    }
}
