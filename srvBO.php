<?php
	require_once('./includes/incSettings.php');
	require_once('./includes/incSQL.php');
	require_once('./includes/incDB.php');
	
	$lRes= '';
	
	prConnect();
	
	$lAction = $_REQUEST['action'];

	if ($lAction == 'act_instarea') {
		$Nombre = $_REQUEST['Nombre'];
		$Descr = $_REQUEST['Descr'];
		$F_Entrega = $_REQUEST['F_Entrega'];
		if ($Nombre != '') {
			if ($F_Entrega != '') {
				$lCode = fnInsTarea($Nombre, $Descr, $F_Entrega, 1, 0, $ID);
				if ($lCode == 00000) {
					$lRes = array('res' => 1, 'param' => $ID);
				} else {
					$lRes = array('res' => 0);
				}
			} else {
				$lRes = array('res' => -2, 'param' => 'F_Entrega');
			}
		} else {
			$lRes = array('res' => -2, 'param' => ' Nombre');
		}
	} else
		
	if ($lAction == 'act_tareas') {
		$lNoTerminadas = fnTareas(0, 1);
		$lTerminadas = fnTareas(1, 1);
		$lRes = array('res' => 1, 'noterm' => $lNoTerminadas,
			'term' => $lTerminadas);
	} else
		
	if ($lAction == 'act_termtarea') {
		$ID = $_REQUEST['ID'];
		if ($ID != '') {
			$lCode = fnUpdTareaTerm($ID);
			if ($lCode == 00000) {
				$lRes = array('res' => 1);
			} else {
				$lRes = array('res' => 0);
			}
		} else {
			$lRes = array('res' => -2, 'param' => ' ID');
		}
	} else
		
	
	
	
	{
		$lRes = array('res' => -1);	// Comando desconocido
	}
	
	prDisconnect();
	
	echo json_encode($lRes);
?>
