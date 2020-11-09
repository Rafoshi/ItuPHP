Create database if not exists Infityphp;

use Infityphp;

 Create Table if not exists Tbl_user (
    user_id int primary key auto_increment ,
    user_name varchar(80) Not null,
    user_email varchar(80) Not null,
    user_password varchar(80) Not null,
    user_lvl varchar(2) Not null
 );

 Create Table if not exists Tbl_order(
    order_id int primary key auto_increment,
    order_desc longtext,
    order_status varchar(255),
    order_type varchar(255),
    fk_user_id int,
    Foreign Key (fk_user_id) references tbl_user(user_id) 
 );
 
create view vw_all as
select * from tbl_user
join tbl_order on tbl_order.fk_user_id =  Tbl_user.user_id;
 
select * from vw_all;

Insert into tbl_user(user_id,user_name,user_email,user_password,user_lvl)
Value ('1','Adm','admteste@gmail.com','1234567','1');

INSERT INTO `infityphp`.`tbl_user` (`user_name`, `user_email`, `user_password`, `user_lvl`) VALUES ('user', 'userteste@gmail.com', '1234567', '0');

INSERT INTO `infityphp`.`tbl_user` (`user_name`, `user_email`, `user_password`, `user_lvl`) VALUES ('Ioshi', 'rafa.ioshi@gmail.com', '1234567', '0');


drop table tbl_order;

drop database if exists infityphp;

CREATE USER 'itu'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON Infityphp.* TO 'itu'@'localhost' WITH GRANT OPTION;