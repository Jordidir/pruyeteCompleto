<?php ob_start(); ?>
<form action='index.php'>
	<input class="boton-basico" type='submit' name='orden' value='Subir fichero'>
</form>
<table id="tabla-archivos">
	<tr>
		<th class="celda">Nombre</th>
		<th class="celda">Tipo</th>
		<th class="celda">Fecha</th>
		<th class="celda">Tamaño</th>
		<th class="celda" colspan="3">Operaciones</th>
	</tr>
	<tr>
		<td class="celda">algoes.txt</td>
		<td class="celda">img/jpg</td>
		<td class="celda">12/12/2020</td>
		<td class="celda">Grande</td>
		<td id="celdaPapelera" class="celdaPapelera">
			<a href="<?= $auto?>?orden=BorrarArchivo&id=<?= $nombre ?>"><img id="papelera" src="web/img/papelera.png"></a>
		</td>
		<td class="celda">
			<img id="descarga" src="web/img/descarga.png">
		</td>
		<td class="celda"> 
			<img id="compartir" src="web/img/compartir.png">
		</td>
	</tr>
</table>
<form action='index.php'>
	<input class="boton-basico" type='submit' name='orden' value='Cambiar'> 
	<input class="boton-basico" type='submit' name='orden' value='Cerrar'> 
</form>

<?php
$contenido = ob_get_clean();
include_once "principal.php";
?>