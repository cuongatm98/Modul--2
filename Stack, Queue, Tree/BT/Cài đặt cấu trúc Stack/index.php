<?php
include_once "Stack.php";
$stack = new stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);
$stack->push(7);
$stack->push(8);
$stack->push(9);
$stack->push(10);

//$stack->push(11);
echo '<br>';
echo $stack->isEmpty() ;
echo '<br>';
echo $stack->pop();
echo '<br>';
echo $stack->pop();
echo '<br>';
echo $stack->top();
echo '<br>';
echo $stack->top();
