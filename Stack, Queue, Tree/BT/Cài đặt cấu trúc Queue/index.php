<?php
include_once 'Queue.php';
$queue = new Queue();
//echo $queue->isEmpty();

$queue = new Queue();
$queue->endqueue("start");
$queue->endqueue(1);
$queue->endqueue(2);
$queue->endqueue(3);
$queue->endqueue(4);
$queue->endqueue("End");
$queue->dequeue();
while(!$queue->isEmpty()){
    echo $queue->dequeue()."\n";
}