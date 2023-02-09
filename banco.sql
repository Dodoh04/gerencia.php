create table funcionarios(
    idfuncionario int not null primary key auto_increment,
    cpf varchar(14) not null,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone varchar(12) not null
);

