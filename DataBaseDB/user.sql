CREATE TABLE `USER` (
	`ID`		VARCHAR(20) NOT NULL UNIQUE,
	`PASSWORD` 	TEXT NOT NULL,
	`name`		TEXT,
	`grou`		TEXT,
	`telnum`	INTEGER,
	PRIMARY KEY(`ID`)
);

insert into user values('hozzi', '1234', '����ȣ', '��ǻ�������а�', '01015995656');
insert into user values('kim', '1234', '�輺ȯ', '��ǻ�������а�', '1111');
insert into user values('shin', '1234', '������', '��ǻ�������а�', '01059995656');
insert into user values('hen', '1234', '�ڲ�', '��ǻ�������а�', '01055995656');
insert into user values('henhen', '1234', '���ڲ�', '��ǻ�������а�', '01015995116');
