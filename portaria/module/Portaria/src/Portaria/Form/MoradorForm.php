<?php
namespace Portaria\Form;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\Form\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use DoctrineModule\Form\Element\ObjectSelect;
use Zend\Validator\Date;

class MoradorForm extends Form implements ObjectManagerAwareInterface
{
	protected $objectManager;
	
    public function __construct(ObjectManager $objectManager)
    {
        $this->setObjectManager($objectManager);
        parent::__construct('morador');
        
        $this->setAttribute('method', 'POST');  
        $this->setAttribute('class', 'form-horizontal');
        
        $unidade = new ObjectSelect('unidade');
        $unidade->setLabel('Unidade : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\Unidade',
        		'property'       => 'descricao',
        		'is_method'      => true,
        		'find_method'    => array(
        				'name'   => 'findBy',
        				'params' => array(
        						'criteria' => array(),
        						'orderBy'  => array('descricao' => 'ASC'),
        				),
        		),
        ));
        $this->add($unidade);
        
        
        $nome = new Text('nome');
        $nome->setLabel('Nome : ')
            ->setAttributes(array(
                    'maxlength' => 100,
            		'size' => 100
                ));
        $this->add($nome);
        
        $cpf = new Text('cpf');
        $cpf->setLabel('CPF : ')
        ->setAttributes(array(
        		'maxlength' => 11,
        		'size' => 11
        ));
        $this->add($cpf);
        
        $documento = new Text('documento');
        $documento->setLabel('Documento : ')
        ->setAttributes(array(
        		'maxlength' => 15,
        		'size' => 15
        ));
        $this->add($documento);
        
        $celular = new Text('celular');
        $celular->setLabel('Celular : ')
        ->setAttributes(array(
        		'maxlength' => 15,
        		'size' => 15
        ));
        $this->add($celular);
        
        $datanascto = new \Zend\Form\Element\Date('datanascto');
        $datanascto->setLabel('Data de Nascimento : ')
        ->setAttributes(array(
        		'size' => 12
        ));
        $this->add($datanascto);
        
        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Confirme')
            ->setAttributes(array(
                    'type' => 'submit',
                    'class' => 'btn'
                ));
        $this->add($button);
        
        $this->setInputFilter(new MoradorFilter());      
    }
	/**
	 * {@inheritDoc}
	 * @see \DoctrineModule\Persistence\ObjectManagerAwareInterface::setObjectManager()
	 */
	public function setObjectManager(ObjectManager $objectManager) {
		// TODO: Auto-generated method stub
		$this->objectManager = $objectManager;
	}

	/**
	 * {@inheritDoc}
	 * @see \DoctrineModule\Persistence\ObjectManagerAwareInterface::getObjectManager()
	 */
	public function getObjectManager() {
		// TODO: Auto-generated method stub
		return $this->objectManager;
	}

}
