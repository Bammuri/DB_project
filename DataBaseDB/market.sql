CREATE TABLE `market` (
	`no`	INTEGER NOT NULL UNIQUE,
	`name`			VARCHAR(20),
	`bigcode`		VARCHAR(20),
	`bigname` 		VARCHAR(20),
	`midcode`		VARCHAR(20),
	`midname`		VARCHAR(20),
	`stdcode`		VARCHAR(20),
	`stdname`		VARCHAR(20),
	`address`		VARCHAR(100),
	`roadadd`		VARCHAR(100),
	`oldmail`		INTEGER,
	`newmail`		INTEGER,
	`longitude`		DOUBLE,
	`latitude`		DOUBLE,
	PRIMARY KEY(`no`)
);