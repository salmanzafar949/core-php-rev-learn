<?php


class Todo
{
    public string $description;
    public bool $isCompleted = false;

    public function __construct($description, $isCompleted=false)
    {
        $this->description = $description;
        $this->isCompleted = $isCompleted;
    }

    public function isCompleted(): bool
    {
        return $this->isCompleted;
    }

    public function complete() : void
    {
        $this->isCompleted = true;
    }
}