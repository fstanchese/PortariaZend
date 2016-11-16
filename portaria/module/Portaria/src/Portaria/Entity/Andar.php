<?php

namespace Portaria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Base\Entity\AbstractEntity;

/**
 * Andar
 *
 * @ORM\Table(name="andar", uniqueConstraints={@ORM\UniqueConstraint(name="descricao_UNIQUE", columns={"descricao"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Portaria\Repository\AndarRepository")
 *  
*/
class Andar extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string--generate-annotations  module/Portaria/src/Portaria/Entity
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;
    
    public function setId($id) {
    	$this->id = $id;
    	return $this;
    }
	public function getId() {
		return $this->id;
	}	
	public function getDescricao() {
		return $this->descricao;
	}
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
		return $this;
	}	
}

