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
   
    /** @Column(type="string", length=255, nullable=false) **/
    private $descripcio;
    
   /**
     * @ManyToMany(targetEntity="Usuari", mappedBy="permisos") 
     * @var usuaris[]
     * 
     *  **/
    private $usuaris;
   
    
}
?>
