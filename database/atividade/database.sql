-- apagar banco de dados
drop database hospital;
 
-- criando o banco de dados
create database hospital;
 
-- acessando banco de dados
use hospital;
 
-- criando as tabelas
create table tbMedico(
idMedico int not null auto_increment,
nmMedico varchar(45) not null,
telefoneMedico varchar(15) not null,
primary key(idMedico));
 
create table tbPaciente(
idPaciente int not null auto_increment,
nmPaciente varchar(45) not null,
telefonePaciente varchar(18) not null,
convenio varchar(45),
primary key(idPaciente));
 
create table tbReceitaMedica(
idReceitaMedica int not null auto_increment,
descricao varchar(500),
primary key(idReceitaMedica));

create table tbConsulta(
idConsulta int not null auto_increment,
dt_consulta datetime,
Medico_idMedico int,
Paciente_idPaciente int not null,
ReceitaMedica_idReceitaMedica int not null,
primary key(idConsulta),
foreign key(Medico_idMedico) references tbMedico(idMedico),
foreign key(Paciente_idPaciente) references tbPaciente(idPaciente),
foreign key(ReceitaMedica_idReceitaMedica) references tbReceitaMedica(idReceitaMedica)
);
 
-- visualizar as tabelas criadas
show tables;
 
-- visualizando a estrutura das tabelas
desc tbMedico;
desc tbPaciente;
desc tbReceitaMedica;
desc tbConsulta;
 
-- Inserindo registros nas tabelas
 
insert into tbMedico(idMedico,nmMedico,telefoneMedico)
    values(1,'Jorge da Silva','96243-8346');
insert into tbMedico(idMedico,nmMedico,telefoneMedico)
    values(2,'Roberta Gomes','96243-8652');
insert into tbMedico(idMedico,nmMedico,telefoneMedico)
    values(3,'Silvana Lima','94364-5312');

insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(1,'Maria das Neves','90253-2354','sem convenio');
insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(2,'José Rodrigues','95132-6432','');
insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(3,'Lucas Lira','95312-1346','com convenio');

insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(1,'');
insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(2,'Tomar a cada 8 horas');
insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(3,'Tomar todos os dias');

insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(1,'2024/09/11',1,1,1);
insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(2,'2024/07/09',2,2,2);
insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(3,'2024/06/24',3,3,3);

 
-- o conteúdo das tabelas
select * from tbMedico;
select * from tbPaciente;
select * from tbReceitaMedica;
select * from tbConsulta;