<?php
namespace Portaria\Form;

use Zend\Form\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Text;

class MarcaForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('marca');		
        $this->setAttribute('method', 'POST');

                
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
        
        $this->setInputFilter(new MarcaFilter());
    }
}
