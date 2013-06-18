/*======================================================================
 File:				Datenbank Modul Telefonbuch.sql
 Projekt:			OffSpickBackend	             
 
 Beschreibung:		Migriert das bestehende Telefonbuch-Modul in CakePHP

 Erstellung:		Juni 2013 / Michael Ott

 letzte Änderung:	16.06.2013

 Script-Version:	1.0
=======================================================================*/


/*************************************/
/* Telefonbuch-Datentabellen anpassen*/
/*************************************/

ALTER TABLE `contactcategory` DROP FOREIGN KEY `contactcategory_ibfk_1` , DROP FOREIGN KEY `contactcategory_ibfk_2` ;
ALTER TABLE `contactcategory` CHANGE COLUMN `ContactID` `contact_ID` INT(6) UNSIGNED NOT NULL DEFAULT '0'  , CHANGE COLUMN `CategoryID` `category_ID` INT(6) UNSIGNED NOT NULL DEFAULT '0'  , 
  ADD CONSTRAINT `contactcategory_ibfk_1`
  FOREIGN KEY (`contact_ID` )
  REFERENCES `contact` (`ID` ), 
  ADD CONSTRAINT `contactcategory_ibfk_2`
  FOREIGN KEY (`category_ID` )
  REFERENCES `offspickbackend`.`category` (`ID` )
, DROP INDEX `ContactID` 
, ADD INDEX `ContactID` (`contact_ID` ASC) 
, DROP INDEX `CategoryID` 
, ADD INDEX `CategoryID` (`category_ID` ASC) ;


