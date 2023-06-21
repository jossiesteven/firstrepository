/*Actualización y eliminación registros*/

select *
from empleados;

/*Actualización*/

update empleados 
set salario=1200000;

update empleados 
set salario=800000, edad=20
where id=6;

