drop database banco;

create database banco;

use banco;

CREATE TABLE tbPessoa(
codigo int not null auto_increment,
nome VARCHAR(20) not null,
sobrenome VARCHAR(25) not null,
email VARCHAR(54) not null,
CPF VARCHAR(15) not null,
sexo char(1) default "O" check(sexo in('F','M','O')),
usuario VARCHAR(33) not null,
senha VARCHAR(13) not null,
primary key(codigo));

show tables;

desc tbPessoa;

-- conteudo das tabelas
select * from tbPessoa;
