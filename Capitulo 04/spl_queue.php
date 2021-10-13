<?php
$ingredientes = new SplQueue();
//acrescentando na fila
$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');
foreach($ingredientes as $item){
    print 'Item: '.$item.'<br>'.PHP_EOL;
}
print '<br>'.PHP_EOL;
//remove da fila
print $ingredientes->dequeue().'<br>'.PHP_EOL;
print 'Count: '.$ingredientes->count().'<br>'.PHP_EOL;
print $ingredientes->dequeue().'<br>'.PHP_EOL;
print 'Count: '.$ingredientes->count().'<br>'.PHP_EOL;
print $ingredientes->dequeue().'<br>'.PHP_EOL;
print 'Count: '.$ingredientes->count().'<br>'.PHP_EOL;