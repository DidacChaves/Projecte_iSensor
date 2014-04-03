<?php
/**
 * GrupNode
 *
 * @Table(name="GrupNode")
 * @Entity
 */
class GrupNode
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
    * [$nom description]
    * @var string
    * @Column(type="string") 
    */
    private $nom;
   /**
     * @ManyToMany(targetEntity="Node", mappedBy="grups") 
     * @var nodes[]
     * 
     *  **/
    private $nodes;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nodes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return GrupNode
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
     * Add nodes
     *
     * @param \Node $nodes
     * @return GrupNode
     */
    public function addNode(\Node $nodes)
    {
        $this->nodes[] = $nodes;

        return $this;
    }

    /**
     * Remove nodes
     *
     * @param \Node $nodes
     */
    public function removeNode(\Node $nodes)
    {
        $this->nodes->removeElement($nodes);
    }

    /**
     * Get nodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNodes()
    {
        return $this->nodes;
    }

}
