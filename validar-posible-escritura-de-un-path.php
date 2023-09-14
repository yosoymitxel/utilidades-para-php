<?php
// Le das las rutas a verificar pero solo escribe en archivo en el destino del path
$rutas = ['/var/www/html/sistema/_lib/tmp/','/var/www/html/prueba/tmp/'];

foreach($rutas as $rutaReporte){
	echo '<table>';
	$arrPGBackup = ['Prueba escritura en: '.$rutaReporte];
	$arrSYBackup = ['Prueba escritura en: '.$rutaReporte];
	
	$parts = explode('/', $rutaReporte);
	$dir = '';
	echo "Ruta actual: $rutaReporte<br>";
	
	
	
	for ($i = 0; $i < count($parts); $i++) {
		$dir .= $parts[$i] . '/';
		
		if($rutaReporte.'/' == $dir){
			break;
		}
		
		if (is_readable($dir)) {
			if ($handle = opendir($dir)) {
				if (false !== ($entry = readdir($handle))) {
					$esW = is_writable($dir) ? 'Se puede escribir' : 'No se puede escribir';
					echo "<tr><td>$dir</td> <td>La carpeta es legible y $esW<td></tr>";
				}
				closedir($handle);
			}
		} else {
			$esW = is_writable($dir) ? 'Se puede escribir' : 'No se puede escribir';
			echo "<tr><td>$dir</td> <td>La carpeta es legible y $esW<td></tr>";
			
			/*$carpeta = $rutaReporte;
			if (!file_exists($carpeta)) {
				mkdir($carpeta, 0777);
				chmod($carpeta, 0777);
			} else {
				chmod($carpeta, 0777);
			}*/
		}
	}
	
	echo '</table>';
	
	try {
		$contenido = implode("\n", array_merge($arrPGBackup,$arrSYBackup));

		$archivo = $rutaReporte."prueba_de_escritura_".date('Y-m-d').".txt";

		if (file_put_contents($archivo, $contenido) !== false) {
			//echo "Archivo creado exitosamente.";
			$contenido_actual = file_get_contents($archivo);
			echo "Contenido actual del archivo:\n" . $contenido_actual;
		} else {
			$contenido_actual = false;
			sc_alert("Error al crear el archivo.");
			throw new Exception("Error al crear el archivo.");
		}

	} catch (Exception $e) {
		$contenido_actual = false;
		sc_alert( "Error de archivo: " . $e->getMessage());
	}

}

	



