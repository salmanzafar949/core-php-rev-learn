<?php


class Connection
{
    public static function make(): PDO
    {
        try
        {
            return new PDO('mysql:localhost=127.0.0.1;dbname=mytodo','sam','123456');
        }
        catch (PDOException $exception)
        {
            die($exception->getMessage());
        }
    }

}