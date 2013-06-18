/*======================================================================
 File:				OffSpickBackend-User to CakePHP-User.sql
 Projekt:			OffSpickBackend	             
 
 Beschreibung:		Migriert das bestehende User-Modul in CakePHP

 Erstellung:		Juni 2013 / Michael Ott

 letzte Änderung:	16.06.2013

 Script-Version:	1.0
=======================================================================*/


/************************************************************/
/* Bestehende USER-Tabelle gem. CakePHP-Empfehlung anpassen */
/************************************************************/

ALTER TABLE User MODIFY id INT NOT NULL;
ALTER TABLE User DROP PRIMARY KEY;
ALTER TABLE User MODIFY id INT NOT NULL AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE User MODIFY username VARCHAR(6) NOT NULL UNIQUE;
ALTER TABLE User MODIFY password VARCHAR(50);
ALTER TABLE User Add user_group_id int;
ALTER TABLE User Add admin_user BOOLEAN;
ALTER TABLE User Add created DATETIME;
ALTER TABLE User Add modified DATETIME;
ALTER TABLE User DROP ip;



UPDATE User SET user_group_id = 1 Where user_group_id is null;


