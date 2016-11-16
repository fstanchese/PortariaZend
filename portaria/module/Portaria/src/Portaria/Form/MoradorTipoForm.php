<?php
namespace Portaria\Form;

use Zend\Form\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Text;

class MoradorTipoForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('moradortipo');		
        $this->setAttribute('method', 'POST');
        $this->setInputFilter(new MoradorTipoFilter());
                
        $descricao = new Text('descricao');
        $descricao->setLabel('Descrição : ')
            ->setAttributes(array(
                    'maxlength' => 45,
            		'size' => 45
                ));
        $this->add($descricao);
        
        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Confirme')
            ->setAttributes(array(
                    'type' => 'submit',
                    'class' => 'btn'
                ));
        $this->add($button);
    }
}
