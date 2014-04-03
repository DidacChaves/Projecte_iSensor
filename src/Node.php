<?php 
/**
 * Node
 *
 * @Table(name="Node")
 * @Entity
 */
class Node
{
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
     * [$ip description]
     * @var string
     * @Column(type="string") 
     */
    private $ip;
   
    /** 
     * [$posicio description]
     * @var string
     * @Column(type="string")
     */
    private $posicio;
    
    
   
    /** 
     * [$DataIntroduccioPila description]
     * @var date
     * @Column(type="date")
     */
    private $DataIntroduccioPila;
   
    /**
     * @OneToMany(targetEntity="Sensor", mappedBy="node") 
     * @var sensors[]
     * 
     *  **/
    private $sensors;
    /**
     * @ManyToMany(targetEntity="GrupNode", inversedBy="nodes") 
     * @var grups[]
     * @JoinTable(name="Node_Grup")
     * 
     *  **/
    private $grups;
    
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
     * Set ip
     *
     * @param string $ip
     * @return Node
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set posicio
     *
     * @param string $posicio
     * @return Node
     */
    public function setPosicio($posicio)
    {
        $this->posicio = $posicio;

        return $this;
    }

    /**
     * Get posicio
     *
     * @return string 
     */
    public function getPosicio()
    {
        return $this->posicio;
    }

    

    /**
     * Set DataIntroduccioPila
     *
     * @param \DateTime $dataIntroduccioPila
     * @return Node
     */
    public function setDataIntroduccioPila($dataIntroduccioPila)
    {
        $this->DataIntroduccioPila = $dataIntroduccioPila;

        return $this;
    }

    /**
     * Get DataIntroduccioPila
     *
     * @return \DateTime 
     */
    public function getDataIntroduccioPila()
    {
        return $this->DataIntroduccioPila;
    }

    /**
     * Add sensors
     *
     * @param \Sensor $sensors
     * @return Node
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

    /**
     * Add grups
     *
     * @param \GrupNode $grups
     * @return Node
     */
    public function addGrup(\GrupNode $grups)
    {
        $this->grups[] = $grups;

        return $this;
    }

    /**
     * Remove grups
     *
     * @param \GrupNode $grups
     */
    public function removeGrup(\GrupNode $grups)
    {
        $this->grups->removeElement($grups);
    }

    /**
     * Get grups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrups()
    {
        return $this->grups;
    }


/*! *********FUNCIONS ESPECIFIQUES************** */








}
