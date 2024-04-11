-- Ne visi stulpeliai
SELECT `vardas`, `pavarde` FROM `autoriai`;

-- Tik diziosios/mazosios raides
SELECT UPPER(`vardas`), LOWER(`pavarde`) FROM `autoriai`

-- Reikšmių iš skirtingų stulpelių apjungimas į vieną
SELECT CONCAT(UPPER(`vardas`), ' ', LOWER(`pavarde`)) FROM `autoriai`

-- su AS galime pervadainti rezultatu stulpeliu pavadinimus
SELECT CONCAT(UPPER(`vardas`), ' ', LOWER(`pavarde`)) AS 'vardas_pavarde' FROM `autoriai`

-- Apvalina reikšmes
SELECT `pavadinimas`, ROUND(`kaina`) AS 'suapvalinta_kaina' FROM `knygos`

-- WHERE salyga atfiltruoja duomenis
SELECT * FROM `autoriai` WHERE `vardas` = 'Jonas'

-- Kelios salygos (Loginis operatorius AND (ir))
SELECT * FROM `knygos` WHERE `kaina` < 13 AND `puslapiu_skaicius` > 400

-- Kelios salygos (Loginis operatorius OR (arba))
SELECT * FROM `knygos` WHERE `kaina` > 19 OR `kaina` < 10 OR `puslapiu_skaicius` > 700

-- Kelios salygos (Loginis operatorius OR (arba) ir AND (ir) tada lengviau rašyti su kliaustais)
SELECT * FROM `knygos` WHERE (`kaina` > 15 AND `kaina` < 20) OR (`puslapiu_skaicius` > 300 AND `puslapiu_skaicius` < 600)

-- NOT yra salygos priešingybė
SELECT * FROM `knygos` WHERE `kaina` != 7.80
SELECT * FROM `knygos` WHERE NOT `kaina` = 7.80
SELECT * FROM `knygos` WHERE `kaina` IS NULL
SELECT * FROM `knygos` WHERE `kaina` IS NOT NULL

-- Uzklausa su salygos sarasu
SELECT * FROM `knygos` WHERE `kaina` IN (7.80, 12.50, 50.99)
-- Tokia pati uzklausa tik kitaip
SELECT * FROM `knygos` WHERE `kaina` = 7.80 OR `kaina` = 12.50 OR `kaina` = 50.99
-- SUBQUERY, uzklausa uzklausoje.
SELECT *
FROM `knygos`
WHERE `id` IN (
    SELECT `id`
	FROM `autoriai`
	WHERE `pavarde` = 'tolkien' OR `pavarde` = 'martin'
)

-- LIKE kai ieškom tik pagal dalį reikšmės
SELECT * FROM `autoriai` WHERE `vardas` LIKE 'J%'
SELECT * FROM `autoriai` WHERE `vardas` LIKE '%as'
SELECT * FROM `autoriai` WHERE `pavarde` LIKE '%a%'
SELECT * FROM `autoriai` WHERE `pavarde` LIKE '%jon%' OR `vardas` LIKE '%jon%'
SELECT * FROM `autoriai` WHERE `pavarde` LIKE 'Mar___'

-- BETWEEN leidžia pasirinkti reikšmes tam tikrame rėžyje. Sąlygos reikšmės įeina į rėžį
SELECT * FROM `knygos` WHERE `kaina` BETWEEN 10 AND 20
SELECT * FROM `knygos` WHERE `puslapiu_skaicius` BETWEEN 200 AND 400
SELECT * FROM `knygos` WHERE `puslapiu_skaicius` > 200 AND `puslapiu_skaicius` < 400
SELECT * FROM `knygos` WHERE `puslapiu_skaicius` BETWEEN 279 AND 678
SELECT * FROM `knygos` WHERE `puslapiu_skaicius` >= 279 AND `puslapiu_skaicius` <= 678

