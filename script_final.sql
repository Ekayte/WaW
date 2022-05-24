-- creation de la base WaW

CREATE DATABASE WaW;

-- Se placer sur la base WaW
USE WaW;

-- Création de la table 

#------------------------------------------------------------
# Table: Joueur
#------------------------------------------------------------
CREATE TABLE IF NOT EXISTS Joueur
(
        joueur_code   INT  AUTO_INCREMENT   ,
        joueur_nom    VARCHAR (32) NOT NULL ,
        joueur_prenom VARCHAR (32) NOT NULL ,
        joueur_mail   VARCHAR (50) NOT NULL ,
        joueur_tel    VARCHAR (10) NOT NULL ,
		PRIMARY KEY (joueur_code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Race
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Race
(
        race_code  INT  AUTO_INCREMENT   ,
        race_nom    ENUM('Nain','Elfe', 'Orque', 'Troll','Gnome', 'Humain')DEFAULT 'Humain',
        race_desc  TEXT NOT NULL COLLATE utf8_unicode_ci,
        race_effet TEXT NOT NULL ,
		PRIMARY KEY (race_code)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Personnage
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Personnage
(
        perso_code     INT  AUTO_INCREMENT   ,
        perso_ps       VARCHAR (32) NOT NULL ,
        perso_comp_spe VARCHAR (10) ,
        perso_niv      TINYINT UNSIGNED NOT NULL ,
        perso_armure   TINYINT UNSIGNED ,
        perso_vie      TINYINT UNSIGNED NOT NULL ,
        perso_taille   DECIMAL (3,2) NOT NULL ,
        perso_poids    DECIMAL (5,2) NOT NULL ,
        perso_vitesse  TINYINT ,
        perso_force    TINYINT ,
        perso_INTel    TINYINT ,
        perso_degat    TINYINT ,
        joueur_code    INT NOT NULL ,
        race_code      INT NOT NULL ,
        cl_code        INT NOT NULL	,
		PRIMARY KEY (perso_code)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: inventaire
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS inventaire
(
        inv_code     INT  AUTO_INCREMENT    ,
        inv_taille   TINYINT UNSIGNED NOT NULL ,
        inv_contenue TINYINT UNSIGNED NOT NULL ,
        perso_code   INT NOT NULL ,
		PRIMARY KEY (inv_code)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Categorie_item
#------------------------------------------------------------

CREATE TABLE Categorie_item(
        cat_code_item INT  AUTO_INCREMENT   ,
        cat_nom_cat   VARCHAR (32) NOT NULL ,
		PRIMARY KEY (cat_code_item)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Item
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Item
(
        item_code        INT  AUTO_INCREMENT  ,
        item_degat       SMALLINT  ,
        item_armure      SMALLINT  ,
        item_nom         VARCHAR (32) NOT NULL ,
        item_descriptif  TEXT NOT NULL ,
        item_prix__achat DECIMAL (5,2) ,
        item_prix_vente  DECIMAL (5,2) ,
        cat_code_item    INT NOT NULL ,
		PRIMARY KEY (item_code)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Classe
#------------------------------------------------------------

CREATE TABLE Classe(
        cl_code  INT  AUTO_INCREMENT  ,
        cl_nom   ENUM('Paladin','Voleur', 'Archer', 'Guerrier','Mage','Moine') DEFAULT 'Paladin'NOT NULL,
        cl_desc  TEXT NOT NULL ,
        cl_effet TEXT NOT NULL ,
		PRIMARY KEY (cl_code)
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS Contenir
(
		qte_item TINYINT UNSIGNED,
        item_code INT NOT NULL ,
        inv_code  INT NOT NULL ,
		PRIMARY KEY (item_code,inv_code)
)ENGINE=InnoDB;


#--------------------------------------------------------------------------------------------
# 	Clés étrangères
#--------------------------------------------------------------------------------------------


ALTER TABLE Personnage

    ADD CONSTRAINT race_code_FK FOREIGN KEY (race_code) REFERENCES Race(race_code), 

    ADD CONSTRAINT cl_code_FK FOREIGN KEY (cl_code) REFERENCES Classe(cl_code), 

    ADD CONSTRAINT joueur_code_FK FOREIGN KEY (joueur_code) REFERENCES Joueur(joueur_code); 

    

ALTER TABLE Inventaire

    ADD CONSTRAINT perso_code_FK FOREIGN KEY (perso_code) REFERENCES Personnage(perso_code) ;

  

ALTER TABLE Contenir 

    ADD CONSTRAINT inv_code_FK FOREIGN KEY (inv_code) REFERENCES Inventaire(inv_code), 

    ADD CONSTRAINT item_code_FK FOREIGN KEY (item_code) REFERENCES Item(item_code); 

        

ALTER TABLE Item

    ADD CONSTRAINT cat_code_item_FK FOREIGN KEY (cat_code_item) REFERENCES Categorie_item(cat_code_item); 

    

#------------------------------------------------------------
#  insertion de données
#------------------------------------------------------------


INSERT INTO Joueur VALUES (NULL, "VALAIN", "Émilien", "emilien.valain@reseau.eseo.fr", "0654896531"),
						  (NULL, "TERRIEN", "Marius", "marius.terrien@reseau.eseo.fr", "0725489218"),
						  (NULL, "FREDOUILLARD", "Alexis", "alexis.fredouillard@reseau.eseo.fr", "0618965247"),
						  (NULL, "CAROFF", "Anthony", "anthony.caroff@reseau.eseo.fr", "0756849536"),
						  (NULL, "RIVIERE", "Thibault", "thibault.riviere@reseau.eseo.fr", "0634587921");
						  
						  
						  
INSERT INTO Classe VALUES(NULL, "Paladin", "Les paladins affrontent leurs ennemis de face, confiants en leur armure lourde et en leurs sorts de soin pour survivre aux assauts les plus meurtriers. Qu’ils brandissent un bouclier massif ou une arme à deux mains démesurée, les paladins parviennent à éloigner griffes et armes de leurs alliés, mais doivent faire un usage réfléchi de leurs sorts guérisseurs pour ne pas se laisser submerger.", "Est très polyvalent et maîtrise la guérison" ),
						 (NULL, "Voleur", "Les voleurs prennent souvent la précaution de se dissimuler dans l’ombre pour engager un combat et porter leurs coups pernicieux au corps-à-corps. Si l’affrontement s’éternise, leurs attaques affaiblissent leur adversaire jusqu’à lui porter le coup de grâce. Ces maîtres de l’évasion sélectionnent leurs cibles avec soin afin de ne pas gaspiller leurs enchaînements de coups, et doivent se tenir prêts à s’éclipser ou fuir au cas où la bataille tournerait en leur défaveur.", "Indétectable quand il dépouille sa cible" ),
						 (NULL, "Archer", "Les archer combattent leurs ennemis à bonne distance, ordonnant à leurs fidèles familiers d’attaquer tandis qu’ils font pleuvoir les flèches ou les balles sur leur malheureuse cible. Si leurs attaques à distance sont dévastatrices à longue comme à courte distance, les chasseurs sont aussi extrèmement mobiles. Ils peuvent esquiver ou ralentir leurs adversaires et ainsi garder un temps d’avance.", "Est dôté d'une précision sans faille" ),
						 (NULL, "Guerrier", "Les guerriers s’équipent avec précaution pour le combat, et n’hésitent pas à engager le combat la tête la première tel un éclair vêtu d’une armure lourde. Leurs tactiques de combat sont variées et ils peuvent brandir plusieurs types d’armes pour protéger leurs alliés moins versés dans le combat. Toutefois, ils doivent gérer cette rage et la puissance de leurs assauts les plus violents avec attention, afin de maximiser leur efficacité au cœur de la bataille.", "Capable de rentrer dans une rage dévastatrice qui le rend puissant" ),
						 (NULL, "Mage", "Les mages anéantissent leurs ennemis par leurs incantations arcaniques. S’ils manient des sorts offensifs d’une puissance indicible, ils n’en sont pas moins fragiles avec leurs armures légères, ce qui les laisse particulièrement vulnérables au combat en corps-à-corps. Ainsi, les mages les plus sages font un usage réfléchi de leurs sortilèges pour garder leurs ennemis à bonne distance ou les clouer sur place.", "Capable d'utiliser la magie, ce qui rend leur pouvoir destructeur" ),
						 (NULL, "Moine", "Quel que soit leur rôle au combat, les moines comptent surtout sur leurs mains et leurs pieds pour mener la danse, et sur un lien fort avec leur chi pour nourrir leurs pouvoirs. Des techniques comme Extraction du mal et Onde de chi leur permettent de soigner leurs alliés tout en attaquant leurs ennemis.", "Maîtrise le Chi favorisant ses déplacement sur le champ de bataille" );



INSERT INTO Race VALUES (NULL,"Nain","Les nains sont des travailleurs volontaires connus pour leur compétence martiale, leur faculté à résister à tout ou presque, leur grande connaissance des secrets de la terre et la quantité de bière qu'ils sont capables d'ingurgiter. Leurs mystérieux royaumes, taillés à l'intérieur des montagnes, sont renommés pour les merveilleux trésors qu'ils produisent.","Le nain est très intelligent, sa bonne' connaissance du terrain vous permettra de vous dépétrer de mauvaises situations"),
						(NULL,"Elfe","Les elfes accordent beaucoup d’importance à l’intimité et aux traditions. Ils n’accordent pas leur amitié rapidement mais, lorsqu’un elfe ou une communauté d’elfes considère un étranger comme un camarade, cette alliance peut perdurer sur plusieurs générations. À cause de leur espérance de vie incroyablement longue ou peut-être pour des raisons plus mystiques, les elfes possèdent une relation étrange avec leur environnement.","L'elfe n'est pas une espèce puissante mais c'est une espèce clairvoyante et fûtée."),
						(NULL,"Orque","Les orques sont des monstres dont l’existence tragique est une conséquence d’actes pervers ou violents – ou, du moins, c’est ce que les autres races pensent d’eux. Il est vrai que les orques ne sont que rarement le produit d’unions basées sur l’amour. C’est sans doute pour cela qu’ils sont forcés de grandir et de s’endurcir rapidement en combattant sans cesse pour se défendre ou pour se faire un nom.", "Les orques sont dôtés d'une puissance au bord du surnaturel et d'une férocité légendaire"),
						(NULL,"Troll","A l’origine les trolls, ne sont pas des créatures à proprement parlé. Le terme troll était une insulte pour désigner les géants, les ennemis des dieux qui étaient aussi grands que laids. Au fil des siècles, des histoires et des légendes ils sont devenus des êtres à part. Ils sont plus grands que les humains et que les elfes. On peut parler de véritables créatures, car ils ont un aspect monstrueux et terrifient toutes les races. Ils sont aussi stupides qu’affamés ; ils ne parlent pas et n’obéissent à aucune règle. De plus, leur comportement est brutal, ils sont peu enclins à la vie en société.","Les trolls sont connus pour leur cruauté, leur force et leur abilité à la magie"),
						(NULL,"Gnome","Ces brillants inventeurs à la nature irrésistiblement joviale ont pourtant connu la trahison et l’exode, et échappé de peu au génocide. C’est ainsi leur remarquable optimisme face à de si terribles calamités qui symbolise l’inébranlable esprit des gnomes.​","Les gnomes sont dôtés d'une excellente force mentale et d'une grande ingéniosité."),
						(NULL,"Humain","Les humains possèdent un dynamisme exceptionnel ainsi qu’une grande capacité à surmonter les difficultés et à se multiplier, ce qui explique sans doute pourquoi il s’agit de la race dominante. Leurs empires et leurs nations s’étendent sur de larges territoires et les membres de ces sociétés se forgent un nom à la pointe de leur épée ou grâce à la puissance de leur magie.","Les humains sont puissants et dominent le monde mais ils peuvent parfois manquer de clairvoyance et être abusé par leur pouvoir");



INSERT INTO Personnage VALUES (NULL,"valem","précision",0,0,100,1.70,85.5,56,40,58,70,1,6,3),
							  (NULL,"terriema","potions",16,50,84,1.95,112.5,37,75,92,67,2,3,5),
							  (NULL,"terriema2","assassin",7,20,90,1.54,57,72,34,72,87,2,5,2),
							  (NULL,"caroffan","soin",12,0,100,1.72,86.5,68,67,87,64,4,4,1),
							  (NULL,"fredoual","botaniste",7,25,26,1.26,96.7,28,68,90,54,3,2,6);
							  
							  

INSERT INTO Inventaire VALUES(NULL, 100, 0, 1),
							 (NULL, 100, 0, 2),
							 (NULL, 100, 0, 3),
							 (NULL, 100, 0, 4),
							 (NULL, 100, 0, 5);



INSERT INTO Categorie_item VALUES(NULL, "Arme"),
								 (NULL, "Armure"),
								 (NULL, "Fleur"),
								 (NULL, "Quête"),
								 (NULL, "Potion");
								 


INSERT INTO Item VALUES(NULL, 50, 10, "Épée", "Cette épée vas te detruire", 32.54, 20.6, 1),
					   (NULL, 0, 40, "Plastron", "Ce plastron va vous protéger d'une attaque haute", 30.26, 25.3, 2),
					   (NULL, 0, 0, "Tulipe", "Cet objet ne sert à rien", 2.50, 0.50, 3),
					   (NULL, 0, 0, "Clé", "Cette clé vas vous permettre d'ouvrir des portes cachés", 0, 0, 4),
					   (NULL, 200, 0, "Poison", "verser un peut de poison dans le verre de l'un des joueur pour le voir disparaitre", 150.54, 145.5, 5);



INSERT INTO Contenir VALUES(1, 1, 1),
						   (1, 2, 2),
						   (5, 3, 3),
						   (1, 4, 4),
						   (2, 5, 5);