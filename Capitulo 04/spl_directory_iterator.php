<?php
foreach(new DirectoryIterator('C:\Users\leand\OneDrive\PHP\Capitulo 04') as $file){
    print (string) $file.'<br>'.PHP_EOL;
    print 'Nome: '. $file->getFilename().'<br>'.PHP_EOL;
    print 'Extensão: '. $file->getExtension().'<br>'.PHP_EOL;
    print 'Tamanho: '. $file->getSize().'<br>'.PHP_EOL;
    print '<br>'.PHP_EOL;
}