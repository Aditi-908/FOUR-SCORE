---create a database named comment_system---

------this table is for crime reports-----
CREATE TABLE 'comments' (
	'id' INT(11) NOT NULL AUTO_INCREMENT,
	'name' VARCHAR(255) NOT NULL,
	'place' VARCHAR(255) NOT NULL ,
	'reports' TEXT NOT NULL ,
	PRIMARY KEY ('id')

);
