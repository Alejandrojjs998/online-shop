CREATE DATABASE tienda;
USE tienda



CREATE TABLE articulos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre text,
    descripcion text,
    foto text,
    precio float
);


INSERT INTO articulos nombre,descripcion,foto,precio VALUES ("Chuleton de ternera","Chuleton de ternera hecho a la brasa","chuletonternera.jpg",9);

INSERT INTO articulos (nombre,descripcion,foto,precio)
VALUES ("Chuleton de ternera","Chuleton de ternera hecho en horno de piedra","chuletonternera.jpg",9);
/*
INSERT INTO articulos (nombre,descripcion,foto,precio)
VALUES ("Pollo a la brasa","Muslos de pollos dehuesados hechos a la brasa","polloasado.jpg",4.5);


INSERT INTO articulos (nombre,descripcion,foto,precio)
VALUES ("Pizza Con Peperoni","Una suave masa de pizza con una base de queso con peperoni","pizzapeperoni.jpg",4.5);

INSERT INTO articulos (nombre,descripcion,foto,precio)
VALUES ("Pizza Barbacoa","Una pizza para los amantes de la carne con salsa barbacoa","pizzabarbacoa.jpg",10.5);

INSERT INTO articulos (nombre,descripcion,foto,precio)
VALUES ("Ensalada mixta","Una refrescante ensalada mixta","ensalada.jpg",4);
*/



INSERT INTO articulos (nombre,descripcion,foto,precio)
VALUES ("Croquetas de jamon","Croquetas de queso Roquefort con virutas de salmon","croquetas.png",5);