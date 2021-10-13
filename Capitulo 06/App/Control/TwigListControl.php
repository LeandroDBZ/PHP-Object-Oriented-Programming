<?php
use Livro\Control\Page;
class TwigListControl extends Page{
    public function __construct(){
        $loader = new Twig_Loader_Filesystem('App/Resources');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('list.html');
        $repleaces = array();
        $repleaces['titulo'] = 'Lista de pessoas';
        $repleaces['pessoas'] = array(
            array('codigo' => '1',
                  'nome' => 'Anita Garibaldi',
                  'endereco' => 'Rua dos Gaudérios'),
            array('codigo' => '2',
                  'nome' => 'Bento Gonçalves',
                  'endereco' => 'Rua dos Gaudérios'),
            array('codigo' => '3',
                  'nome' => 'Giuseppe Garibaldi',
                  'endereco' => 'Rua dos Gaudérios')
        );
        $content = $template->render($repleaces);
        echo $content;
    }
}