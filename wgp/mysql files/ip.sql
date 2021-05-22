------create a database named ip-------

-----this table is for comments in blog-----
CREATE TABLE 'ip.loc' (
	'id' INT(11) NOT NULL AUTO_INCREMENT,
	'city' VARCHAR(100) NOT NULL,
	'state' VARCHAR(100) NOT NULL ,
	'country' VARCHAR(100) ,
	PRIMARY KEY ('id')

);