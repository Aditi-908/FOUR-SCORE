---create a database named contactus---


CREATE TABLE 'contact' (
	'id' INT(11) NOT NULL AUTO_INCREMENT,
	'Name' VARCHAR(255)NOT NULL,
	'email' VARCHAR(255)NOT NULL ,
	'subject' TEXT NOT NULL ,
	'message' TEXT NOT NULL ,
	'phone' INT(10) ,
	PRIMARY KEY ('id')

);