<?php

namespace NtkAndr;

trait IteratorTrait
{

    protected $collection = [];

    public function current()
    {
        return current($this->collection);
    }

    public function next()
    {
        next($this->collection);
    }

    public function key()
    {
        return key($this->collection);
    }

    public function valid()
    {
        return null !== key($this->collection);
    }

    public function rewind()
    {
        reset($this->collection);
    }
}