-- primerio de tudo entra no xamp shell e faz MySQL -h localhost -u root -p

-- source c:\script_sql\exemplo.sql

-- apagar banco de dados
drop database dbloja;

-- criando database
create database dbloja;

-- acessando database
use dbloja;

-- criando as tabelas

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
desc tbPessoa;

-- conteudo das tabelas
select * from tbPessoa;
