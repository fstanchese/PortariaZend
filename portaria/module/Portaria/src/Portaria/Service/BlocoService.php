<?php
namespace Portaria\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class BlocoService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity 	= 'Portaria\Entity\Bloco';
        parent::__construct($em);
    }
}