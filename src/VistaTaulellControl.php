<?php
/**
 * VistaTaulellControl
 *
 */
class VistaTaulellControl
{
	public function getUltimsError()
    {

    	Query::setMaxResults(10);

        $query = $entityManager->createQuery('SELECT r FROM Registre r WHERE r.sensor.tipusSensor = 0');
		$tipusSensor = $query->getResult();

    }


}