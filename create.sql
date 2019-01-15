CREATE DATABASE SDEV300;
use SDEV300;

DROP TABLE user;
DROP TABLE product;
DROP TABLE purchase;


CREATE TABLE user(
CustomerID int primary key, 
Username varchar(30),
Password varchar(32),
Email varchar (50),
FirstName varchar(30),
LastName varchar(30),
StreetAddress varchar(100),
City varchar (45),
State varchar (52),
Zipcode varchar (5),
CreditCardNumber varchar (32),
CreditCardDate date
);



CREATE TABLE purchase(
CustomerID int,
AllItems MEDIUMBLOB,
TotalCost float,
PurchaseDate date
);

CREATE TABLE product(
ProductID int primary key,
ProductName varchar (30),
ProductPicture varchar (1000),
ProductDescribe MEDIUMBLOB,
ProductPrice float
);

-- Initialize some data to make the standard appearance first

INSERT INTO product VALUES('1','Becca Highlighter','img/becca.jpg','',50);
INSERT INTO product VALUES('2','Benefit Mascara', 'img/benefit.jpg','',60);
INSERT INTO product VALUES('3','Born To Run Eyeshadow','img/borntorun.jpg','',30);
INSERT INTO product VALUES('4',"Anastasia Brow Wiz", 'img/browwiz.jpg','',40);
INSERT INTO product VALUES('5','Estee Lauder Foundation','img/esteelauder.jpg','',40);
INSERT INTO product VALUES('6','Fenty Lip Gloss', 'img/fenty.jpg','',29);
INSERT INTO product VALUES('7','Huda Beauty Eyeshadow', 'img/hudabeauty.jpg','',35);
INSERT INTO product VALUES('8','Laura Mercier Powder', 'img/lauramercier.jpg','',48);
INSERT INTO product VALUES('9','Makeup Forever Foundation', 'img/makeupforever.jpg','',19);
INSERT INTO product VALUES('10','Porefessional Primer','img/porefessional.jpg','',16);
INSERT INTO product VALUES('11','Milk Brightening Serum','img/milk.jpg','',28);
INSERT INTO product VALUES('12','Nars Concealer','img/narsconcealer.jpg','',23);

-- admin account
-- username is root
-- password is sdev300
-- email is sdev@gmail.com
INSERT INTO user (CustomerID,Username,Password,Email) VALUES('1','root','07ae2b939047208ccd4504fb612d317e','sdev@gmail.com');