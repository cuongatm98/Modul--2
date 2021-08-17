<?php

class stack
{
    protected array $stack;
    protected int $limit;

    public function __construct(int $limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }


    public function push($item): void
    {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            echo 'Stack is full!';
        }
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            // trap for stack underflow
            echo 'Stack is empty!';
        } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }
}