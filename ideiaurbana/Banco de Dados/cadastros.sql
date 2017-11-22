create schema cadideia default char set utf8;

use cadideia;

create table cadastro (
	email varchar (50) not null,
    nome varchar (30) not null,
    sobrenome varchar(45) not null,
	senha varchar(700) not null,
	primary key (email)
);
    
select * from cadastro;