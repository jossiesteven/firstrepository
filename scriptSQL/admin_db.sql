create database app 1;
character set utf8 collate utf8_unicode_ci;

create database test_practice character set utf8 collate utf8_unicode_ci;
create database test_app character set utf8 collate utf8_unicode_ci;

show databases; 

create user 'steven'@'%' IDENTIFIED by 'admin';

//Dar privilegios al usuario respecto a la base de datos
grant all privileges on test_app.* to 'steven'@'%';

grant update on test_app.* to 'steven'@'%';
grant delete on test_app.* to 'steven'@'%';
grant select  on test_app.* to 'steven'@'%';
grant create on test_app.* to 'steven'@'%';

//Sirve para cambiar contraseña
set password for 'steven'@'%' = password('admin');


//Reparar en caso de requerir
repair table mysql.global_priv;
repair table mysql.db;