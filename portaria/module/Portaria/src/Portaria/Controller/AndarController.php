<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class AndarController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\AndarForm';
        $this->controller = 'andar';
        $this->route = 'andar';
        $this->service = 'Portaria\Service\AndarService';
        $this->entity = 'Portaria\Entity\Andar';
    }
}