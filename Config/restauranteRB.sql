
    use RestauranteRB;

    CREATE TABLE Establecimiento (
        Id_Establecimiento INT(6) AUTO_INCREMENT PRIMARY KEY,
        Nombre_sede VARCHAR(30),
        Ciudad VARCHAR(20),
        Tipo_de_mesa VARCHAR(15),
        Responsable INT(10),
        Mesero VARCHAR(50)
    );

    CREATE TABLE Orden(
        Id_orden INT(6) AUTO_INCREMENT PRIMARY KEY,
        Fecha_orden date,
        Hora_orden TIME(6),
        Codigo_orden INT(10),
        Id_usuario INT(6),
        Id_pagos INT(6)
    );

    CREATE TABLE Pagos(
        Id_pagos INT(6)PRIMARY KEY AUTO_INCREMENT,
        Tipo_pago VARCHAR(15),
        Cantidad_pago INT(10)
    );

    CREATE TABLE Usuario(
        Id_usuario INT(6)AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(30),
        Apellido VARCHAR(30),
        Documento INT(10),
        Telefono INT(10),
        Correo_electronico VARCHAR(50),
        Contrasena VARCHAR(30),
        Tipo_usuario VARCHAR(15)
    );

    CREATE TABLE Producto(
        Id_producto INT(6) AUTO_INCREMENT PRIMARY KEY,
        Nombre_producto VARCHAR(10),
        Precio_producto INT(10),
        Tipo_producto VARCHAR(10)
    );

    /*------------------tablas intermedias-------------------*/

    CREATE TABLE Orden_Establecimiento(
        Id_orden INT(6),
        Id_establecimiento INT(6),
        PRIMARY KEY (Id_orden, Id_establecimiento),
        FOREIGN KEY (Id_orden) REFERENCES Orden(Id_orden),
        Foreign Key (Id_establecimiento) REFERENCES Establecimiento(Id_establecimiento)
    );

    CREATE TABLE Orden_Producto(
        Id_orden INT(6),
        Id_producto INT(6),
        Foreign Key (Id_orden) REFERENCES Orden(Id_orden),
        Foreign Key (Id_producto) REFERENCES producto(Id_producto)
    );
     /*RELACIONES */
      /*------------------ USUARIO - ORDEN -------------------*/
    ALTER TABLE Orden ADD CONSTRAINT FK_ID1 FOREIGN KEY (Id_usuario) REFERENCES Usuario (Id_usuario);

        /*------------------ PAGOS - ORDEN -------------------*/
    ALTER TABLE Orden ADD CONSTRAINT FK_ID2 FOREIGN KEY (Id_pagos) REFERENCES Pagos (Id_pagos);

SELECT User, Host FROM mysql.user;
