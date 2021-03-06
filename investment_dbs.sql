drop database if exists investment_club_dbs;
create database investment_club_dbs;
use investment_club_dbs;

create table users(

user_id	int	primary key	auto_increment,
username varchar(255) not null unique,
name_first varchar(255)not null,
name_last varchar(255)not null,
password_str varchar(255) not null,
email_address varchar(255) not null unique,
phone varchar(12) not null unique,
dob datetime not null,
account_value decimal(10,2) not null default 0.00

);

create table investments(

investment_id int primary key auto_increment,
user_id int not null,
buy_in_date datetime not null,
sell_date datetime default null,
symbol varchar(4) not null,
company varchar(255) not null,
mutual_fund bool default false,
mutual_fund_name varchar(255) default null,
market_value decimal(10,2) not null default 0.00,
number_of_shares int not null default 0
);

INSERT INTO users
VALUES(NULL,'scotter567','Jordan', 'Scott','hibob','scotter567@gmail.com','267-804-0464','1997-01-21',0);
INSERT INTO investments
VALUES(NULL, 1, NOW(), NULL, 'MSFT', 'Microsoft Corp.', false, null, 93.84, 10),
	(NULL, 1, NOW(), NULL, 'GOOG', 'Alphabet Inc', false, null, 1021.06, 10),
	(NULL, 1, NOW(), NULL, 'APPL', 'Apple', false, null, 167.39, 10),
	(NULL, 1, NOW(), NULL, 'FB', 'Facebook', false, null, 170.96, 10),
	(NULL, 1, NOW(), NULL, 'TWTR', 'Twitter', false, null, 29.72, 10);