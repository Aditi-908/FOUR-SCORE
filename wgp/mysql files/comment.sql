---create a database named comment_system---

-----this table is for comments in blog-----
CREATE TABLE 'comment' (
	'id' INT(11) NOT NULL AUTO_INCREMENT,
	'name' VARCHAR(255) NOT NULL,
	'email' VARCHAR(255) NOT NULL ,
	'comment' TEXT NOT NULL ,
	PRIMARY KEY ('id')

);