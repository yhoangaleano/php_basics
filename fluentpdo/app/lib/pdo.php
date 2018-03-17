<?php
namespace App\Lib;

use FluentPDO,
    PDO;

class database
{
    public static function getConnection(){
        try
        {
            $pdo = new PDO('mysql:host=localhost;dbname=jornalero;charset=utf8', 'root', 'root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            $connections = array(
                'pdo' => $pdo,
                'fluentPDO' => new FluentPDO($pdo)
            );

            return $connections;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}