USE db_app_db2;

CREATE TABLE autores (nome VARCHAR(100) PRIMARY KEY NOT NULL
, dt_nasc DATE
);

CREATE TABLE livros (id_livro INT PRIMARY KEY AUTO_INCREMENT NOT NULL
, titulo varchar(100) NOT NULL
, autor varchar(100) NOT NULL
, categoria VARCHAR(100)
, classificacao INT
, editora varchar (50) 
, num_pag INT
, data_lancamento DATE
, edicao INT
, CONSTRAINT autor_fk FOREIGN KEY(autor) REFERENCES autores(nome)
);


drop table livros;
drop table autores;


insert into autores (nome, dt_nasc) values ('Machado de Assis','1839-06-21');
insert into livros (titulo, autor, categoria ,classificacao, editora, num_pag, data_lancamento, edicao) values('Quincas Borba', 'Machado de Assis', 'Literatura',1,'Principis',240,'1892-07-04',3);




