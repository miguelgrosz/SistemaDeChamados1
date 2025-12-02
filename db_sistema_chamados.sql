create database db_sistema_chamados;

use db_sistema_chamados;

create table tb_usuario(
    id_usuario int auto_increment primary key,
    nm_usuario varchar(45),
    email varchar(60),
    celular varchar(45),
    setor text,
    senha text);

    select *
    from tb_usuario;

create table tb_tipo(
	id_tipo int auto_increment primary key,
    nm_tipo varchar(20)
);
insert into tb_tipo value (null,"incidente"), (null,"requisição");

create table tb_categoria(
	id_categoria int auto_increment primary key,
    nm_categoria varchar(30)
);
insert into tb_categoria value
 (null,'NoteBook'),
 (null, 'Desktop'),
 (null, 'celular'),
 (null, 'Redes');

create table tb_urgencia(
	id_urgencia int auto_increment primary key,
    nm_urgencia varchar(20)
);
insert into tb_urgencia value
 (null,'Baixa'),
 (null,'Media'),
 (null,'Alta'),
 (null,'JESUS!!!');


create table tb_chamados(
	cd_chamado int auto_increment primary key,
	fk_tipo int,
    fk_categoria int,
    fk_urgencia int,
    titulo varchar(20),
    descricao varchar(200),
    foreign key (fk_tipo) references tb_tipo (id_tipo),
	foreign key (fk_categoria) references tb_categoria (id_categoria),
	foreign key (fk_urgencia) references tb_urgencia (id_urgencia)
);
        
        select * from tb_chamados;

