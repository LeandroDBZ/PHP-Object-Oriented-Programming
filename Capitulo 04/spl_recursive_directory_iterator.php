<?php
$path = 'C:\Users\leand\OneDrive\PHP\Capitulo 04';
foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator
($path, RecursiveDirectoryIterator::SKIP_DOTS)) as $item){
    print((string) $item.'<br>'.PHP_EOL);
}