<?php
namespace Portaria\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class VeiculoService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Portaria\Entity\Veiculo';
        parent::__construct($em);
    }
    
    public function save(Array $data = array())
    {
    
    	$data['cor'] = $this->em->getRepository('Portaria\Entity\Cor')->find($data['cor']); 
    	$data['marca'] = $this->em->getRepository('Portaria\Entity\Marca')->find($data['marca']);
    	$data['modelo'] = $this->em->getRepository('Portaria\Entity\Modelo')->find($data['modelo']);
    	$data['morador'] = $this->em->getRepository('Portaria\Entity\Morador')->find($data['morador']);
        return parent::save($data);
    }
}