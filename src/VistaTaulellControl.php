<?php
/**
 * VistaTaulellControl
 *
 */
class VistaTaulellControl
{
	public function getUltimsError()
    {

    	

        $query = $entityManager->createQuery('SELECT r FROM Registre r WHERE r.sensor.tipusSensor = 0 ORDER BY r.id DESC')->setMaxResults(10);
		$tipusSensor = $query->getResult();
		return $tipusSensor;
    }


}