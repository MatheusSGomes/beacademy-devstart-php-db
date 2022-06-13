USE db_escola;

-- Inserir 1 registro --
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Chiquim', 'chiquim@email.com', '96385254145');

-- Inserir vários registros ao mesmo tempo --
INSERT INTO tb_professor (nome, email, cpf)
VALUES 
  ('Zezim', 'zezim@email.com', '77788899956'),
  ('Maria', 'maria@email.com', '44455566677'),
  ('Luiza', 'luiza@email.com', '33355577799');

-- Excluir 1 registro --
DELETE FROM tb_professor WHERE email='zezim@email.com';
DELETE FROM tb_professor WHERE id>5;

-- Editar 1 registro --
UPDATE tb_professor SET nome='Luiza Caucaia' WHERE cpf='33355577799';

-- Editar todos os registros --
UPDATE tb_professor SET nome='Francisco';

-- Selecionar todos os dados de uma tabela --
SELECT * FROM tb_professor;

-- Selecionar todos os dados de forma filtrada --
SELECT * FROM tb_professor WHERE id=5;

-- Selecionar alguns dados de todos os registros --
SELECT nome, cpf FROM tb_professor;

-- Selecionar alguns dados de todos os registros de forma filtrada --
SELECT nome, cpf FROM tb_professor WHERE id>5;
