-- SELECT
SELECT champs FROM table options;
SELECT * FROM membres;
SELECT prenom, nom FROM membres;
SELECT prenom, nom, ville FROM membres WHERE ville = 'New-York';
SELECT prenom, nom, ville FROM membres WHERE ville = 'New-York' OR ville = 'Los-Angeles';
SELECT prenom, nom FROM membres WHERE nom LIKE'c%';
SELECT prenom, nom FROM membres WHERE nom LIKE'%y';
SELECT prenom, nom FROM membres WHERE nom LIKE'%d%';
SELECT prenom, nom FROM membres WHERE nom LIKE '_____';
SELECT prenom, nom FROM membres WHERE nom LIKE '__s%';
SELECT prenom, nom FROM membres ORDER BY nom;
SELECT prenom, nom FROM membres ORDER BY nom ASC;
SELECT prenom, nom FROM membres ORDER BY nom DESC;
SELECT prenom, nom FROM membres ORDER BY nom, prenom;
SELECT prenom, nom FROM membres ORDER BY nom, prenom DESC;
SELECT prenom, nom FROM membres ORDER BY nom DESC, prenom DESC;
SELECT ville FROM membres GROUP BY ville;
SELECT DISTINCT ville FROM membres;
SELECT ville, COUNT(*) FROM membres GROUP BY ville;
SELECT DISTINCT ville, COUNT(*) FROM membres; -- pas ce que j'attend
SELECT `ville`, COUNT(*) AS nbClients FROM `membres` GROUP BY `ville`;
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 4;
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 0,4;
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 4,4;
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 8,4;
SELECT prenom, nom FROM membres WHERE ville = 'New-York' ORDER BY RAND() LIMIT 2;
SELECT prenom, nom, naissance FROM membres WHERE YEAR(naissance) = 1977;
SELECT prenom, nom, naissance FROM membres WHERE MONTH(naissance) = 8;
SELECT prenom, nom, naissance FROM membres WHERE DAY(naissance) = 11;
SELECT prenom, nom, naissance FROM membres WHERE YEAR(naissance) >= 1975 AND YEAR(naissance) <= 1985;
SELECT prenom, nom, naissance FROM membres WHERE YEAR(naissance) BETWEEN 1975 AND 1985;
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') FROM membres;
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') AS naissance FROM membres;
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') AS naissance FROM membres ORDER BY naissance; -- déconne
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') AS naissanceFr FROM membres ORDER BY naissance;


-- INSERT
INSERT INTO table (champs) VALUES (valeurs);
INSERT INTO membres (nom, prenom, email) VALUES
				('Dumbledore', 'Albus', 'a.dumbledore@hogwarts.co.uk');

INSERT INTO membres (nom, prenom, email) VALUES
				('SNAPE', 'Severus', 'ss@hogwarts.co.uk'),
				('JEDUSOR', 'Tom', 'voldi@hogwarts.co.uk');


INSERT INTO membres VALUES (
	null,						-- id
	'Hermione',					-- prenom
	'Granger',					-- nom
	'hermione@hogwarts.com',	-- email
	'Le terrier',				-- adresse
	'12345',					-- cp
	'Dans les champs',			-- ville
	'123456789',				-- tel
	'1992-06-12',				-- naissance
	NOW()						-- inscription
);

INSERT INTO table SET champs1 = valeur1, champs2 = valeur2, .......
INSERT INTO membres SET nom = 'Weasley', prenom = 'Ron', email = 'ronweasley@leterrier.com';

-- UPDATE
UPDATE table SET champs1 = valeur1, champs2 = valeur2, ..... options;
UPDATE membres SET nom = 'Cudyyyyyyyyyyyyyyyy'; -- Attention !!!
UPDATE membres SET nom = "Cudyyyyyyyyyyyyyyyy" WHERE id=7;

UPDATE membres SET ville = 'Los Angeles' WHERE ville = 'Los-Angeles';
UPDATE membres SET ville = 'SFO' WHERE id=7 OR id=15 OR id=22;
UPDATE membres SET ville = 'SFO' WHERE id IN (7,15,22);


-- DELETE
DELETE FROM table options;
DELETE FROM membres; -- Attention !!!
DELETE FROM membres WHERE id=7;
-- Ne supprime pas la table, mais la vide !


-- Pour supprimer une table :
DROP TABLE table;
DROP TABLE membres; -- Attention !!!
