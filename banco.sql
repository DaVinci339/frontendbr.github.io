create database aprendi;
use aprendi;

create table usuario(
id_usuario int not null primary key auto_increment,
nome_usuario varchar (100) not null,
email_usuario varchar (100) not null,
senha_usuario varchar (20) not null
);

select*from usuario;
