<?php
	
	define("SQL_InsTarea", "
		INSERT INTO ttareas
		(Nombre, Descr, F_Entrega, Autor, Terminado)
		VALUES 
		(:Nombre, :Descr, :F_Entrega, :Autor, :Terminado);
	");
	
	define("SQL_Tareas", "
		SELECT ID, Nombre, Descr, F_Entrega, Autor, Terminado
		FROM ttareas
		WHERE
			Terminado = :Terminado
			AND Autor = :Autor;
	");
	
	define("SQL_UpdTareaTerm", "
		UPDATE ttareas
		SET Terminado = 1
		WHERE
			ID = :ID;
	");

?>
