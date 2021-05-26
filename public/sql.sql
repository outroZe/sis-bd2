USE db_app_db2;

CREATE TABLE autores (nome VARCHAR(100) PRIMARY KEY
, dt_nasc DATE
);

CREATE TABLE livros (id_livro INT PRIMARY KEY
, autor varchar(100) 
, categoria VARCHAR(100)
, classificacao VARCHAR(100)
, editora varchar (50)
, num_pag INT
, data_lancamento DATE
, edicao INT
, CONSTRAINT autor_fk FOREIGN KEY(autor) REFERENCES autores(nome)
);


