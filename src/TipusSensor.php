<?php
/**
 * TipusSensors
 *
 * @Table(name="TipusSensor")
 * @Entity
 */
class TipusSensor
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
    * @var string
    * 
    * @Column(name="nom", type="string", length=255, nullable=false)
    */
    private $nom;

    /**
     * @var string
     * 
     * @Column(name="unitat", type="string", length=255, nullable=true)
     */
    private $unitat;

    /**
     * @var Sensors[]
     * @OneToMany(targetEntity="Sensor", mappedBy="TipusSensor")
     */
    protected $sensors;
    /**
     * Indica si la dada sera de tiups: INT, String, Float. Per despres poder fer els càlculs
     * 
     * @var string
     * 
     * @Column(name="tipusDada", type="string", length=255, nullable=false)
     */
    private $tipusDada;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sensors = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nom
     *
     * @param string $nom
     * @return TipusSensor
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set unitat
     *
     * @param string $unitat
     * @return TipusSensor
     */
    public function setUnitat($unitat)
    {
        $this->unitat = $unitat;

        return $this;
    }

    /**
     * Get unitat
     *
     * @return string 
     */
    public function getUnitat()
    {
        return $this->unitat;
    }

    /**
     * Set tipusDada
     *
     * @param string $tipusDada
     * @return TipusSensor
     */
    public function setTipusDada($tipusDada)
    {
        $this->tipusDada = $tipusDada;

        return $this;
    }

    /**
     * Get tipusDada
     *
     * @return string 
     */
    public function getTipusDada()
    {
        return $this->tipusDada;
    }

    /**
     * Add sensors
     *
     * @param \Sensor $sensors
     * @return TipusSensor
     */
    public function addSensor(\Sensor $sensors)
    {
        $this->sensors[] = $sensors;

        return $this;
    }

    /**
     * Remove sensors
     *
     * @param \Sensor $sensors
     */
    public function removeSensor(\Sensor $sensors)
    {
        $this->sensors->removeElement($sensors);
    }

    /**
     * Get sensors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSensors()
    {
        return $this->sensors;
    }
}
