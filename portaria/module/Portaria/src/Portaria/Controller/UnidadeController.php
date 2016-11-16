<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class UnidadeController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\UnidadeForm';
        $this->controller = 'unidade';
        $this->route = 'unidade';
        $this->service = 'Portaria\Service\UnidadeService';
        $this->entity = 'Portaria\Entity\Unidade';
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