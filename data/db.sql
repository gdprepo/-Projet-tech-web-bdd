CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT,
    firstname VARCHAR(80) NOT NULL,
    lastname VARCHAR(80) NOT NULL,
    picture_url VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO user (firstname, lastname, picture_url, password)
VALUES ('gabin', 'depaire', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg', '1234');

CREATE TABLE IF NOT EXISTS projet (
    id INT AUTO_INCREMENT,
    title VARCHAR(80) NOT NULL,
    date VARCHAR(80) NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO projet (title, date, description)
VALUES ('Unity Chess', '2011', 'Description du projet 2010.......................');
INSERT INTO projet (title, date, description)
VALUES ('C graphique', '2012', 'RPG Description du projet 2010.......................');
INSERT INTO projet (title, date, description)
VALUES ('Site Statique', '2013', 'Python projet 2010.......................');

CREATE TABLE IF NOT EXISTS free_space (
    id INT AUTO_INCREMENT,
    activite VARCHAR(80) NOT NULL,
    text VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO free_space (activite, text)
VALUES ('Sport' ,'Résumé .......................');
INSERT INTO free_space (activite, text)
VALUES ('Activité' ,'Résumé .......................');
INSERT INTO free_space (activite, text)
VALUES ('Musique' ,'Résumé .......................');

CREATE TABLE IF NOT EXISTS study (
    id INT AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    description VARCHAR(255) NOT NULL,
    start_date VARCHAR(80) NOT NULL,
    end_date VARCHAR(80) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO study (name, description, start_date, end_date)
VALUES ('Lycee', 'La rochelle lycée description du projet SCOLAIRE.......................', '2014-09-03', '2017-09-03');
INSERT INTO study (name, description, start_date, end_date)
VALUES ('Epitech', 'Ecole de programmation C première année SCOLAIRE.......................', '2017-09-03', '2017-09-03');

CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT,
    text VARCHAR(80) NOT NULL,
    level INT,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO skills (text, level)
VALUES ('Programme C', '50');
INSERT INTO skills (text, level)
VALUES ('HTML / CSS', '40');
INSERT INTO skills (text, level)
VALUES ('Python', '60');

CREATE TABLE IF NOT EXISTS professionnal (
    id INT AUTO_INCREMENT,
    title VARCHAR(80) NOT NULL,
    start_date VARCHAR(80) NOT NULL,
    end_date VARCHAR(80) NOT NULL,
    description VARCHAR(255) NOT NULL,
    organisme VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO professionnal (title, start_date, end_date, description, organisme)
VALUES ('Entreprise Design Lezard', '20/10/2010', '20/10/2011','Description du projet 2010.......................', "organisme");
INSERT INTO professionnal (title, start_date, end_date, description, organisme)
VALUES ('Entreprise Hotel Sain Jean d Acre', '20/10/2018', '20/10/2019','Description du projet 2010.......................', "organisme");

CREATE TABLE IF NOT EXISTS contact (
    id INT AUTO_INCREMENT,
    content1 VARCHAR(255) NOT NULL,
    content2 VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO contact (content1, content2)
VALUES ('Content1 contact...............', 'Content2 contact...............');

CREATE TABLE IF NOT EXISTS message (
    id INT AUTO_INCREMENT,
    adresse VARCHAR(80) NOT NULL,
    nom VARCHAR(80) NOT NULL,
    prenom VARCHAR(80) NOT NULL,
    content VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO message (adresse, nom, prenom, content)
VALUES ('5 rue de la..... 33000', 'Depaaaire',  'Gabin','Content message...............');
INSERT INTO message (adresse, nom, prenom, content)
VALUES ('6 rue de la..... 75000', 'Zelairez',  'Pierre','Content message...............');
INSERT INTO message (adresse, nom, prenom, content)
VALUES ('10 rue de la..... 17000', 'Elaire',  'Jasque','Content message...............');

CREATE TABLE IF NOT EXISTS realisation (
    id INT AUTO_INCREMENT,
    title VARCHAR(80) NOT NULL,
    picture VARCHAR(255) NOT NULL,
    logiciel VARCHAR(80) NOT NULL,
    lien VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO realisation (title, picture, logiciel, lien)
VALUES ('Projet Unity game 2D', 'https://yka.ch/wp-content/uploads/2016/11/unity-logo-e1480441742952.png',  'Unity','https://github.com/');
INSERT INTO realisation (title, picture, logiciel, lien)
VALUES ('Projet After effect', 'https://www.digitalartsonline.co.uk/cmsdata/features/3663925/adobe-premiere-pro-2017-opener.jpg',  'Adobe After Effect','https://github.com/');
INSERT INTO realisation (title, picture, logiciel, lien)
VALUES ('Projet python site statique', 'https://fortimelp.fr/296/formation-python-les-fondamentaux-3-jours.jpg',  'Python','https://github.com/');
INSERT INTO realisation (title, picture, logiciel, lien)
VALUES ('Projet WEB', 'http://anyssehalifa.fr/img/portfolio/EAP_responsive2.jpg',  'HTML / CSS / JAVA','https://github.com/');







