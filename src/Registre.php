<?php
/**
 * registres
 *
 * @Table(name="Registre")
 * @Entity
 */
class Registre
{
	/**
    * @var integer
    *
    * @Column(name="id", type="integer", nullable=false)
    * @Id
    * @GeneratedValue(strategy="IDENTITY")
    */
    private $id;

    /**
     * @var datetime
     * 
     * @Column(name="dataHora", type="datetime", nullable=false)
     */
    private $dataHora;

    /**
     * @var string
     * 
     * @Column(name="valor", type="string", length=255, nullable=false)
     */
     private $valor;

     /**
     * @var integer
     * @ManyToOne(targetEntity="Sensor", inversedBy="registre")
     */
    private $sensor;
  

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dataHora
     *
     * @param \DateTime $dataHora
     * @return Registre
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;

        return $this;
    }

    /**
     * Get dataHora
     *
     * @return \DateTime 
     */
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Registre
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set sensor
     *
     * @param \Sensor $sensor
     * @return Registre
     */
    public function setSensor(\Sensor $sensor = null)
    {
        $this->sensor = $sensor;

        return $this;
    }

    /**
     * Get sensor
     *
     * @return \Sensor 
     */
    public function getSensor()
    {
        return $this->sensor;
    }
}
