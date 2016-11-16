<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class MoradorTipoController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\MoradorTipoForm';
        $this->controller = 'moradortipo';
        $this->route = 'moradortipo';
        $this->service = 'Portaria\Service\MoradorTipoService';
        $this->entity = 'Portaria\Entity\MoradorTipo';
    }
}