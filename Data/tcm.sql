use  infityphp;
Create database Infityphp;
use Infityphp;
 Create Table Tbl_user (
    user_id int primary key auto_increment ,
    user_nome varchar(80) Not null,
    user_email varchar(80) Not null,
    user_password varchar(80) Not null,
    user_lvl varchar(2) Not null
 );

 Create Table Tbl_order(
    order_id int primary key auto_increment,
    order_desc longtext,
    order_status boolean,
    fk_user_id int,
    Foreign Key (fk_user_id) references tbl_user(user_id) 
 );
 
 
drop table tbl_order;

drop view tbl_all;

create view tbl_all
as select 
	tbl_user.user_id,
    tbl_user.user_nome,
    tbl_user.user_email,
    tbl_user.user_password,
    tbl_user.user_lvl,
    tbl_order.order_id,
    tbl_order.order_desc,
    tbl_order.order_status
from tbl_user inner join tbl_order
on tbl_user.user_id = tbl_order.fk_user_id;

select *from tbl_user;
select * from tbl_all;

Insert into tbl_user(user_id,user_nome,user_email,user_password,user_lvl)
Value ('1','Adm','admteste@gmail.com','1234','1');

CREATE USER 'rafa'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON infityphp.* TO 'rafa'@'localhost' WITH GRANT OPTION;