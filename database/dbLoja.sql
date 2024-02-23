-- primerio de tudo entra no xamp shell e faz MySQL -h localhost -u root -p

-- apagar banco de dados
drop database dbloja;

-- criando database
create database dbloja;

-- acessando database
use dbloja;

-- criando as tabelas
create table tbFuncionarios(
codFunc int not null auto_increment,
nome varchar(100),
email varchar(100),
telCel char(10),
sexo char(1) default "F" check(sexo in ("F", "M")),
salario decimal(9,2) default 0 check(salario >= 0),
primary key(codFunc));

create table tbUsuarios(
codUsu int not null auto_increment,
nome varchar(30) not null,
senha varchar(30) not null,
codFunc int not null,
primary key(codUsu),
foreign key(codFunc) references tbFuncionarios(codFunc));

-- visualizar as tabelas criadas
show tables;

-- visualizando a estrutura das tabelas
desc tbFuncionarios;
desc tbUsuarios;

-- conteudo das tabelas
select * from tbFuncionarios;
select * from tbUsuarios;
