USE tienda;

CREATE TABLE usuarios(
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nombreUsuario varchar(30),
    Password varchar(20),
    fechaInsercion DATE,
    rol varchar(2)
);



  insert into usuarios (nombreUsuario, Password, fechaInsercion, Rol) VALUES ("root","root","2022/02/10","a");

  DELETE FROM usuarios WHERE nombreUsuario='pepe';

  insert into usuarios (nombreUsuario, Password, fechaInsercion, Rol) VALUES ("juan","contra","2022/02/18","u");