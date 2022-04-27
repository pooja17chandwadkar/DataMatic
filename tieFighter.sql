
/*
				AUTHOR : POOJA CHANDWADKAR
				COURSE : DATABASE DESIGN AND WEB DEVELOPEMENT
				PROJECT 2
*/


drop database if exists TieFighter;
create database TieFighter;
use TieFighter;


-- TABLE CREATION 
DROP TABLE IF EXISTS tieModel;
CREATE TABLE tieModel(
Model VARCHAR(30) PRIMARY KEY,
Class VARCHAR(30) NOT NULL,
Cost INT,
Manufacturer VARCHAR(40));

DROP TABLE IF EXISTS tieSpecifications ;
CREATE TABLE tieSpecifications (
Model   VARCHAR(30) PRIMARY KEY,
Length  Decimal(10,1),
Width  Decimal(10,1),
Height Decimal(10,1),
Mass INT,
Crew Int,
CONSTRAINT FK_MOD FOREIGN KEY(Model) REFERENCES tieModel(Model));

DROP TABLE IF EXISTS tiePerformance ;
CREATE TABLE tiePerformance(
Model    VARCHAR(30) PRIMARY KEY,
MaxSpeed INT,
MaxClimb INT,
CONSTRAINT FK_MOD1 FOREIGN KEY(Model) REFERENCES tieModel(Model));


DROP TABLE IF EXISTS tieArmament ;
CREATE TABLE tieArmament (
Model   VARCHAR(30) PRIMARY KEY,
CannonType  VARCHAR(30),
Cannons INT,
InternalOrdnance  VARCHAR(30),
OrdnanceCount INT,
CONSTRAINT FK_MOD2 FOREIGN KEY(Model) REFERENCES tieModel(Model));


DROP TABLE IF EXISTS tiePropulsion ;
CREATE TABLE tiePropulsion(
Model      VARCHAR(30) PRIMARY KEY,
Propulsion VARCHAR(30),
CONSTRAINT FK_MOD3 FOREIGN KEY(Model) REFERENCES tieModel(Model));

DROP TABLE IF EXISTS tieConstruction ;
CREATE TABLE tieConstruction(
Model VARCHAR(30) PRIMARY KEY,
Hull  VARCHAR(30) ,
CONSTRAINT FK_MOD4 FOREIGN KEY(Model) REFERENCES tieModel(Model) );

DROP TABLE IF EXISTS tieInventory ;
CREATE TABLE tieInventory(
TFID  VARCHAR(30) PRIMARY KEY,
Model VARCHAR(30) ,
Status  VARCHAR(30) ,
CONSTRAINT FK_MOD5 FOREIGN KEY(Model) REFERENCES tieModel(Model) );

