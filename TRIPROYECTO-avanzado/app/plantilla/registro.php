<?php

ob_start();

?>

<?php
$auto = $_SERVER['PHP_SELF'];

?>
<form id="form-registro" action='index.php' method="GET">
	<label>Usuario</label><input class="cuadro" name="usuario" type="text"><br>
	<label>Nombre</label><input class="cuadro" name="nombre" type="text"><br>
	<label>Correo electrónico</label><input class="cuadro" name="correo" type="text"><br>
	<label>Contraseña</label><input class="cuadro" name="password" type="text"><br>
	<label>Estado</label>
		<select name="estado">
			<option id="activo" value='A'>Activo</option>
			<option id="block" value='B'>Bloqueado</option>
			<option id="desactivo" value='I'>Desactivado</option>
		</select>
	<br>
	<label>Plan</label>
		<select id="planes" name="plan">
			<option value='0'>Básico</option>
			<option value='1'>Profesional</option>
			<option value='2'>Premium</option>
			<option value='3'>Máster</option>		
		</select>
	<br>
	<input class="boton-basico" type='submit' name='orden' value="Registrar">
	<input class="boton-basico" type='submit' value='Cancelar'>
</form>

<?php

$contenido = ob_get_clean();
include_once "principal.php";
?>