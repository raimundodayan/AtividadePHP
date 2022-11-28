create database Atividade;
use Atividade;

create table Login_usuarios(
Nome varchar(10),
Senha int (10),
Id int (10) primary key not null auto_increment,
Cpf int(11)
);

Create table Anotacao(
Id_login int (10) not null auto_increment , 
Titulo varchar (30),
Texto varchar (100),
Assinatura varchar (20),
foreign key (Id_login) references Login_usuarios (Id)
);





select * from Anotacao;
select * from Login_usuarios;

drop table Login_usuarios;
drop table Anotacao;