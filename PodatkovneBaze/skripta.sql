/*
Created		3.3.2015
Modified		3.3.2015
Project		
Model		
Company		
Author		
Version		
Database		mySQL 4.1 
*/








drop table IF EXISTS Admin;
drop table IF EXISTS Zelje;
drop table IF EXISTS Uporabnik;
drop table IF EXISTS Naloga;
drop table IF EXISTS Ucitelj;
drop table IF EXISTS Izvaja;




Create table Izvaja () ENGINE = MyISAM;

Create table Ucitelj () ENGINE = MyISAM;

Create table Naloga () ENGINE = MyISAM;

Create table Uporabnik () ENGINE = MyISAM;

Create table Zelje () ENGINE = MyISAM;

Create table Admin () ENGINE = MyISAM;












Alter table Naloga add Foreign Key () references Ucitelj () on delete  restrict on update  restrict;
Alter table Zelje add Foreign Key () references Uporabnik () on delete  restrict on update  restrict;



/* Users permissions */




