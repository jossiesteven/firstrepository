/*Conteo*/

select * 
from libros 

select id,nombre,id_biblioteca as identificador_biblioteca
from libros

select count(*) as conteo_registros
from libros 

/*Sumatoria*/

select * 
from escuelas e 

select sum(numero_estudiantes) as numero_estudiantes
from escuelas e


/*Promedio*/

select avg(numero_estudiantes) as promedio_numero_estudinates
from escuelas e 

/*Mostrar los registros no repetidos*/

select distinct * 
from empleados e

select distinct salario,edad 
from empleados e


/*Agrupaciones*/

select salario, count(*) numero_empleados
from empleados e 
group by salario

select nombre, count(*) numero_registros_nombre
from empleados e 
group by nombre






