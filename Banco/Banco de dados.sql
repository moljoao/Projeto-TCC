create database if not exists TCC;

use TCC;
/*sempre colocar auto increment para ele ir incrementando automaticamente*/
/*sempre selecionar o banco*/

show tables;


create table Pessoa (
idPessoa int primary key auto_increment,
imagem varchar(100) not null,
nome varchar(250) not null,
userName varchar(100) not null unique,
email varchar(250) not null unique,
senha varchar(50) not null, 
cpf varchar(11) not null,
telFixo varchar(10) null,
telCelular varchar(11) not null,
telCelular2 varchar(11) null,
tipoUsuario varchar(30) not null,
endereço varchar(100) not null,
cidade varchar(30) not null,
estado varchar(20) not null,
cep varchar(8) null,
ativo varchar(30) default 'ativo'
);

drop table Pessoa;

/*-------------   Nova tabela     ---------------*/

drop table Produtos;

	create table Produtos (
	idProduto int primary key auto_increment,
	imagem varchar(50)null,
	nome varchar(250) not null,
	descricao varchar(100) not null,
	preco double,
	tipo int not null, 
	ativo varchar(30) default 'ativo'
	);
    
select * from Produtos where tipo = 2 AND ativo = "ativo";

insert into Pessoa (
    imagem,
	nome,
    userName,
    email, 
    senha, 
    cpf, 
    telFixo, 
    telCelular,
    telCelular2,
    tipoUsuario,
    endereço,
    cidade,
    estado,
    cep) values (
    'acai.jpg',
    'vitor', 
    'vitor', 
    'vitor@hotmail.com', 
    'vitor123', 
    '48364340840',
    '971035926',
    '971035926',
    '971035926',
    'administrador',
    'rua via maris',
    'itapevi',
    'sao paulo',
     06683430);
    
    select * from Pessoa;

    
    