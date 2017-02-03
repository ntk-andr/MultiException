<?php

namespace NtkAndr;

class MultiException extends \Exception implements \Iterator
{

    use IteratorTrait;

    public function add(\Exception $exception)
    {
        $this->collection[] = $exception;
    }

    public function isEmpty(): bool
    {
        return empty($this->collection);
    }
}