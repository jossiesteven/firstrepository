/*Consultas*/

select *
from libros 
where nombre is not null; 

select *
from libros 
where nombre is null; 

select *
from libros 
where id>2;


/*Actualizaciones*/

update libros
set nombre = "Oscuridad Visible"
where id = 3;

update libros
set autor = "Isaac Asimov"
where autor = "Issac Asimov";

update libros
set nombre = "La Fundación"
where nombre is null;

update libros
set nombre = null l
where autor = 'c';


/*Eliminaciones*/

delete from libros 
where id is null;

delete from libros 
where autor = 'e';

delete from libros 
where autor is null;

delete from libros 
where autor is null and nombre is null;
