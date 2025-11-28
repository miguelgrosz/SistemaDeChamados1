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
