-- Para visualizar todos os bancos de dados --
SHOW DATABASES;

-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- Selecionar um banco de dados --
USE db_escola;

-- Para criar uma tabela --
CREATE TABLE tb_professor (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);

-- Para listar todas as tabelas --
SHOW TABLES;

-- EXERCÍCIO 1: Criar a tabela tb_aluno, que tem as colunas nome, cpf, email e matricula --
CREATE TABLE tb_alunos (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) NOT NULL,
  email VARCHAR(255) NOT NULL,
  matricula VARCHAR(10) NOT NULL
);

-- Para inserir dados --
INSERT INTO tb_professor (nome, email, cpf)
VALUES (
  'Alessandro', 
  'ale@email.com', 
  '12345678912'
);

INSERT INTO tb_professor (nome, email, cpf) VALUES (
  'Bruno',
  'bruno@email.com',
  '33344455566'
);

INSERT INTO tb_professor (nome, cpf, email) VALUES ('José', '99988877755', 'jose@email.com');

-- Para consultar os dados de uma tabela --
SELECT * FROM tb_professor;

-- Para deletar uma tabela --
DROP TABLE tb_professor;

-- EXERCÍCIO: Criar uma tabela curso e uma tabela disciplina --
CREATE TABLE tb_curso (
  nome VARCHAR(100) NOT NULL, 
  duracao VARCHAR(255) NOT NULL
);

CREATE TABLE tb_disciplina (
  nome VARCHAR(100) NOT NULL,
  professor VARCHAR(50) NOT NULL,
  descricao VARCHAR(255) NOT NULL
)

-- Para excluir um registro na tabela --
DELETE FROM tb_professor WHERE id='2';
