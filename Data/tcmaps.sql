create database db_asp;
use db_asp;
 Create Table tbl_user (
    user_id int primary key auto_increment ,
    user_nome varchar(80) Not null,
    user_email varchar(80) Not null,
    user_password varchar(80) Not null,
    user_lvl varchar(2) Not null
 );
 
 Create table tbl_categora(
	categora_id int primary key auto_increment,
    categora_name varchar(50)
 );
 
 Create Table tbl_produto (
    prod_id int primary key auto_increment ,
    prod_nome varchar(80) Not null,
    prod_desc varchar(200) Not null,
    prod_marca varchar(80) Not null,
    prod_preco int Not null,
    prod_quant int not null,
    prod_min_quant int,
    fk_categora varchar(50)
 );
 
  Create Table tbl_pet (
    pet_id int primary key auto_increment ,
    pet_name varchar(80) Not null,
    pet_dono varchar(80) Not null,
    pet_tell varchar(80) Not null,
    pet_porte varchar(50) Not null,
    pet_desc varchar (100)
 );
 
  Create Table tbl_agenda (
    agenda_id int primary key auto_increment ,
    agenda_status boolean Not null,
    agenda_data varchar(80) Not null,
    agenda_dono varchar(80) Not null,
    agenda_tell_dono varchar(80) Not null,
    agenda_serv varchar(40) not null
 );
 