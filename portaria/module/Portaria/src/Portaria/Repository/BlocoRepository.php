<?php
namespace Portaria\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * BlocoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BlocoRepository extends EntityRepository
{
	public function findAll()
	{
		return $this->findBy(array(), array('descricao' => 'ASC'));
	}
}