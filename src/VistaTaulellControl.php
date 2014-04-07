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
		$ultimsErrors = $query->getResult();
		return $ultimsErrors;
	}


	public function pintaErrors()
	{	
		?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-bell fa-fw"></i> Panell de Notificacions
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="list-group">
					<?php
					$arrayRegistres = getUltimsError();
					foreach ($arrayRegistres as $key => $registre) {						
					
					echo '<a href="#" class="list-group-item list-group-item-danger">
						<i class="fa fa-warning fa-fw"></i>'. $registre->valor.'
						<span class="pull-right text-muted small"><em>'.$registre->dataHora.'</em>
						</span>
					</a>';
					}
					?>
				</div>
				<a href="Error.html" class="btn btn-default btn-block">Veure tots els errors</a>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	<?php

	}



}