<?php


class QueryBuilder
{
    public $PDO;

    public function __construct(PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    public function all($table)
    {
        $statement = $this->PDO->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }
}