<?php
$dir = opendir('C:\Users\leand\OneDrive\PHP\Capitulo 04');
while ($arquivo = readdir($dir)) {
    print $arquivo.'<br>'.PHP_EOL;
}
closedir($dir);