drop database Banco;

create database Banco;


use Banco;

CREATE TABLE perguntas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    data_publicacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE respostas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pergunta_id INT,
    descricao TEXT NOT NULL,
    data_publicacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    votos INT DEFAULT 0,
    FOREIGN KEY (pergunta_id) REFERENCES perguntas(id) ON DELETE CASCADE
);



-- visualizar as tabelas criadas
show tables;

-- visualizando a estrutura das tabelas
desc perguntas;

-- conteudo das tabelas
select * from perguntas;