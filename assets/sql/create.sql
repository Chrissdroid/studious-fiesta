CREATE DATABASE franceamusee /*!40100 COLLATE 'utf8mb4_general_ci' */;

use franceamusee;

-- drop permet de supprimer toutes les tables initiée
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE if EXISTS region;
DROP TABLE if EXISTS departement;
DROP TABLE if EXISTS musee;
DROP TABLE if EXISTS musee_virtuel;
DROP TABLE if EXISTS exposition;

SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE region(
        ID    Int  Auto_increment  NOT NULL ,
        NOM   Varchar (100) NOT NULL ,
        PHOTO Varchar (255) NOT NULL
	,CONSTRAINT region_FK PRIMARY KEY (ID)
)ENGINE=InnoDB;

CREATE TABLE departement(
        ID        Int  Auto_increment  NOT NULL ,
        NOM       Varchar (255) NOT NULL ,
        NUMERO    Int NOT NULL ,
        PHOTO     Varchar (255) ,
        ID_REGION Int
	,CONSTRAINT departement_PK PRIMARY KEY (ID)

	,CONSTRAINT departement_region_FK FOREIGN KEY (ID_region) REFERENCES region(ID)
)ENGINE=InnoDB;

CREATE TABLE musee(
        ID             Int  Auto_increment  NOT NULL ,
        PHOTO          Varchar (255) ,
        NOM            Varchar (255) NOT NULL ,
        ADRESSE        Varchar (255) NOT NULL ,
        VILLE          Varchar (255) NOT NULL ,
        CP             Varchar (25) NOT NULL ,
        TELEPHONE      Varchar (15) NOT NULL ,
        EMAIL          Varchar (50) NOT NULL ,
        SITE           Varchar (75) NOT NULL ,
        DESCRIPTION    Text NOT NULL ,
        ID_departement Int
	,CONSTRAINT musee_PK PRIMARY KEY (ID)

	,CONSTRAINT musee_departement_FK FOREIGN KEY (ID_departement) REFERENCES departement(ID)
)ENGINE=InnoDB;

CREATE TABLE exposition(
        ID          Int  Auto_increment  NOT NULL ,
        NOM         Varchar (255) NOT NULL ,
        DATE        Varchar (255) NOT NULL ,
        DESCRIPTION Text NOT NULL ,
        ID_musee    Int
	,CONSTRAINT exposition_PK PRIMARY KEY (ID)

	,CONSTRAINT exposition_musee_FK FOREIGN KEY (ID_musee) REFERENCES musee(ID)
)ENGINE=InnoDB;


CREATE TABLE musee_virtuel(
        ID          Int  Auto_increment  NOT NULL ,
        DESCRIPTION Text NOT NULL ,
        ID_MUSEE    Int NOT NULL
	,CONSTRAINT musee_virtuel_PK PRIMARY KEY (ID)

	,CONSTRAINT musee_virtuel_musee_FK FOREIGN KEY (ID_musee) REFERENCES musee(ID)
	,CONSTRAINT musee_virtuel_musee_AK UNIQUE (ID_musee)
)ENGINE=InnoDB;



