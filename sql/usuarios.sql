CREATE TABLE tb_usuarios(
  id INT NOT NULL PRIMARY KEY auto_increment,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(32) NOT NULL
);