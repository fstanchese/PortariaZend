<?php
namespace Portaria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Base\Entity\AbstractEntity;

/**
 * Modelo
 *
 * @ORM\Table(name="modelo", indexes={@ORM\Index(name="marca_idx", columns={"marca_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Portaria\Repository\ModeloRepository")
 */
class Modelo extends AbstractEntity
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
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;

    /**
     * @var \Marca
     *
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marca_id", referencedColumnName="id")
     * })
     */
    private $marca;
    
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
	public function getMarca() {
		return $this->marca;
	}
	public function setMarca(Marca $marca) {
		$this->marca = $marca;
		return $this;
	}
}

