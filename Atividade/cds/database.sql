-- primerio de tudo entra no xamp shell e faz MySQL -h localhost -u root -p

drop database DB_CDS;

create database DB_CDS;

use DB_CDS;

create table artistas(
cod_art int not null,
nome_art varchar(100) not null unique,
primary key(cod_art));

create table gravadoras(
cod_grav int not null,
nome_grav varchar(50) not null unique,
primary key(cod_grav));

create table categorias(
cod_cat int not null,
nome_cat varchar(50) not null unique,
primary key(cod_cat));

create table estados(
sigla_est char(2) not null,
nome_est varchar(50) not null unique,
primary key(sigla_est));

create table cidades(
cod_cid int not null,
sigla_est char(2) not null,
nome_cid varchar(50) not null,
primary key(cod_cid),
foreign key(sigla_est) references estados(sigla_est));

create table clientes(
cod_cli int not null,
cod_cid int not null,
nome_cli varchar(50) not null,
end_cli varchar(100) not null,
renda_cli decimal (9,2) not null default 0 check (renda_cli >= 0),
sexo_cli char(1) not null default 'f' check (sexo_cli in ('f', 'm')),
primary key(cod_cli),
foreign key(cod_cid) references cidades(cod_cid));

create table conjuge(
cod_conj int not null,
cod_cli int not null,
nome_conj varchar(50) not null,
renda_conj decimal(9,2) not null default 0 check (renda_conj >= 0),
sexo_conj char(1) not null default 'f' check (sexo_conj in ('f', 'm')),
primary key(cod_conj),
foreign key(cod_cli) references clientes(cod_cli));

create table funcionarios(
cod_func int not null,
nome_func varchar(50) not null,
end_func varchar(100) not null,
sal_func decimal(9,2) not null default 0 check (sal_func >= 0),
sexo_func char(1) not null default 'f' check (sexo_func in ('f', 'm')),
primary key(cod_func));

create table dependentes(
cod_dep int not null,
cod_func int not null,
nome_dep varchar(100) not null,
sexo_dep char(1) not null default 'f' check (sexo_dep in ('f', 'm')) ,
primary key(cod_dep),
foreign key(cod_func) references funcionarios(cod_func));

create table titulos(
cod_tit int not null,
cod_cat int not null,
cod_grav int not null,
nome_cd varchar(50) not null unique,
val_cd decimal(9,2) not null check (val_cd > 0),
qtd_estq int not null check (qtd_estq >= 0),
primary key(cod_tit),
foreign key(cod_cat) references categorias(cod_cat),
foreign key(cod_grav) references gravadoras(cod_grav));

create table pedidos(
num_ped int not null,
cod_cli int not null,
cod_func int not null,
data_ped datetime not null,
val_ped decimal(9,2) not null default 0 check (val_ped >= 0),
primary key(num_ped),
foreign key(cod_cli) references clientes(cod_cli),
foreign key(cod_func) references funcionarios(cod_func));

create table titulos_pedido(
num_ped int not null,
cod_tit int not null,
qtd_cd int not null check (qtd_cd >= 1),
val_cd decimal(9,2) not null check (val_cd > 0),
primary key (num_ped, cod_tit),
foreign key(num_ped) references pedidos(num_ped),
foreign key(cod_tit) references titulos(cod_tit));

create table titulos_artista (
cod_tit int not null,
cod_art int not null,
primary key (cod_tit, cod_art),
foreign key (cod_tit) references titulos (cod_tit),
foreign key (cod_art) references artistas (cod_art)
);

-- Inserindo dados na tabela ARTISTAS
INSERT INTO artistas (COD_ART, NOME_ART) VALUES
(1, 'MARISA MONTE'),
(2, 'GILBERTO GIL'),
(3, 'CAETANO VELOSO'),
(4, 'MILTON NASCIMENTO'),
(5, 'LEGIÃO URBANA'),
(6, 'THE BEATLES'),
(7, 'RITA LEE');

-- Inserindo dados na tabela GRAVADORAS
INSERT INTO gravadoras (COD_GRAV, NOME_GRAV) VALUES
(1, 'POLYGRAM'),
(2, 'EMI'),
(3, 'SOM LIVRE'),
(4, 'SOM MUSIC');

-- Inserindo dados na tabela CATEGORIAS
INSERT INTO categorias (COD_CAT, NOME_CAT) VALUES
(1, 'MPB'),
(2, 'TRILHA SONORA'),
(3, 'ROCK INTERNACIONAL'),
(4, 'ROCK NACIONAL');

-- Inserindo dados na tabela ESTADOS
INSERT INTO estados (SIGLA_EST, NOME_EST) VALUES
('SP', 'SÃO PAULO'),
('MG', 'MINAS GERAIS'),
('RJ', 'RIO DE JANEIRO'),
('ES', 'ESPIRITO SANTO');

-- Inserindo dados na tabela CIDADES
INSERT INTO cidades (COD_CID, SIGLA_EST, NOME_CID) VALUES
(1, 'SP', 'SÃO PAULO'),
(2, 'SP', 'SOROCABA'),
(3, 'SP', 'JUNDIAÍ'),
(4, 'SP', 'AMERICANA'),
(5, 'SP', 'ARARAQUARA'),
(6, 'MG', 'OURO PRETO'),
(7, 'ES', 'CACHOEIRA DO ITAPEMIRIM');

