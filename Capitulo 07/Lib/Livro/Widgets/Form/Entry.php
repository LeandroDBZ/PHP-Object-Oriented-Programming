<?php
namespace Livro\Widgets\Form;
use Livro\Widgets\Base\Element;

class Entry extends Field implements FormElementInterface{
    protected $properties;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function show(){
        //atribui as propriedades da TAG
        $tag = new Element('input');
        $tag->class = 'field'; //classe CSS
        $tag->name = $this->name; //nome da tag
        $tag->value = $this->value; //valor da tag
        $tag->type = 'text'; //tipo de input
        $tag->style = "width:{$this->size}"; //tamanho em pixels
        //se o campo não é editável
        if(!parent::getEditable()){
            $tag->redonly = "1";
        }
        if($this->properties){
            foreach($this->properties as $property => $value){
                $tag->$property = $value;
            }
        }
        $tag->show(); //exibe a tag
    }
}