-- Komandos turi neiginį NOT
SELECT * FROM `knygos` WHERE `kaina` NOT IN (7.80, 12.50, 50.99)
SELECT * FROM `autoriai` WHERE `vardas` NOT LIKE 'J%'
SELECT * FROM `knygos` WHERE `kaina` NOT BETWEEN 10 AND 20

-- Rikiavimas pagal tam tikrą stulpelį/-ius. ASC - abėcėlės/didėjančia tvarka, DESC - atvirkščiaiai
SELECT * FROM `autoriai` ORDER BY `vardas`, `pavarde` DESC
SELECT * FROM `knygos` ORDER BY `kaina` DESC
SELECT * FROM `autoriai` ORDER BY `vardas` ASC, `pavarde` DESC;

-- DISTINCT skirtas isvesti tik nepasikartojancias reiksmes (unikalias)
SELECT DISTINCT `vardas` FROM `autoriai` ORDER BY `vardas` ASC

-- COUNT skaiciujam kiek eiluciu duomenu turime lenteleje.
SELECT COUNT(*) FROM `knygos` WHERE `puslapiu_skaicius` > 300


-- Agregacijų funkcijos
SELECT ROUND(AVG(`puslapiu_skaicius`)) AS 'vidutinis_knygos_puslapiu_skaicius' FROM `knygos`
SELECT SUM(`puslapiu_skaicius`) AS 'vidutinis_knygos_puslapiu_skaicius' FROM `knygos`
SELECT MAX(`puslapiu_skaicius`) AS 'vidutinis_knygos_puslapiu_skaicius' FROM `knygos`
SELECT MIN(`puslapiu_skaicius`) AS 'vidutinis_knygos_puslapiu_skaicius' FROM `knygos`

-- Grupuojame pagal vardus ir skaičiujame kiek yra autorių su atititinkamais vardais
SELECT `vardas`, COUNT(`id`) FROM `autoriai` GROUP BY `vardas`

-- HAVING Leidzia atfiltruoti duomenis jau po grupavimo
SELECT `vardas`, COUNT(`id`) AS 'kiekis'
FROM `autoriai`
WHERE `vardas` != 'J. R. R.'
GROUP BY `vardas`
HAVING `kiekis` = 1
ORDER BY `vardas`


-- Apjungiam lenteles su JOIN komanda
SELECT *
FROM `knygos`
JOIN `knygu_autoriai` ON `knygos`.`id` = `knygu_autoriai`.`knygos_id`
JOIN `autoriai` ON `knygu_autoriai`.`autoriaus_id` = `autoriai`.`id`

-- Apjungtom lentelem galim naudoti visas pries tai suzinotas komandas
SELECT
	COUNT(`knygos`.`id`) AS 'knygu_kiekis',
	SUM(`knygos`.`puslapiu_skaicius`) AS 'puslapiu_suma',
	`autoriai`.`vardas`,
	`autoriai`.`pavarde`
FROM `knygos`
JOIN `knygu_autoriai` ON `knygos`.`id` = `knygu_autoriai`.`knygos_id`
JOIN `autoriai` ON `knygu_autoriai`.`autoriaus_id` = `autoriai`.`id`
GROUP BY `autoriai`.`id`

-- Naujo iraso ikelimas į lentą
INSERT INTO `knygos`
(`pavadinimas`, `kaina`, `puslapiu_skaicius`)
VALUES
('Brisiaus Galas', 12.45, 7),
('Kliudžiau', 11.68, 6);
-- Naujo iraso ikelimas į lentą
INSERT INTO `knygu_autoriai`
(`knygos_id`, `autoriaus_id`)
VALUES
(8, 7),
(9, 7);

-- Įrašo duomenų atnaujinimas
UPDATE `knygos`
SET `pavadinimas` = 'SOSTŲ KARAI: Sostų žaidimas. Ledo ir ugnies giesmė.'
WHERE `id` = 4;