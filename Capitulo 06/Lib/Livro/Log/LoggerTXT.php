<?php
namespace Livro\Database;
class LoggerTXT extends Logger{
    public function write($message){
        date_default_timezone_set('America/Campo_Grande');
        $time = date("Y-m-d H:i:s");
        //monta a string
        $text = "$time::$message\n";
        //adiciona ao final do arquivo
        $handler = fopen($this->filename, 'a');
        fwrite($handler, $text);
        fclose($handler);
    }
}