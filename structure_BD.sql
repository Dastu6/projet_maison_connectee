DROP DATABASE IF EXISTS Maison_Connect; 

CREATE DATABASE IF NOT EXISTS Maison_Connect; 

USE Maison_Connect; 



CREATE TABLE UTILISATEUR ( 

    Id_user INT(11) NOT NULL AUTO_INCREMENT,

    Nom VARCHAR(50) NOT NULL, 

    Prenom VARCHAR(50) NOT NULL,

    Nom_utilisateur VARCHAR(50) NOT NULL,

    Date_naissance DATE, 

    Email VARCHAR(50),

    Tel VARCHAR(50),

    Genre BOOLEAN,

    Est_admin BOOLEAN,

    Etat_cpt VARCHAR(50),

    Mot_de_passe VARCHAR(100) NOT NULL,

    Date_creation_cpt DATE,

    PRIMARY KEY (Id_user) 

); 



CREATE TABLE ADRESSE ( 

    Id_adresse INT(11) NOT NULL AUTO_INCREMENT, 

    Ville VARCHAR(60) NOT NULL, 

    CP INT(11) NOT NULL, 

    Rue VARCHAR(60) NOT NULL, 

    Num_maison INT(11) NOT NULL,

    PRIMARY KEY (Id_adresse) 

); 



CREATE TABLE RESSOURCE ( 

    Id_ressource INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_ressource VARCHAR(60) NOT NULL,

    Min_ressource FLOAT(15) NOT NULL,

    Max_ressource FLOAT(15) NOT NULL,

    Crit_ressource FLOAT(15) NOT NULL,

    Ideal_ressource FLOAT(15) NOT NULL, 

    PRIMARY KEY (Id_ressource) 

);



CREATE TABLE SUBSTANCE ( 

    Id_substance INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_substance VARCHAR(60)NOT NULL,

    Min_substance FLOAT(15) NOT NULL,

    Max_substance FLOAT(15) NOT NULL,

    Crit_substance FLOAT(15) NOT NULL,

    Ideal_substance FLOAT(15) NOT NULL, 

    PRIMARY KEY (Id_substance) 

); 



CREATE TABLE MAISON( 

    Id_maison INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_maison VARCHAR(60) NOT NULL, 

    Deg_iso FLOAT(11) NOT NULL, 

    Nb_appart INT(11) NOT NULL,

    Eva_eco VARCHAR(50) NOT NULL,

    PRIMARY KEY (Id_maison)

);  
  


CREATE TABLE LOCATION( 

    Id_location INT(11) NOT NULL AUTO_INCREMENT, 

    Debut_location DATE, 

    Fin_location DATE,

    PRIMARY KEY(Id_location)

); 



CREATE TABLE POSSESSION(

    Id_possession INT(11) NOT NULL AUTO_INCREMENT,

    Debut_possession DATE,

    Fin_possession DATE,

    PRIMARY KEY (Id_possession)
);



CREATE TABLE EMISSION(

    Id_ressource INT(11) NOT NULL,

    Id_substance INT(11) NOT NULL,

    FOREIGN KEY (Id_ressource) REFERENCES RESSOURCE (Id_ressource),

    FOREIGN KEY (Id_substance) REFERENCES SUBSTANCE (Id_substance),

    PRIMARY KEY (Id_ressource,Id_substance)

);



CREATE TABLE APPARTEMENT( 

    Id_appart INT(11) NOT NULL AUTO_INCREMENT, 

    Num_appart INT(11) NOT NULL, 

    Deg_secu VARCHAR(50) NOT NULL,

    Type_appart VARCHAR(50) NOT NULL,

    Libel_piece VARCHAR(50) NOT NULL,

    Id_adresse INT(11) NOT NULL,

    Id_maison INT(11) NOT NULL,

    Id_user INT(11) NOT NULL,

    Id_possession INT(11),

    Id_location INT(11),

    FOREIGN KEY (Id_adresse) REFERENCES ADRESSE (Id_adresse),

    FOREIGN KEY (Id_maison) REFERENCES MAISON (Id_maison),

    FOREIGN KEY (Id_user) REFERENCES UTILISATEUR (Id_user),

    FOREIGN KEY (Id_possession) REFERENCES POSSESSION (Id_possession),

    FOREIGN KEY (Id_location) REFERENCES LOCATION (Id_location),

    PRIMARY KEY (Id_appart)

);



CREATE TABLE APPAREIL ( 

    Id_appareil INT(11) NOT NULL AUTO_INCREMENT, 

    Nom_appareil VARCHAR(50) NOT NULL, 

    Type_appareil VARCHAR(50) NOT NULL,

    Libel_appareil VARCHAR(50) NOT NULL,

    Id_appart INT(11) NOT NULL,

    FOREIGN KEY (Id_appart) REFERENCES APPARTEMENT (Id_appart),

    PRIMARY KEY(Id_appareil) 

);



CREATE TABLE UTILISATION(

    Id_ressource INT(11) NOT NULL,

    Id_appareil INT(11) NOT NULL,

    FOREIGN KEY (Id_ressource) REFERENCES RESSOURCE (Id_ressource),

    FOREIGN KEY (Id_appareil) REFERENCES APPAREIL (Id_appareil),

    PRIMARY KEY (Id_ressource,Id_appareil)
);



CREATE TABLE Consommation
(
   Id_conso INT AUTO_INCREMENT,

   Conso_kWh DOUBLE,

   Duree_conso_en_h DECIMAL(15,2),

   Date_conso DATE,

   Id_Ressource INT NOT NULL,

   Id_Appareil INT NOT NULL,

   PRIMARY KEY(Id_conso),

   FOREIGN KEY(Id_Ressource) REFERENCES Ressource(Id_Ressource),

   FOREIGN KEY(Id_Appareil) REFERENCES Appareil(Id_Appareil)
);
