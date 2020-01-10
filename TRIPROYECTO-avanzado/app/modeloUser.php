<?php 
/* DATOS DE USUARIO
• Identificador ( 5 a 10 caracteres, no debe existir previamente, solo letras y números)
• Contraseña ( 8 a 15 caracteres, debe ser segura)
• Nombre ( Nombre y apellidos del usuario
• Correo electrónico ( Valor válido de dirección correo, no debe existir previamente)
• Tipo de Plan (0-Básico |1-Profesional |2- Premium| 3- Máster)
• Estado: (A-Activo | B-Bloqueado |I-Inactivo )
*/

function modeloUserInit(){
    
    /*
    $tusuarios = [ 
         "admin"  => ["12345"      ,"Administrado"   ,"admin@system.com"   ,3,"A"],
         "user01" => ["user01clave","Fernando Pérez" ,"user01@gmailio.com" ,0,"A"],
         "user02" => ["user02clave","Carmen García"  ,"user02@gmailio.com" ,1,"B"],
         "yes33" =>  ["micasa23"   ,"Jesica Rico"    ,"yes33@gmailio.com"  ,2,"I"]
        ];
    */
   
    $datosjson = @file_get_contents(FILEUSER) or die("ERROR al abrir fichero de usuarios");
    $tusuarios = json_decode($datosjson, true);
    $_SESSION['tusuarios'] = $tusuarios;      
}

function modeloOkUser($user,$clave){
    return ($user=='admin') && ($clave =='12345');
}

function modeloObtenerTipo($user){
    return "Máster";
}

function modeloUserGetAll (){
    $tuservista=[];
    foreach ($_SESSION['tusuarios'] as $clave => $datosusuario){
        $tuservista[$clave] = [$datosusuario[1],
                               $datosusuario[2],
                               PLANES[$datosusuario[3]],
                               ESTADOS[$datosusuario[4]]
                               ];
    }
    return $tuservista;
}

function modeloUserSave(){
    $datosjon = json_encode($_SESSION['tusuarios']);
    file_put_contents(FILEUSER, $datosjon) or die ("Error al escribir en el fichero.");
}

function modeloUserDel($user){
    unset($_SESSION['tusuarios'][$user]);
    ctlUserVerUsuarios();
    modeloUserSave();
}

function modeloUserGet ($user){
    $usuario[0] = $_SESSION['tusuarios'][$user][0];
    $usuario[1] = $_SESSION['tusuarios'][$user][1];
    $usuario[2] = $_SESSION['tusuarios'][$user][2];
    $usuario[3] = $_SESSION['tusuarios'][$user][3];
    $usuario[4] = $_SESSION['tusuarios'][$user][4];

    return $usuario;
}

function modeloUserUpdate ($user){
    $_SESSION['tusuarios'][$user][0] = $_GET['password'];
    $_SESSION['tusuarios'][$user][1] = $_GET['nombre'];
    $_SESSION['tusuarios'][$user][2] = $_GET['correo'];
    $_SESSION['tusuarios'][$user][3] = $_GET['plan'];
    $_SESSION['tusuarios'][$user][4] = $_GET['estado'];
    modeloUserSave();

}
function modeloUserAdd ($user){
    $_SESSION['tusuarios'][$user][0] = $_GET['password'];
    $_SESSION['tusuarios'][$user][1] = $_GET['nombre'];
    $_SESSION['tusuarios'][$user][2] = $_GET['correo'];
    $_SESSION['tusuarios'][$user][3] = $_GET['plan'];
    $_SESSION['tusuarios'][$user][4] = $_GET['estado'];
    modeloUserSave();
}