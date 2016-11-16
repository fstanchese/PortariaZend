<?php
namespace Portaria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Base\Entity\AbstractEntity;

/**
 * Morador
 *
 * @ORM\Table(name="morador", uniqueConstraints={@ORM\UniqueConstraint(name="cpf_UNIQUE", columns={"cpf"})}, indexes={@ORM\Index(name="Unidade_idx", columns={"unidade_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Portaria\Repository\MoradorRepository")
 */
class Morador extends AbstractEntity
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=11, nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=15, nullable=true)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datanascto", type="date", nullable=true)
     */
    private $datanascto;

    /**
     * @var \Unidade
     *
     * @ORM\ManyToOne(targetEntity="Unidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidade_id", referencedColumnName="id")
     * })
     */
    private $unidade;
    
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
	public function getCpf() {
		return $this->cpf;
	}
	public function setCpf($cpf) {
		$this->cpf = $cpf;
		return $this;
	}
	public function getDocumento() {
		return $this->documento;
	}
	public function setDocumento($documento) {
		$this->documento = $documento;
		return $this;
	}
	public function getCelular() {
		return $this->celular;
	}
	public function setCelular($celular) {
		$this->celular = $celular;
		return $this;
	}
	public function getDatanascto() {
		if($this->datanascto instanceof \DateTime)
		{
    		return $this->datanascto->format('d-m-Y');
		} 
		else 
		{
			return '';
		}	
	}
	public function setDatanascto($datanascto) {
		if (!isset($datanascto))
		{
			$this->datanascto = null;
		} 
		else 
		{
			$this->datanascto =  new \DateTime ($datanascto);				
		}
		return $this;
	}	
	public function getUnidade() {
		return $this->unidade;
	}
	public function setUnidade(Unidade $unidade) {
		$this->unidade = $unidade;
		return $this;
	}	
}

