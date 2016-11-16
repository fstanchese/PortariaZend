<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class UnidadeTipoController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\UnidadeTipoForm';
        $this->controller = 'unidadetipo';
        $this->route = 'unidadetipo';
        $this->service = 'Portaria\Service\UnidadeTipoService';
        $this->entity = 'Portaria\Entity\UnidadeTipo';
    }
}