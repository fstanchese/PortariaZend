<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class MarcaController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\MarcaForm';
        $this->controller = 'marca';
        $this->route = 'marca';
        $this->service = 'Portaria\Service\MarcaService';
        $this->entity = 'Portaria\Entity\Marca';
    }
}