<?php

	function prConnect()
	{
		date_default_timezone_set('America/Mexico_City');
		
		$lConn = new PDO("mysql:host=" . KS_Host . ";dbname=" . KS_Name, 
			KS_User, KS_Pswd);  
		$GLOBALS['gConn']= $lConn;
	} // prConnect
	
	function prDisconnect()
	{
		$lConn= $GLOBALS['gConn'];
		$lConn= NULL;
	} // prDisconnect

	function fnGetDate($pAndTime = false)
	{
		date_default_timezone_set('America/Mexico_City');
		$lDate= date('Y-m-d');
		$lTime= '';
		if ($pAndTime == true)
			$lTime= date(' H:i:s');
		return $lDate . $lTime;
	} // fnGetDate
	
	function fnGetXXX($pYYY)
	{
		$lArr = null;
		
		$lConn= $GLOBALS['gConn'];
		if ($lConn) {
			$lSQL= SQL_GetXXX;
			$lQuery= $lConn->prepare($lSQL);
			$lQuery->bindParam(':pYYY', $pYYY, PDO::PARAM_STR);
			$lQuery->execute();
			while ($lRow = $lQuery->fetch(PDO::FETCH_ASSOC)) {
				$lArr[]= $lRow;
			}
		}
		
		return $lArr;
	} // fnGetXXX
	
	function fnInsTarea($Nombre, $Descr, $F_Entrega, $Autor, $Terminado, &$ID)
	{
		$lCode = -1;
		
		$lConn = $GLOBALS['gConn'];
		if ($lConn) {
			$lSQL = SQL_InsTarea;
			$lQuery= $lConn->prepare($lSQL);
			$lQuery->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);	
			$lQuery->bindParam(':Descr', $Descr, PDO::PARAM_STR);	
			$lQuery->bindParam(':F_Entrega', $F_Entrega, PDO::PARAM_STR);	
			$lQuery->bindParam(':Autor', $Autor, PDO::PARAM_INT);	
			$lQuery->bindParam(':Terminado', $Terminado, PDO::PARAM_INT);
			$lQuery->execute();
			$ID = $lConn->lastInsertId();
			$lCode = $lQuery->errorCode();
		}
		
		return $lCode;
	} // fnInsTarea
	
	function fnTareas($Terminado, $Autor)
	{
		$lArr = null;
		
		$lConn = $GLOBALS['gConn'];
		if ($lConn) {
			$lSQL = SQL_Tareas;
			$lQuery = $lConn->prepare($lSQL);
			$lQuery->bindParam(':Terminado', $Terminado, PDO::PARAM_INT);
			$lQuery->bindParam(':Autor', $Autor, PDO::PARAM_INT);
			$lQuery->execute();
			while ($lRow = $lQuery->fetch(PDO::FETCH_ASSOC)) {
				$lArr[] = $lRow;
				
			}
		}
		
		return $lArr;
	} // fnTareas
	
	function fnUpdTareaTerm($ID)
	{
		$lCode = -1;
		
		$lConn = $GLOBALS['gConn'];
		if ($lConn) {
			$lSQL = SQL_UpdTareaTerm;
			$lQuery = $lConn->prepare($lSQL);
			$lQuery->bindParam(':ID', $ID, PDO::PARAM_INT);	
			$lQuery->execute();
			$lCode = $lQuery->errorCode();
		}
		
		return $lCode;
	} // fnUpdTareaTerm
	
	
?>
