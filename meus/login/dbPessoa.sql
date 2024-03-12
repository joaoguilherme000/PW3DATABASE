drop database dbPessoa;

create database dbPessoa;


use dbPessoa;

CREATE TABLE tbPessoa(
codigo int not null auto_increment,
nome VARCHAR(100),
idade INT,
primary key(codigo));

-- insert into tbPessoa(nome,sobrenome,idade)
    -- values("Etec", "Irmã Agostina", 11);

-- visualizar as tabelas criadas
show tables;

-- visualizando a estrutura das tabelas
desc tbPessoa;

-- conteudo das tabelas
select * from tbPessoa;
