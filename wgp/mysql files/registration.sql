
----create a database named registration----

CREATE TABLE 'users' (
	'id' INT(11) NOT NULL AUTO_INCREMENT,
	'username' VARCHAR(100)NOT NULL,
	'email' VARCHAR(100)NOT NULL,
	'password'VARCHAR(100) NULL ,
	'message' VARCHAR(100) NULL ,
	PRIMARY KEY ('id')
);