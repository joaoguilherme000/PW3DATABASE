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
    values(1,'Jorge da Silva','96723-8346');
insert into tbMedico(idMedico,nmMedico,telefoneMedico)
    values(2,'Roberta Gomes','96624-8652');
insert into tbMedico(idMedico,nmMedico,telefoneMedico)
    values(3,'Silvana Lima','94364-5312');
insert into tbMedico(idMedico,nmMedico,telefoneMedico)
    values(4,'Maria Oliveira','97654-3210');
insert into tbMedico(idMedico,nmMedico,telefoneMedico)
    values(5,'Pedro Santos','94321-0987');

insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(1,'Maria das Neves','90253-2354','sem convenio');
insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(2,'José Rodrigues','95132-6432','');
insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(3,'Lucas Lira','95312-1346','com convenio');
insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(4,'Carlos Oliveira','97654-3210','convenio trabalhista');
insert into tbPaciente(idPaciente,nmPaciente,telefonePaciente,convenio)
    values(5,'Mariana Silva','97654-3210','');

insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(1,'Paracetamol 500mg - Tomar 1 comprimido a cada 6 horas');
insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(2,'Amoxicilina 500mg - Tomar 1 comprimido de 8 em 8 horas');
insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(3,'Dipirona 1g - Tomar 12 comprimidos a cada 12 horas');
insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(4,'Sinvastatina 20mg - Tomar 1 comprimido à noite após a refeição');
insert into tbReceitaMedica(idReceitaMedica,descricao)
    values(5,'Omeprazol 20mg - Tomar 1 comprimido antes do café da manhã');

insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(1,'2024/09/11',1,1,1);
insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(2,'2024/07/09',2,2,2);
insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(3,'2024/06/24',3,3,3);
insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(4,'2024/08/21',4,4,4);
insert into tbConsulta(idConsulta,dt_consulta,Medico_idMedico,Paciente_idPaciente,ReceitaMedica_idReceitaMedica)
    values(5,'2024/02/07',5,5,5);

 
-- o conteúdo das tabelas
select * from tbMedico;
select * from tbPaciente;
select * from tbReceitaMedica;
select * from tbConsulta;