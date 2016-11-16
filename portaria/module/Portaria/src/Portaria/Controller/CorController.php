<?php
namespace Portaria\Controller;

use Base\Controller\AbstractController;

class CorController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Portaria\Form\CorForm';
        $this->controller = 'cor';
        $this->route = 'cor';
        $this->service = 'Portaria\Service\CorService';
        $this->entity = 'Portaria\Entity\Cor';
    }
}