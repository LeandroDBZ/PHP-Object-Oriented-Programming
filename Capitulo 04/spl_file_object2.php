<?php
$file = new SplFileObject('spl_file_object2.php');
print 'forma 1: '.'<br>'.PHP_EOL;
while (!$file->eof()) {
    print 'linha: '.$file->fgets();
}
print '<br>'.PHP_EOL.'<br>'.PHP_EOL;
print 'forma 2: '.'<br>'.PHP_EOL;
foreach($file as $linha => $conteudo){
    print "$linha: $conteudo";
}