CREATE TABLE `history` (
	`ID`	VARCHAR(20),
	`no`	INTEGER,
	`name`		VARCHAR(20),
	`bigname` 	VARCHAR(20),
	`midname`	VARCHAR(20),
	`stdname`	VARCHAR(20),
 FOREIGN KEY(`ID`) REFERENCES user(`ID`)
   ON UPDATE CASCADE ON DELETE CASCADE,
   FOREIGN KEY(`no`) REFERENCES market(`no`)
   ON UPDATE CASCADE ON DELETE CASCADE,
   FOREIGN KEY(`name`) REFERENCES market(`name`)
   ON UPDATE CASCADE ON DELETE CASCADE,
   FOREIGN KEY(`bigname`) REFERENCES market(`bigname`)
   ON UPDATE CASCADE ON DELETE CASCADE,
   FOREIGN KEY(`midname`) REFERENCES market(`midname`)
   ON UPDATE CASCADE ON DELETE CASCADE,
   FOREIGN KEY(`stdname`) REFERENCES market(`stdname`)
   ON UPDATE CASCADE ON DELETE CASCADE
);


insert into history values('hozzi', '2891988','������', '�Ҹ�', '����/�ֹ�/���׸���', '����ⱸ/�����ǰ');
insert into history values('hozzi', '2895630','���浿������', '����', '�ѽ�', '����/��������');
insert into history values('hozzi', '20134850','�̻��佺Ʈ', '����', '�н�ƮǪ��', '�佺Ʈ����');
insert into history values('kim', '2907546	','���̱����', '�Ҹ�', '����/�Ź�/�׼�����', '����/������ǰ�Ҹ�');
insert into history values('kim', '20134850','�̻��佺Ʈ', '����', '�н�ƮǪ��', '�佺Ʈ����');
insert into history values('hen', '20134850','�̻��佺Ʈ', '����', '�н�ƮǪ��', '�佺Ʈ����');
insert into history values('shin', '20134850','�̻��佺Ʈ', '����', '�н�ƮǪ��', '�佺Ʈ����');
insert into history values('shin', '300389','��õ�Ĵ�', '����', '��/�����丮', '�Ķ��̵�/���ġŲ');
