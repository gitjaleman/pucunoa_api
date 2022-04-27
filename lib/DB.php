<?php
	class conn extends mysqli{
		function __construct(){
			parent::__construct("localhost","portrans_root","Password.2022+","portrans_data");
			if (mysqli_connect_error()) {
				print("error de conexion");
			}
		}
	}
?>