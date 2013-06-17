/*======================================================================
 File:				Datenbank Modul News.sql
 Projekt:			OffSpickBackend	             
 
 Beschreibung:		Erstellt die initiale Datenbank für das News-Modul

 Anleitung:			1. ist für Typ3 (individuelle Masken mit Medikamenten
					   sind nicht berücksichtigt und müssen bei Bedarf
					   ergänzt werden
					2. Backup erstellen!
					3. Leistungsblätter müssen von Hand kontrolliert werden
					4. Index anschliessend prüfen/korrigieren (alle VM31..)

 Erstellung:		Juni 2013 / Michael Ott

 letzte Änderung:	16.06.2013

 Script-Version:	1.0
=======================================================================*/


/*********************************/
/* Tabelle News_Category anlegen */
/*********************************/

CREATE TABLE `news_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `valid_from` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `valid_to` datetime NOT NULL DEFAULT '2100-01-01 00:00:00',
  `created` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


/*********************************/
/* Beispiel-Kategorien abfüllen  */
/*********************************/

INSERT INTO news_category
	(name,valid_from,valid_to, created) 
VALUES 
	('Allgemein','2012-01-01','2100-01-01','2013-06-01'),
	('Fahrzeuge','2012-01-01','2100-01-01','2013-06-01'),
	('Ferien','2012-01-01','2100-01-01','2013-06-01'),
	('Hydranten','2012-01-01','2100-01-01','2013-06-01'),
	('Material','2012-01-01','2100-01-01','2013-06-01'),
	('Strassen','2012-01-01','2100-01-01','2013-06-01');
	



/*********************************/
/* Tabelle News_Message anlegen  */
/*********************************/

CREATE TABLE `news_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` tinytext NOT NULL,
  `valid_from` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `valid_to` datetime NOT NULL DEFAULT '2100-01-01 00:00:00',
  `created` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `modified` datetime DEFAULT NULL,
  `news_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


/*********************************/
/* Beispiel-News abfüllen        */
/*********************************/

INSERT INTO news_message
	(message,news_category_id, valid_from,valid_to, created) 
VALUES 
	('Alles ruhig',1,'2012-01-01','2100-01-01','2013-06-01'),
	('VW Amorak Pickup ist da!',2,'2012-05-15','2100-01-01','2013-06-01'),
	('TLF im Service',2,'2012-01-01','2100-01-01','2013-06-01'),
	('Max Muster ganzer Juni weg',3,'2012-01-01','2100-01-01','2013-06-01'),
	('Hydrant Schulustrasse temporaer ausser Betrieb',4,'2012-01-01','2100-01-01','2013-06-01'),
	('Neue Seile sind da',5,'2012-01-01','2100-01-01','2013-06-01'),
	('temp. Sackgasse Kirchgasse',6,'2012-01-01','2100-01-01','2013-06-01');
    
    
    
    
    