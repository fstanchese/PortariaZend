<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class VeiculoController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\VeiculoForm';
        $this->controller = 'veiculo';
        $this->route = 'veiculo';
        $this->service = 'Portaria\Service\VeiculoService';
        $this->entity = 'Portaria\Entity\Veiculo';
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