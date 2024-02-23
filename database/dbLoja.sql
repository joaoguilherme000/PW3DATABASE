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
primary key(codFunc)
);

-- visualizar as tabelas criadas
show tables;

-- visualizando a estrutura das tabelas
desc tbFuncionarios;

-- conteudo das tabelas
select * from tbFuncionarios;