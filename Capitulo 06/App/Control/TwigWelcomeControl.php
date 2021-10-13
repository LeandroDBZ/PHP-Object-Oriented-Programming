<?php
use Livro\Control\Page;
class TwigWelcomeControl extends Page{
    public function __construct(){
        $loader = new Twig_Loader_Filesystem('App/Resources');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('welcome.html');
        $repleaces = array();
        $repleaces['nome'] = 'José Augusto';
        $repleaces['rua'] = 'Rua das Acácias, 123';
        $repleaces['cep'] = '12.345.678';
        $repleaces['fone'] = '(00) 1234-5678';
        $content = $template->render($repleaces);
        echo $content;
    }
    public function onSaibaMais($params){
        echo 'Mais informações...';
    }
}