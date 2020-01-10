<?php ob_start(); ?>
<form action='index.php'>
	<input class="boton-basico" type='submit' name='orden' value='Mis archivos'>
</form>
<table id="tabla-usuarios">
	<tr>
		<?php
		$auto = $_SERVER['PHP_SELF'];
		?>
		<?php foreach ($usuarios as $clave => $datosusuario) : ?>		
		<td class="celda">
			<?= $clave?>
		</td> 
		<?php for  ($j=0; $j < count($datosusuario); $j++) :?>
		    <td class="celda"> 
		     	<?=$datosusuario[$j] ?>
			</td>
			<?php endfor;?>
		<td id="celdaPapelera" class="celdaPapelera">
			<a href="#" onclick="confirmarBorrar('<?= $datosusuario[0]."','".$clave."'"?>);" ><img id="papelera" src="web/img/papelera.png"></a>
		</td>
		<td class="celda">
			<a href="<?= $auto?>?orden=Modificar&id=<?= $clave ?>"><img id="papelera" src="web/img/corregir.png"></a>
		</td>
		<td class="celda"> 
			<a href="<?= $auto?>?orden=Detalles&id=<?= $clave?>"><img id="papelera" src="web/img/lupa.png"></a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<form action='index.php'>
	<input class="boton-basico" type='submit' name='orden' value='Cerrar'> 
	<input class="boton-basico" type='submit' name='orden' value='Nuevo'> 
</form>

<?php
$contenido = ob_get_clean();
include_once "principal.php";
?>