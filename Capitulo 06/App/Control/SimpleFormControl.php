<?php
use Livro\Control\Page;
use Livro\Widgets\Form\SimpleForm;
class SimpleFormControl extends Page {
    public function __construct(){
        $form = new SimpleForm('my_form');
        $form->setTitle('Título');
        $form->addField('Nome', 'name', 'text', 'Maria', 'form-control');
        $form->addField('Telefone', 'fone', 'text', '(51) 1234-7895', 'form-control');
        $form->setAction('ex_index.php?class=SimpleFormControl&method=onGravar');
        $form->show();
    }
    public function onGravar($params){
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    }
}