<?php
namespace Portaria\Form;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\Form\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use DoctrineModule\Form\Element\ObjectSelect;

class UnidadeForm extends Form implements ObjectManagerAwareInterface
{
	protected $objectManager;
	
    public function __construct(ObjectManager $objectManager)
    {
        $this->setObjectManager($objectManager);
        parent::__construct('unidade');
        
        $this->setAttribute('method', 'POST');  
        $this->setAttribute('class', 'form-horizontal');
        
        $unidadeTipo = new ObjectSelect('unidadetipo');
        $unidadeTipo->setLabel('Tipo de Unidade : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\UnidadeTipo',
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
        $this->add($unidadeTipo);
        
        $bloco = new ObjectSelect('bloco');
        $bloco->setLabel('Bloco : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\Bloco',
        		'property'       => 'descricao',
        		'empty_option'   => '---',        		
        		'is_method'      => true,
        		'find_method'    => array(
        				'name'   => 'findBy',
        				'params' => array(
        						'criteria' => array(),
        						'orderBy'  => array('descricao' => 'ASC'),
        				),
        		),
        ));
        $this->add($bloco);
        
   
        $moradorTipo = new ObjectSelect('moradortipo');
        $moradorTipo->setLabel('Tipo de Morador : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\MoradorTipo',
        		'property'       => 'descricao',
        		'is_method'      => true,
        		'find_method'    => array(
        				'name'   => 'findBy',
        				'params' => array(
        						'criteria' => array(),
        						'orderBy'  => array('id' => 'ASC'),
        				),
        		),
        ));
        $this->add($moradorTipo); 
        
        $descricao = new Text('descricao');
        $descricao->setLabel('Unidade : ')
            ->setAttributes(array(
                    'maxlength' => 45,
            		'size' => 45
                ));
        $this->add($descricao);
        
        $ramal = new Text('ramal');
        $ramal->setLabel('Ramal : ')
        ->setAttributes(array(
        		'maxlength' => 10,
        		'size' => 10
        ));
        $this->add($ramal);
        
        $telefone = new Text('telefone');
        $telefone->setLabel('Telefone : ')
        ->setAttributes(array(
        		'maxlength' => 15,
        		'size' => 15
        ));
        $this->add($telefone);
        
        $vagas = new Text('vagas');
        $vagas->setLabel('Vagas : ')
        ->setAttributes(array(
        		'maxlength' => 1,
        		'size' => 1
        ));
        $this->add($vagas);
        
        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Confirme')
            ->setAttributes(array(
                    'type' => 'submit',
                    'class' => 'btn'
                ));
        $this->add($button);
        
        $this->setInputFilter(new UnidadeFilter());      
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
