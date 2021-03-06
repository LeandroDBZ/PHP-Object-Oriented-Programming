<?php
namespace Livro\Widgets\Form;
use Livro\Widgets\Base\Element;

class CheckGroup extends Field implements FormElementInterface {
    private $layout = 'vertical';
    private $items;

    public function setLayout($dir){
        $this->layout = $dir;
    }
    public function addItems($items){
        $this->items = $items;
    }
    public function show(){
        if($this->items){
            //percorre cada uma das opções do radio
            foreach($this->items as $index => $label){
                $button = new CheckButton("{$this->name}[]");
                $button->setValue($index);
                //verifica se deve ser marcado
                if(in_array($index, (array) $this->value)){
                    $button->setProperty('checked', '1');
                }
                $obj = new Label($label);
                $obj->add($button);
                $obj->show();
                if($this->layout == 'vertical'){
                    //exibe uma tag de quebra de linha
                    $br = new Element('br');
                    $br->show();
                    echo "\n";
                }
            }
        }
    }
}