-- Inserindo dados na tabela CLIENTES
INSERT INTO clientes (COD_CLI, COD_CID, NOME_CLI, END_CLI, RENDA_CLI, SEXO_CLI) VALUES
(1, 1, 'JOSÉ NOGUEIRA', 'RUA A', 1500.00, 'M'),
(2, 1, 'ÂNGELO PEREIRA', 'RUA B', 2000.00, 'M'),
(3, 1, 'ALÉM MAR PARANHOS', 'RUA C', 1500.00, 'M'),
(4, 1, 'CATARINA SOUZA', 'RUA D', 892.00, 'F'),
(5, 1, 'VAGNER COSTA', 'RUA E', 950.00, 'M'),
(6, 2, 'ANTENOR DA COSTA', 'RUA F', 1582.00, 'M'),
(7, 2, 'MARIA AMÉLIA DE SOUZA', 'RUA G', 1152.00, 'F'),
(8, 2, 'PAULO ROBERTO SILVA', 'RUA H', 3250.00, 'M'),
(9, 3, 'FÁTIMA SOUZA', 'RUA I', 1632.00, 'F'),
(10, 3, 'JOEL DA ROCHA', 'RUA J', 2000.00, 'M');

-- Inserindo dados na tabela CONJUGE
INSERT INTO conjuge (COD_CLI, NOME_CONJ, RENDA_CLI, SEXO_DEP) VALUES
(1, 'CARLA NOGUEIRA', 2500.00, 'F'),
(2, 'EMILIA PEREIRA', 5500.00, 'F'),
(6, 'ALTIVA DA COSTA', 3000.00, 'F'),
(7, 'CARLOS DE SOUZA', 3250.00, 'M');

-- Inserindo dados na tabela FUNCIONARIOS
INSERT INTO funcionarios (COD_FUNC, NOME_FUNC, END_FUNC, SAL_FUNC, SEXO_FUNC) VALUES
(1, 'VÂNIA GABRIELA PEREIRA', 'RUA A', 2500.00, 'F'),
(2, 'NORBERTO PEREIRA DA SILVA', 'RUA B', 300.00, 'M'),
(3, 'OLAVO LINHARES', 'RUA C', 580.00, 'M'),
(4, 'PAULA DA SILVA', 'RUA D', 3000.00, 'F'),
(5, 'ROLANDO ROCHA', 'RUA E', 2000.00, 'M');

-- Inserindo dados na tabela DEPENDENTES
INSERT INTO dependentes (COD_DEP, COD_FUNC, NOME_DEP, SEXO_CLI) VALUES
(1, 1, 'ANA PEREIRA', 'F'),
(2, 1, 'ROBERTO PEREIRA', 'M'),
(3, 1, 'CELSO PEREIRA', 'M'),
(4, 3, 'BRISA LINHARES', 'F'),
(5, 3, 'MARI SOL LINHARES', 'F'),
(6, 4, 'SONIA DA SILVA', 'F');

-- Inserindo dados na tabela TITULOS
INSERT INTO titulos (COD_TIT, COD_CAT, COD_GRAV, NOME_CD, VAL_CD, QTD_ESTQ) VALUES
(1, 1, 1, 'TRIBALISTAS', 30.00, 1500),
(2, 1, 2, 'TROPICÁLIA', 50.00, 500),
(3, 1, 1, 'AQUELE ABRAÇO', 50.00, 600),
(4, 1, 2, 'REFAZENDA', 60.00, 1000),
(5, 1, 3, 'TOTALMENTE DEMAIS', 50.00, 2000),
(6, 1, 3, 'TRAVESSIA', 55.00, 500),
(7, 1, 2, 'COURAGE', 30.00, 200),
(8, 4, 3, 'LEGIÃO URBANA', 20.00, 100),
(9, 3, 2, 'THE BEATLES', 30.00, 300),
(10, 4, 1, 'RITA LEE', 30.00, 500);

-- Inserindo dados na tabela PEDIDOS
INSERT INTO pedidos (NUM_PED, COD_CLI, COD_FUNC, DATA_PED, VAL_PED) VALUES
(1, 1, 2, '02/05/02', 1500.00),
(2, 3, 4, '02/05/02', 50.00),
(3, 4, 7, '02/06/02', 100.00),
(4, 1, 4, '02/02/03', 200.00),
(5, 7, 5, '02/03/03', 300.00),
(6, 4, 4, '02/03/03', 100.00),
(7, 5, 5, '02/03/03', 50.00),
(8, 8, 2, '02/03/03', 50.00),
(9, 2, 2, '02/03/03', 2000.00),
(10, 7, 1, '02/03/03', 3000.00);

-- Inserindo dados na tabela TITULOS_ARTISTA
INSERT INTO titulos_artista (COD_TIT, COD_ART) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 3),
(6, 4),
(7, 4),
(8, 5),
(9, 6),
(10, 7);

-- Inserindo dados na tabela TITULOS_PEDIDO
INSERT INTO titulos_pedido (NUM_PED, COD_TIT, QTD_CD, VAL_CD) VALUES
(1, 1, 2, 30.00),
(1, 2, 3, 20.00),
(2, 1, 1, 50.00),
(2, 2, 3, 30.00),
(3, 1, 2, 40.00),
(4, 2, 3, 20.00),
(5, 1, 2, 25.00),
(6, 2, 3, 30.00),
(6, 3, 1, 35.00),
(7, 4, 2, 55.00),
(8, 1, 4, 60.00),
(9, 2, 3, 15.00),
(10, 7, 2, 15.00);

-- visualizar as tabelas criadas
show tables;

-- visualizando a estrutura das tabelas
desc titulos_artista;

-- conteudo das tabelas
select * from dependentes;