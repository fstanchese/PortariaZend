<?php
namespace Portaria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Base\Entity\AbstractEntity;

/**
 * Veiculo
 *
 * @ORM\Table(name="veiculo", uniqueConstraints={@ORM\UniqueConstraint(name="placa_UNIQUE", columns={"placa"})}, indexes={@ORM\Index(name="cor_idx", columns={"cor_id"}), @ORM\Index(name="modelo_idx", columns={"modelo_id"}), @ORM\Index(name="morador_idx", columns={"morador_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Portaria\Repository\VeiculoRepository")
*/
class Veiculo extends AbstractEntity
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
     * @ORM\Column(name="placa", type="string", length=8, nullable=false)
     */
    private $placa;

    /**
     * @var \Cor
     *
     * @ORM\ManyToOne(targetEntity="Cor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cor_id", referencedColumnName="id")
     * })
     */
    private $cor;

    /**
     * @var \Modelo
     *
     * @ORM\ManyToOne(targetEntity="Modelo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modelo_id", referencedColumnName="id")
     * })
     */
    private $modelo;

    /**
     * @var \Morador
     *
     * @ORM\ManyToOne(targetEntity="Morador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="morador_id", referencedColumnName="id")
     * })
     */
    private $morador;
    
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getPlaca() {
		return $this->placa;
	}
	public function setPlaca($placa) {
		$this->placa = $placa;
		return $this;
	}
	public function getCor() {
		return $this->cor;
	}
	public function setCor(Cor $cor) {
		$this->cor = $cor;
		return $this;
	}
	public function getModelo() {
		return $this->modelo;
	}
	public function setModelo(Modelo $modelo) {
		$this->modelo = $modelo;
		return $this;
	}
	public function getMorador() {
		return $this->morador;
	}
	public function setMorador(Morador $morador) {
		$this->morador = $morador;
		return $this;
	}
}

