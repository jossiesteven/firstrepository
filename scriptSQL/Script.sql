/*Taller*/

create table escuelas (
id integer primary key,
nombre varchar(50),
numero_estudiantes integer
);

create table bibliotecas(
id integer primary key,
nombre varchar(50),
sitio_web varchar(100),
id_escuela int,
foreign key (id_escuela) references escuelas(id)
);

create table libros(
id integer primary key,
nombre varchar(50),
autor varchar(100),
id_biblioteca int,
id_autor int,
foreign key (id_biblioteca) references bibliotecas(id)
foreign key (id_autor) references autores(id)
);

create table autores(
id integer primary key,
nombre varchar(50),
anios varchar(100)
);


insert into autores (id,nombre,anios)
values (1,'Gabriel Garcia Marquez',60),
(2,'Carl Sagan',75),
(3,'Isaac Asimov',80);


/*
create table escuelas (
id integer,
nombre varchar(50),
numero_estudiantes integer
);

create table bibliotecas(
id integer,
nombre varchar(50),
sitio_web varchar(100)
);


create table libros(
id integer,
nombre varchar(50),
autor varchar(100)
);
*/

insert into escuelas (id,nombre,numero_estudiantes)
values (1,'Alfonso Reyes',1000),
(2,'San Jose',1500),
(3,'Llano Oriental',2000);

insert into bibliotecas (id,nombre,sitio_web,id_escuela)
values (1,'Centro Saber','http://centro.saber.co',1),
(2,'Luis Angel Arango','http://arango.com',1),
(3,'Virigilio Barco','http"//virgilio.co',3);


insert into bibliotecas (id,nombre,sitio_web)
values (4,'ABC','http"//abc.co');


insert into libros (id,nombre,id_autor,id_biblioteca)
values (1,'100 años de soledad',1,2),
(2,'Contacto',2,2),
(3,'Yo Robot',3,3);

select * from escuelas;
select numero_estudiantes from escuelas;
select nombre from escuelas;

select * from bibliotecas;
select nombre from bibliotecas;

select * from libros;
select autor from libros;


/*Eliminar tablas*/

drop table libros;

drop table escuelas;

drop table bibliotecas;
