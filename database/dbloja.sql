-- primerio de tudo entra no xamp shell e faz MySQL -h localhost -u root -p

-- source c:\script_sql\exemplo.sql

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

create table tbPessoa(
nome varchar(30),
sobrenome varchar(30),
idade int
);

-- insert into tbPessoa(nome,sobrenome,idade)
    -- values("Etec", "Irmã Agostina", 11);

-- visualizar as tabelas criadas
show tables;

-- visualizando a estrutura das tabelas
desc tbFuncionarios;
desc tbUsuarios;
desc tbPessoa;

-- conteudo das tabelas
select * from tbFuncionarios;
select * from tbUsuarios;
select * from tbPessoa;
