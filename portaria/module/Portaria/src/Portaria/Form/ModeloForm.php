<?php
namespace Portaria\Form;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\Form\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use DoctrineModule\Form\Element\ObjectSelect;
use Portaria\Form\ModeloFilter;

class ModeloForm extends Form implements ObjectManagerAwareInterface
{
	protected $objectManager;
	
    public function __construct(ObjectManager $objectManager)
    {
        $this->setObjectManager($objectManager);
        parent::__construct(null);
        
        $this->setAttribute('method', 'POST');         

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
        
        $descricao = new Text('descricao');
        $descricao->setLabel('Modelo : ')
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
        
        $this->setInputFilter(new ModeloFilter($marca->getValueOptions()));
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
