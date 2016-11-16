<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class BlocoController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\BlocoForm';
        $this->controller = 'bloco';
        $this->route = 'bloco';
        $this->service = 'Portaria\Service\BlocoService';
        $this->entity = 'Portaria\Entity\Bloco';
    }
}