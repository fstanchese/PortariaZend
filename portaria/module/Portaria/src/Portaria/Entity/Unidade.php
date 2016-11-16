<?php
namespace Portaria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Base\Entity\AbstractEntity;

/** 
 * Unidade
 *
 * @ORM\Table(name="unidade", indexes={@ORM\Index(name="UnidadeTipo_idx", columns={"unidadetipo_id"}), @ORM\Index(name="Bloco_idx", columns={"bloco_id"}), @ORM\Index(name="MoradorTipo_idx", columns={"moradortipo_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Portaria\Repository\UnidadeRepository")
 */
class Unidade extends AbstractEntity
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
     * @var string
     *
     * @ORM\Column(name="ramal", type="string", length=10, nullable=true)
     */
    private $ramal;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="vagas", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $vagas;

    /**
     * @var \Bloco
     *
     * @ORM\ManyToOne(targetEntity="Bloco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bloco_id", referencedColumnName="id")
     * })
     */
    private $bloco;

    /**
     * @var \MoradorTipo
     *
     * @ORM\ManyToOne(targetEntity="Moradortipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="moradortipo_id", referencedColumnName="id")
     * })
     */
    private $moradorTipo;

    /**
     * @var \UnidadeTipo
     *
     * @ORM\ManyToOne(targetEntity="Unidadetipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidadetipo_id", referencedColumnName="id")
     * })
     */
    private $unidadeTipo;
    
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getDescricao() {
		return $this->descricao;
	}
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
		return $this;
	}
	public function getRamal() {
		return $this->ramal;
	}
	public function setRamal($ramal) {
		$this->ramal = $ramal;
		return $this;
	}
	public function getTelefone() {
		return $this->telefone;
	}
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
		return $this;
	}
	public function getVagas() {
		return $this->vagas;
	}
	public function setVagas($vagas = 1) {
		$this->vagas = $vagas;
		return $this;
	}
	public function getBloco() {
		return $this->bloco;
	}
	public function setBloco(Bloco $bloco = null) {
		$this->bloco = $bloco;
		return $this;
	}
	public function getMoradorTipo() {
		return $this->moradorTipo;
	}
	public function setMoradorTipo(MoradorTipo $moradorTipo) {
		$this->moradorTipo = $moradorTipo;
		return $this;
	}
	public function getUnidadeTipo() {
		return $this->unidadeTipo;
	}
	public function setUnidadeTipo(UnidadeTipo $unidadeTipo) {
		$this->unidadeTipo = $unidadeTipo;
		return $this;
	}
}

