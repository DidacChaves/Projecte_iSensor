<?php

/**
 * Sensor
 *
 * @Table(name="Sensor")
 * @Entity
 */
Class Sensor {

    /**
     * [$id description]
     * @var integer
     * 
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     * 
     */
    private $id;

    /**
     * 
     * [$node description]
     * @var integer
     * @ManyToOne(targetEntity="Node", inversedBy="Sensor")
     *  
     */
    private $node;

    /**
     * 
     * [$tipusSensor description]
     * @var integer
     * @ManyToOne(targetEntity="TipusSensor", inversedBy="Sensor") 
     * 
     */
    private $tipusSensor;

    /**
     * @var registres[]
     * @OneToMany(targetEntity="Registre", mappedBy="sensor")
     */
    protected $registres;

    /** 
     * Retorna la ultima lectura de cada sensor
     * @var string
     * @Column(type="string")
     */
    private $UltimaLectura;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set node
     *
     * @param \Node $node
     * @return Sensor
     */
    public function setNode(\Node $node = null) {
        $this->node = $node;

        return $this;
    }

    /**
     * Get node
     *
     * @return \Node 
     */
    public function getNode() {
        return $this->node;
    }

    /**
     * Set tipusSensor
     *
     * @param \TipusSensor $tipusSensor
     * @return Sensor
     */
    public function setTipusSensor(\TipusSensor $tipusSensor = null) {
        $this->tipusSensor = $tipusSensor;

        return $this;
    }

    /**
     * Get tipusSensor
     *
     * @return \TipusSensor 
     */
    public function getTipusSensor() {
        return $this->tipusSensor;
    }

}
