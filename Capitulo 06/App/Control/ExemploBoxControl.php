<?php
use Livro\Control\Page;
use Livro\Widgets\Container\Panel;
use Livro\Widgets\Container\Hbox;

class ExemploBoxControl extends Page{
    public function __construct(){
        //parent::__construct();
        $panel1 = new Panel('Painel 1');
        $panel1->style = 'margin: 10px';
        $panel1->add('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Quisque purus lectus, aliquam non bibendum euismod, vulputate vitae elit.');
        $panel2 = new Panel('Painel 2');
        $panel2->style = 'margin: 10px';
        $panel2->add('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Quisque purus lectus, aliquam non bibendum euismod, vulputate vitae elit.');
        $box = new Hbox;
        $box->add($panel1);
        $box->add($panel2);
        $box->show();
    }
}