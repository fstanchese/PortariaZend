<?php
namespace Portaria\Form;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\Form\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use DoctrineModule\Form\Element\ObjectSelect;

class VeiculoForm extends Form implements ObjectManagerAwareInterface
{
	protected $objectManager;
	
    public function __construct(ObjectManager $objectManager)
    {
        $this->setObjectManager($objectManager);
        parent::__construct('veiculo');
        
        $this->setAttribute('method', 'POST');  
        $this->setAttribute('class', 'form-horizontal');
        
        $morador = new ObjectSelect('morador');
        $morador->setLabel('Morador : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\Morador',
        		'property'       => 'nome',
        		'is_method'      => true,
        		'find_method'    => array(
        				'name'   => 'findBy',
        				'params' => array(
        						'criteria' => array(),
        						'orderBy'  => array('nome' => 'ASC'),
        				),
        		),
        ));
        $this->add($morador);
 
        $marca = new ObjectSelect('marca');
        $marca->setLabel('Marca : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\Marca',
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
        $this->add($marca);        
        
        $modelo = new ObjectSelect('modelo');
        $modelo->setLabel('Modelo : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\Modelo',
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
        $this->add($modelo);
        
        $cor = new ObjectSelect('cor');
        $cor->setLabel('Cor : ')
        ->setOptions(array(
        		'object_manager' => $this->getObjectManager(),
        		'target_class'   => 'Portaria\Entity\Cor',
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
        $this->add($cor);
        
        $placa = new Text('placa');
        $placa->setLabel('Placa : ')
            ->setAttributes(array(
                    'maxlength' => 8,
            		'size' => 8
                ));
        $this->add($placa);
        
        
        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Confirme')
            ->setAttributes(array(
                    'type' => 'submit',
                    'class' => 'btn'
                ));
        $this->add($button);
        
        $this->setInputFilter(new VeiculoFilter());      
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
