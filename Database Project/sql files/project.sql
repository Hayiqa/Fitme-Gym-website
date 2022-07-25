
DROP table logs;
DROP table dailytarget;
DROP table exercise;
DROP table equipment;
DROP table members;
drop sequence ids;
drop trigger serial;







create table members(Username varchar2(20),Password varchar2(20),email varchar2(50),Name varchar2(50),Age integer,Gender varchar2(50),Contact_no number(11),Constraints mem_pk Primary key (Username));

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Hasbullah','1234','hasbulla@gmail.com','Hasbullah',19,'Male',0332946543);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Zainab','4321','zainab@gmail.com','Zainab',20,'Female',03308765543);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Ammar','5678','ammar@gmail.com','Ammar',21,'Male',03275433343);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Fahad','8765','fahad@gmail.com','Fahad',23,'Male',03109864543);


INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('farhan','0123','farhan@gmail.com','farhan',22,'Male',03009878543);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Adam','3210','adam@gmail.com','Adam',24,'Male',03018765643);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Babar','0987','Babar@gmail.com','Babar',25,'Male',03758695643);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Farukh','7890','Farrukh@gmail.com','Farukh',55,'Male',03038256243);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Ahmad','2468','ahmad@gmail.com','Ahmad',45,'Male',03024685243);

INSERT INTO Members (Username,Password,email,name,age,gender,Contact_no)
 VALUES ('Haroon','8642','haroon@gmail.com','Haroon',29,'Male',03009365943);






create table Equipment(equipment_id integer,Name varchar2(50),Constraints equip_pk Primary Key (equipment_id));



Create sequence ids
Start with 1 
Increment by 1
Minvalue 1 
Maxvalue 100
Cycle
nocache noorder;

CREATE OR REPLACE TRIGGER serial
Before INSERT ON equipment
for each row
Declare
BEGIN
SELECT ids.nextval
  INTO :new.equipment_id
  FROM dual;
END;
/

INSERT INTO equipment (Name)
 VALUES ('Dumbell');

INSERT INTO equipment (Name)
 VALUES ('Pullup Bar');

INSERT INTO equipment (Name)
 VALUES ('Plate-Loaded Machine');

INSERT INTO equipment (Name)
 VALUES ('Barbell');

INSERT INTO equipment (Name)
 VALUES ('Kettlebell');

INSERT INTO equipment (Name)
 VALUES ('Cable Fly Machine');

INSERT INTO equipment (Name)
 VALUES ('Dips Machine');

INSERT INTO equipment (Name)
 VALUES ('Incline Chest Press');

INSERT INTO equipment (Name)
 VALUES ('Bench Press');

INSERT INTO equipment (Name)
 VALUES ('Leg Quad Exercise Machine');






create table Exercise(Username varchar2(20),exercise_id integer,equipment_id integer,Duration varchar2(50),Muscle_group varchar2(50),name varchar2(50),Nutrition_intake integer,Constraints ex_pk Primary Key (Username,exercise_id)
,constraint equip_fk foreign key (equipment_id) references equipment(equipment_id)
,constraint member_fk foreign key (Username) references members(Username));


Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Hasbullah',1,1,'30','Shoulders','Outward round movement',15);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Zainab',2,2,'15','Shoulders',' Standing barbell overhead press',30);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Ammar',3,3,'45','Shoulders','Plate front raise (anterior deltoids)',20);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Fahad',4,4,'40','Chest','Dips',60);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('farhan',5,5,'80','Chest','Cable flyes',1000);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Adam',6,6,'60','Quadriceps','Double kettlebell squats ',800);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Babar',7,7,'50','Quadriceps','Box squat',700);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Farukh',8,8,'65','Back','Standing supported one-arm dumbbell',1500);


Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Ahmad',9,9,'100','Back','Pull-ups and chin-ups ',500);

Insert into Exercise(Username ,exercise_id ,equipment_id ,Duration ,Muscle_group,name,Nutrition_intake)
                       values ('Haroon',10,10,'150','Back','Heavy partial rack deadlift',600);





create table logs(Username varchar2(20),weight float,height float,BMI float,Day Date,calory_intake integer,
constraint members_fk foreign key (Username) references members(Username));

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Hasbullah',50,1.5,20.3,'12-JAN-2000',400);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Hasbullah',45,1.5,20.3,'12-FEB-2000',400);


Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Zainab',50,1.65,21.3,'17-FEB-2000',250);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Zainab',47,1.65,21.3,'17-MAR-2000',250);


Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Ammar',40,1.5,20.5,'17-SEP-2000',870);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Ammar',39,1.5,20.5,'17-OCT-2000',870);


Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Fahad',55,1.75,22.3,'07-JUN-2000',570);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Fahad',51,1.75,22.3,'07-JULY-2000',570);


Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('farhan',57,1.67,23.7,'23-MAY-2000',700);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('farhan',55,1.67,23.7,'23-JUNE-2000',700);


Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Adam',67,1.9,23.6,'01-JUL-2000',560);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Adam',65,1.9,23.6,'01-AUG-2000',560);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Babar',58,1.73,22.0,'24-APR-2000',350);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Babar',52,1.73,22.0,'24-MAY-2000',350);


Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Farukh',63,1.78,23.0,'19-DEC-2000',100);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Farukh',60,1.78,23.0,'19-JAN-2001',100);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Ahmad',77,1.75,28.7,'23-FEB-2000',650);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Ahmad',75,1.75,28.7,'23-MAR-2000',650);


Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Haroon',50,1.57,26.0,'14-JUN-2000',900);

Insert into logs(Username,weight,height,BMI,Day,calory_intake)
                           values ('Haroon',47,1.57,26.0,'14-JULY-2000',900);







create table dailytarget(Username varchar2(50),Exercise_ID integer,status varchar2(50),Duration varchar2(50),
constraint members_fk1 foreign key (Username,Exercise_ID) references Exercise(Username,Exercise_id));

Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Hasbullah',1,'completed','30');


Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Zainab',2,'completed','15');

Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Ammar',3,'completed','45');


Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Fahad',4,'Not completed','30');


Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('farhan',5,'Not completed','30');

Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Adam',6,'completed','60');


Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Babar',7,'completed','50');


Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Farukh',8,'completed','65');


Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Ahmad',9,'Not completed','60');

Insert into dailytarget(Username,Exercise_ID,status,Duration)
                           values ('Haroon',10,'Not completed','100');




















