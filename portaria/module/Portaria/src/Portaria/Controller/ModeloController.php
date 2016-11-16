<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class ModeloController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\ModeloForm';
        $this->controller = 'modelo';
        $this->route = 'modelo';
        $this->service = 'Portaria\Service\ModeloService';
        $this->entity = 'Portaria\Entity\Modelo';
    }
    
    public function addAction(){
    	$this->form = $this->getServiceLocator()->get($this->form);
    	return parent::addAction();
    }
    
    public function editAction()
    {
    	$this->form = $this->getServiceLocator()->get($this->form);
    	return parent::editAction();
    }
}