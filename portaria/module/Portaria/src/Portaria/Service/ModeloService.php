<?php
namespace Portaria\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class ModeloService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Portaria\Entity\Modelo';
        parent::__construct($em);
    }
    /**
     * @param array $data
     *
     * @return object
     */
    public function save(Array $data = array())
    {
    	$data['marca'] = $this->em->getRepository('Portaria\Entity\Marca')
    	->find($data['marca']);
    	return parent::save($data);
    }
}