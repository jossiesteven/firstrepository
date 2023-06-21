/*Actualización y eliminación registros*/

select *
from empleados;

/*Actualización*/

update empleados 
set salario=1200000;

update empleados 
set salario=800000, edad=20
where id=6;

update empleados 
set salario=1000000, edad=60
where nombre'Carlos';


update empleados 
set salario=1100
where id=6;


update empleados 
set salario=3300
where nombre='Carlos' and edad=18;


/*Eliminación*/

delete from empleados 
where id=5;

delete from empleados 
where id=7;

delete from empleados 
where nombre='gloria';

delete from empleados 
where nombre='carlos' and edad=60;

/*Consultas compuestas*/

select * 
from empleados 
where nombre='juan';

select * 
from empleados 
where edad<30;


select * 
from empleados 
where edad>30;

select * 
from empleados 
where edad>30 and salario<1000000;

select * 
from empleados 
where edad<30 and salario>1000000;

select id, nombre, salario
from empleados e where salario is null;

select id, nombre, salario
from empleados e where salario is not null;

select nombre, edad
from empleados 
where edad<>18;

select * 
from empleados 
where edad>30 or salario<1000000;





/*>,<,>,<>*/






