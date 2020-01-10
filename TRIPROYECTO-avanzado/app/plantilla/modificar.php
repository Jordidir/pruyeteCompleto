<?php

ob_start();
			switch ($usuario[3]) {
			case '0':
				$salida='Básico';
				break;
			case '1':
				$salida='Profesional';
				break;
			case '2':
				$salida='Premium';
				break;	
			case '3':
				$salida='Máster';
				break;						
		}
?>

<?php
$auto = $_SERVER['PHP_SELF'];

?>
<form id="form-modificar" action='index.php' method="GET">
	<label>Identificador</label><input class="cuadro" name="usuario" type="text" value="<?= $_GET['id'] ?>" disabled><br>
	<input class="cuadro-oculto" name="usuario" type="text" value="<?= $_GET['id'] ?>" hidden>
	<label>Nombre</label><input class="cuadro" name="nombre" type="text" value="<?= $usuario[1] ?>"><br>
	<label>Correo electrónico</label><input class="cuadro" name="correo" type="text" value="<?= $usuario[2] ?>"><br>
	<label>Contraseña</label><input class="cuadro" name="password" type="text" value="<?= $usuario[0] ?>"><br>
	<label >Estado</label>
		<select name="estado">
			<option value='A'>Activo</option>
			<option value='B'>Bloqueado</option>
			<option value='I'>Desactivado</option>
		</select>
	<br>
	<label>Plan</label><input class="cuadro" name="plan" type="text" value="<?= $salida ?>" disabled>
	<input class="cuadro-oculto" name="plan" type="text" value="<?= $usuario[3] ?>" hidden><br>
	<input class="boton-basico" type='submit' name='orden' value="Aceptar">
	<input class="boton-basico" type='submit' value='Cancelar'>
</form>

<?php

$contenido = ob_get_clean();
include_once "principal.php";
?>