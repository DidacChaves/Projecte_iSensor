<?php
/**
 * Usuari
 *
 * @Table(name="Usuari")
 * @Entity
 */
class Usuari
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
    private $contrasenya;
    
    /** @Column(type="date") **/
    private $UltimaVisita;
   
    /** @Column(type="string",length=255, nullable=false) **/
    private $email;
   
    /**
     * @ManyToMany(targetEntity="Permis", inversedBy="usuaris") 
     * @var permisos[]
     * @JoinTable(name="Usuari_Permis")
     *  **/
    private $permisos;
   
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permisos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Usuari
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
     * Set contrasenya
     *
     * @param string $contrasenya
     * @return Usuari
     */
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;

        return $this;
    }

    /**
     * Get contrasenya
     *
     * @return string 
     */
    public function getContrasenya()
    {
        return $this->contrasenya;
    }

    /**
     * Set UltimaVisita
     *
     * @param \DateTime $ultimaVisita
     * @return Usuari
     */
    public function setUltimaVisita($ultimaVisita)
    {
        $this->UltimaVisita = $ultimaVisita;

        return $this;
    }

    /**
     * Get UltimaVisita
     *
     * @return \DateTime 
     */
    public function getUltimaVisita()
    {
        return $this->UltimaVisita;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuari
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add permisos
     *
     * @param \Permis $permisos
     * @return Usuari
     */
    public function addPermiso(\Permis $permisos)
    {
        $this->permisos[] = $permisos;

        return $this;
    }

    /**
     * Remove permisos
     *
     * @param \Permis $permisos
     */
    public function removePermiso(\Permis $permisos)
    {
        $this->permisos->removeElement($permisos);
    }

    /**
     * Get permisos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPermisos()
    {
        return $this->permisos;
    }
}
