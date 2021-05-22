---create a database named job---


CREATE TABLE 'job.inc' (
	'id' INT(11) NOT NULL AUTO_INCREMENT,
	'Name' VARCHAR(255)NOT NULL,
	'email' VARCHAR(255)NOT NULL ,
	'message' TEXT NOT NULL ,
	'phone' INT(10) ,
	'resume' TEXT NOT NULL ,
	PRIMARY KEY ('id')

);