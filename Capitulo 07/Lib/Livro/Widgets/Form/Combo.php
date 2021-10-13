<?php
namespace Livro\Widgets\Form;
use Livro\Widgets\Base\Element;

class Combo extends Field implements FormElementInterface {
    private $items; //array contendo os itens da combo
    protected $properties;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function addItems($items){
        $this->items = $items;
    }
    public function show(){
        $tag = new Element('select');
        $tag->class = 'combo';
        $tag->name = $this->name;
        $tag->style = "width:{$this->size}"; //tamanho em pixels
        // cria uma TAG <option> com um valor padrão
        $option = new Element('option');
        $option->add('');
        $option->value = '0'; //valor da tag
        //adiciona a opção à combo
        $tag->add($option);
        if($this->items){
            //percorre os itens adcionados
            foreach($this->items as $chave => $item){
                //cria uma tag <option> para o item
                $option = new Element('option');
                $option->value = $chave; //define o índice da opção
                $option->add($item); //adiciona o texto da opção
                //caso seja a opção selecionada
                if($chave == $this->value){
                    //seleciona o item da combo
                    $option->selected = 1;
                }
                $tag->add($option);
            }
        }
        //verifica se o campo é editável
        if(!parent::getEditable()){
            //desabilita a tag input
            $tag->readonly = "1";
        }
        if($this->properties){
            foreach($this->properties as $property => $value){
                $tag->property = $value;
            }
        }
        $tag->show(); //exibe a combo
    }
}