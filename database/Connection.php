<?php


class Connection
{
    public static function make($config): PDO
    {
        try
        {

            return new PDO(
                $config['database'].':localhost='.$config['host'].';dbname='.$config['dbname'],
                $config['username'], $config['password'],
                $config['options']
            );
        }
        catch (PDOException $exception)
        {
            die($exception->getMessage());
        }
    }

}