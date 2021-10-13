<?php
namespace Livro\Widgets\Form;
use Livro\Widgets\Base\Element;

class Text extends Field implements FormElementInterface{
    private $width;
    private $height = 100;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    
    public function setSize($width, $height = NULL){
        $this->size = $width;
        if(isset($height)){
            $this->height = $height;
        }
    }

    public function show(){
        //atribui as propriedades da TAG
        $tag = new Element('textarea');
        $tag->class = 'field'; //classe CSS
        $tag->name = $this->name; //nome da tag
        $tag->style = "width:{$this->size}; height:{$this->height}"; //tamanho em pixels
        //se o campo não é editável
        if(!parent::getEditable()){
            $tag->redonly = "1";
        }
        $tag->add(htmlspecialchars($this->value)); //adiciona conteúdo ao textarea
        if($this->properties){
            foreach($this->properties as $property => $value){
                $tag->$property = $value;
            }
        }
        $tag->show(); //exibe a tag
    }
}