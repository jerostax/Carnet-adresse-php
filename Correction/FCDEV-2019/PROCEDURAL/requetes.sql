-- SELECT
SELECT * FROM membres;
SELECT prenom, nom FROM membres;
SELECT `prenom`, `nom`, `ville` FROM membres WHERE ville='New-York';
SELECT prenom, nom, ville FROM membres WHERE ville='New-York' OR ville='Los-Angeles';
SELECT prenom, nom FROM membres WHERE nom LIKE '%y';
SELECT prenom, nom FROM membres WHERE nom LIKE 'c%';
SELECT prenom, nom FROM membres WHERE nom LIKE '%d%';
SELECT prenom, nom FROM membres WHERE nom LIKE '_____';
SELECT prenom, nom FROM membres WHERE nom LIKE '__s%';
SELECT prenom, nom FROM membres WHERE nom LIKE '%o%' AND ville = 'Los-Angeles';
SELECT prenom, nom FROM membres ORDER BY nom;
SELECT prenom, nom FROM membres ORDER BY nom DESC;
SELECT prenom, nom FROM membres ORDER BY nom, prenom;
SELECT prenom, nom FROM membres ORDER BY nom, prenom DESC;
SELECT prenom, nom FROM membres ORDER BY nom DESC, prenom;
SELECT prenom, nom FROM membres ORDER BY nom DESC, prenom DESC;
SELECT DISTINCT ville FROM membres ORDER BY ville;
SELECT ville FROM membres GROUP BY ville;
SELECT ville, COUNT(*) FROM membres GROUP BY ville;
SELECT DISTINCT ville, COUNT(*) FROM membres ORDER BY ville; -- Marche pas comme on veut
SELECT ville, COUNT(*) AS people FROM membres GROUP BY ville;
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 4;
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 0,4; -- système de pagination
-- 0 = n° d'index de départ où afficher les enregistrements
-- 4 = nb d'enregistrements à afficher
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 4,4;
SELECT prenom, nom FROM membres ORDER BY nom LIMIT 8,4;
SELECT prenom, nom FROM membres WHERE ville = 'New-York' ORDER BY nom LIMIT 2;
SELECT prenom, nom FROM membres ORDER BY RAND() LIMIT 2;
SELECT prenom, nom, naissance FROM membres WHERE YEAR(naissance) = 1977;
SELECT prenom, nom, naissance FROM membres WHERE MONTH(naissance) = 08;
SELECT prenom, nom, naissance FROM membres WHERE DAY(naissance) = 11;
SELECT prenom, nom, naissance FROM membres WHERE YEAR(naissance) BETWEEN 1977 AND 1983;
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') FROM membres;
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') AS naissance FROM membres;
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') AS naissance FROM membres ORDER BY naissance;
SELECT prenom, nom, DATE_FORMAT(naissance, '%d-%m-%Y') AS naissanceFr FROM membres ORDER BY naissance;


-- INSERT
INSERT INTO membres (nom, prenom, email) VALUES ('Duck', 'Donald', 'dduck@donaldville.com');
INSERT INTO membres (nom, prenom, email) 
	VALUES	('Duck', 'Riri', 'rduck@donaldville.com'),
			('Duck', 'Fifi', 'fduck@donaldville.com');

INSERT INTO membres 
	VALUES	(null, -- champs ID
			'Loulou',
			'Duck',
			'lduck@donaldville.com',
			'zerzerze',
			'09766',
			'Donaldville',
			'555-23456',
			'1976-09-23',
			 NOW()
			 );

INSERT INTO membres SET nom = 'Picsou', prenom = 'Baltazar', ville = "Picsouville", cp = '12345';

-- UPDATE
UPDATE membres SET ville = "Picsouville", cp = '12345' WHERE id = 24;
UPDATE membres SET ville = "Picsouville" WHERE id IN (24, 25, 26);

-- DELETE
DELETE FROM membres;
DELETE FROM membres WHERE id = 24;
