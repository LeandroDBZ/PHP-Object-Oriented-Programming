<?php
namespace Livro\Database;
class LoggerXML extends Logger{
    public function write($message){
        date_default_timezone_set('America/Campo_Grande');
        $time = date("Y-m-d H:i:s");
        $text = "<log>\n";
        $text.= "<time>$time</time>\n";
        $text.= "<message>$message</message>\n";
        $text.= "</log>\n";
        //adiciona ao final do arquivo
        $handler = fopen($this->filename, 'a');
        fwrite($handler, $text);
        fclose($handler);
    }
}