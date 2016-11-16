<?php
namespace Portaria\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class UnidadeTipoService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Portaria\Entity\UnidadeTipo';
        parent::__construct($em);
    }
}