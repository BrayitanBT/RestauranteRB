<?php

#Llamar a la conexion
require_once "conexion.php";

try{
    #Instanciar clase para la conexion
    $db = Database::connection();
    $email = "admin@gmail.com";

    #Consultar si ese usuario se encuentra registrado
    $consul = $db -> prepare("SELECT * FROM Usuario WHERE Correo_electronico = :Email");
    $consul -> execute([":Email" => $email]);

    #Registrar los datos de usuario y contraseña
    if(!$consul -> fetch()){
        $pass = password_hash("admin",PASSWORD_BCRYPT);
        
        #Crear INSERT
        $sql = "INSERT INTO Usuario(Nombre,Apellido,Documento,Telefono,Correo_electronico,Contrasena,Tipo_usuario) VALUES('Admin','Principal','1023373319','3228518167',:Email,:Contrasena,'Administrador')";
        $consult = $db -> prepare($sql);
        $consult -> execute([":Email" => $email,":Contrasena" => $pass]);
        echo "Usuario Admin Creado";
    
    }else{
        echo "Administrador ya existe";
    }

}catch(PDOException $e){
    die("Error".$e -> getMessage());
}
?>