<?php
$file = new SplFileObject('spl_file_object.php');
print 'Nome: '. $file->getFilename().'<br>'.PHP_EOL;
print 'Extensão: '. $file->getExtension(). '<br>'.PHP_EOL;
$file2 = new SplFileObject("novo.txt", "w");
$bytes = $file2->fwrite('Olá Mundo!'.PHP_EOL);
print 'Bytes escritos: '. $bytes.PHP_EOL;