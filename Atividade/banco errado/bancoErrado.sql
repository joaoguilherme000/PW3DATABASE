create table tbFuncionarios(
    codFunc int not null,
    nome varchar(100),
    email var(100),
    telCel char(10),
    sexo char(1) default "F" check(sexo in('F','M')),
    salario decimal(9,2) default 0 check(salario >= 0),
    primary key(codFunc)
);

create table tbfornecedores(
    codForn int not null,
    nome varchar(100),
    cnpj char(18) unique,
    primary key(codForn)
);

create table tbClientes(
    codCli int not null,
    nome varchar(100),
    email varchar(100),
    cpf char(14) unique,
    primary key(codCli)
);

create table tbUsuarios(
    codUsu int not null,
    nome varchar(100) not null,
    senha varchar(10) not null,
    codFuncionario int not null,
    primary key(codUsu),
    foreign key (codFuncionario) references tbFuncionarios(codFunc)
);