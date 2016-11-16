<?php
namespace Portaria\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class MoradorTipoService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Portaria\Entity\MoradorTipo';
        parent::__construct($em);
    }
}