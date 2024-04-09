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