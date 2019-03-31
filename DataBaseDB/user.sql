CREATE TABLE `USER` (
	`ID`		VARCHAR(20) NOT NULL UNIQUE,
	`PASSWORD` 	TEXT NOT NULL,
	`name`		TEXT,
	`grou`		TEXT,
	`telnum`	INTEGER,
	PRIMARY KEY(`ID`)
);

insert into user values('hozzi', '1234', '김지호', '컴퓨터정보학과', '01015995656');
insert into user values('kim', '1234', '김성환', '컴퓨터정보학과', '1111');
insert into user values('shin', '1234', '신현준', '컴퓨터정보학과', '01059995656');
insert into user values('hen', '1234', '핸꾸', '컴퓨터정보학과', '01055995656');
insert into user values('henhen', '1234', '핸핸꾸', '컴퓨터정보학과', '01015995116');
