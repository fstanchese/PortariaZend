<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class MoradorController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\MoradorForm';
        $this->controller = 'morador';
        $this->route = 'morador';
        $this->service = 'Portaria\Service\MoradorService';
        $this->entity = 'Portaria\Entity\Morador';
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