<?php
namespace Portaria\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * CorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CorRepository extends EntityRepository
{
	public function findAll()
	{
		return $this->findBy(array(), array('descricao' => 'ASC'));
	}
}