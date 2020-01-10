function confirmarBorrar(nombre,id){
  if (confirm("¿Quieres eliminar el usuario:  "+nombre+"?"))
  {
   document.location.href="?orden=Borrar&id="+id;
  }
}

function desplegar(){
		document.getElementById('form-acceso').style.display="block";
		document.getElementById('desplegar').style.display="none";
		document.getElementById('plegar').style.display="block";
}

function plegar(){
	document.getElementById('form-acceso').style.display="none";
	document.getElementById('plegar').style.display="none";
	document.getElementById('desplegar').style.display="block";
}