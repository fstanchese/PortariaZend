<?php
namespace Portaria\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;
use Portaria\Entity\Bloco;

class UnidadeService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Portaria\Entity\Unidade';
        parent::__construct($em);
    }
    /**
     * @param array $data
     *
     * @return object
     */
    public function save(Array $data = array())
    {
    	    	
    	$data['unidadetipo'] = $this->em->getRepository('Portaria\Entity\UnidadeTipo')
    	->find($data['unidadetipo']);
    	

		$data['bloco'] = $this->em->getRepository('Portaria\Entity\Bloco')->find($data['bloco']);

    		
    	$data['moradortipo'] = $this->em->getRepository('Portaria\Entity\MoradorTipo')
    	->find($data['moradortipo']);
    	
    	 
    	return parent::save($data);
    }
}