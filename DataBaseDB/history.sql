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


insert into history values('hozzi', '2891988','원조명', '소매', '가정/주방/인테리어', '조명기구/전기용품');
insert into history values('hozzi', '2895630','장충동왕족발', '음식', '한식', '족발/보쌈전문');
insert into history values('hozzi', '20134850','이삭토스트', '음식', '패스트푸드', '토스트전문');
insert into history values('kim', '2907546	','루이까또즈', '소매', '가방/신발/액세서리', '가방/가죽제품소매');
insert into history values('kim', '20134850','이삭토스트', '음식', '패스트푸드', '토스트전문');
insert into history values('hen', '20134850','이삭토스트', '음식', '패스트푸드', '토스트전문');
insert into history values('shin', '20134850','이삭토스트', '음식', '패스트푸드', '토스트전문');
insert into history values('shin', '300389','왕천파닭', '음식', '닭/오리요리', '후라이드/양념치킨');
