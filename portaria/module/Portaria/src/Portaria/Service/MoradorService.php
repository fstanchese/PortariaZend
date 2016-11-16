<?php
namespace Portaria\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;

class MoradorService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Portaria\Entity\Morador';
        parent::__construct($em);
    }
    
    public function save(Array $data = array())
    {
    
    	$data['unidade'] = $this->em->getRepository('Portaria\Entity\Unidade')->find($data['unidade']); 
    	if ($data['cpf'] === '') {
    		$data['cpf'] = null;
    	}
    	if ($data['documento'] === '') {
    		$data['documento'] = null;
    	}
     	if ($data['celular'] === '') {
     		$data['celular'] = null;
     	}
    	if ($data['datanascto'] === '') {
    		$data['datanascto'] = null;
    	}
        return parent::save($data);
    }
}