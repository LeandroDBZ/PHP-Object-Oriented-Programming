<?php
use Livro\Control\Page;
use Livro\Widgets\Container\Panel;
class ExemploPanelControl extends Page{
    public function __construct(){
        // parent::__construct();
        $panel = new Panel('Título do Painel');
        $panel->style = 'margin: 20px;';
        $panel->style .= 'text-align: justify;';
        $panel->add('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque purus lectus, aliquam non bibendum euismod, vulputate vitae elit. 
        Donec varius eros sed nibh ornare, in porttitor sapien pellentesque. Suspendisse fermentum sem nisl, condimentum congue purus tincidunt vel. 
        Aliquam eu blandit enim. Nam consectetur enim magna. Vivamus et ipsum vel nisl placerat vulputate ut et velit. Nullam posuere molestie lectus, 
        et venenatis libero tempor vel. Ut in enim risus. Nam pretium vulputate ante, non aliquam sapien consequat vel. Phasellus vehicula eros vel justo 
        porta, non luctus mauris sollicitudin.');
        $panel->show();
    }
}