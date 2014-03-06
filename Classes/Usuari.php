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
   
    
}

?>
