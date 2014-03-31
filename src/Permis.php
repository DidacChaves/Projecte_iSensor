<?php
/**
 * Permis
 *
 * @Table(name="Permis")
 * @Entity
 */
class Permis
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
   
    /** @Column(type="string") **/
    private $nom;

    /** @Column(type="string") **/
    private $zona;
   
    /** @Column(type="string", length=255, nullable=false) **/
    private $descripcio;
    
   /**
     * @ManyToMany(targetEntity="Usuari", mappedBy="permisos") 
     * @var usuaris[]
     * 
     *  **/
    private $usuaris;
   
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuaris = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Permis
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
     * Set descripcio
     *
     * @param string $descripcio
     * @return Permis
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string 
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Add usuaris
     *
     * @param \Usuari $usuaris
     * @return Permis
     */
    public function addUsuari(\Usuari $usuaris)
    {
        $this->usuaris[] = $usuaris;

        return $this;
    }

    /**
     * Remove usuaris
     *
     * @param \Usuari $usuaris
     */
    public function removeUsuari(\Usuari $usuaris)
    {
        $this->usuaris->removeElement($usuaris);
    }

    /**
     * Get usuaris
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuaris()
    {
        return $this->usuaris;
    }
}
