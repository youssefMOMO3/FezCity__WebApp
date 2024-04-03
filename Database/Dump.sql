CREATE DATABASE  IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chart1`
--

DROP TABLE IF EXISTS `chart1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart1` (
  `Annee` int DEFAULT NULL,
  `NombreEtablissements` int DEFAULT NULL,
  `NombreLits` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart1`
--

LOCK TABLES `chart1` WRITE;
/*!40000 ALTER TABLE `chart1` DISABLE KEYS */;
INSERT INTO `chart1` VALUES (2010,300,15000),(2011,310,15500),(2012,320,16000),(2013,330,16500),(2014,340,17000),(2015,350,17500),(2016,360,18000),(2017,370,18500),(2018,380,19000),(2019,390,19500),(2020,380,18000),(2021,382,19000),(2022,384,19500);
/*!40000 ALTER TABLE `chart1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart10`
--

DROP TABLE IF EXISTS `chart10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart10` (
  `Année` int DEFAULT NULL,
  `Investissements_routes_millions_MAD` int DEFAULT NULL,
  `Investissements_transports_en_commun_millions_MAD` int DEFAULT NULL,
  `Investissements_autres_infrastructures_millions_MAD` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart10`
--

LOCK TABLES `chart10` WRITE;
/*!40000 ALTER TABLE `chart10` DISABLE KEYS */;
INSERT INTO `chart10` VALUES (2010,2000,500,10),(2011,2500,600,15),(2012,3000,700,20),(2013,3500,800,25),(2014,4000,900,30),(2015,4500,1000,35),(2016,5000,1100,40),(2017,5500,1200,45),(2018,6000,1300,50),(2019,6500,1400,55),(2020,4030,1020,20),(2021,5035,1520,30),(2022,11080,3020,40),(2023,12090,3030,50);
/*!40000 ALTER TABLE `chart10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart11`
--

DROP TABLE IF EXISTS `chart11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart11` (
  `Type_transport` varchar(50) DEFAULT NULL,
  `Pourcentage_utilisation` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart11`
--

LOCK TABLES `chart11` WRITE;
/*!40000 ALTER TABLE `chart11` DISABLE KEYS */;
INSERT INTO `chart11` VALUES ('Grands Taxis',30.00),('Petits Taxis',25.00),('Bus',30.00),('Train',15.00);
/*!40000 ALTER TABLE `chart11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart12`
--

DROP TABLE IF EXISTS `chart12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart12` (
  `Année` int DEFAULT NULL,
  `Nombre_total_de_voyageurs_millions` decimal(5,2) DEFAULT NULL,
  `Nombre_total_de_trains_par_jour` int DEFAULT NULL,
  `Nombre_total_de_quais` int DEFAULT NULL,
  `Superficie_totale_des_gares_m²` int DEFAULT NULL,
  `Taux_de_satisfaction_moyen_des_clients` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart12`
--

LOCK TABLES `chart12` WRITE;
/*!40000 ALTER TABLE `chart12` DISABLE KEYS */;
INSERT INTO `chart12` VALUES (2010,1.50,60,4,8000,75.00),(2011,1.70,65,4,8200,76.00),(2012,1.80,70,4,8400,77.00),(2013,1.90,75,4,8600,78.00),(2014,2.00,80,5,8800,79.00),(2015,2.10,80,5,9000,80.00),(2016,2.20,80,5,9200,81.00),(2017,2.30,80,6,9400,82.00),(2018,2.40,80,6,9600,83.00),(2019,2.50,80,6,9800,84.00),(2020,2.60,80,6,10000,85.00),(2021,2.70,80,6,10200,86.00),(2022,2.80,80,6,10400,87.00),(2023,2.90,80,6,10600,88.00);
/*!40000 ALTER TABLE `chart12` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart13`
--

DROP TABLE IF EXISTS `chart13`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart13` (
  `Annee` int DEFAULT NULL,
  `Pays` varchar(50) DEFAULT NULL,
  `Nombre_Visiteurs` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart13`
--

LOCK TABLES `chart13` WRITE;
/*!40000 ALTER TABLE `chart13` DISABLE KEYS */;
INSERT INTO `chart13` VALUES (2010,'France',8000),(2010,'Espagne',5000),(2010,'États-Unis',3000),(2010,'Chine',2000),(2011,'France',8500),(2011,'Espagne',5200),(2011,'États-Unis',3200),(2011,'Chine',2500),(2012,'France',9000),(2012,'Espagne',5400),(2012,'États-Unis',3400),(2012,'Chine',3000),(2013,'France',9500),(2013,'Espagne',5600),(2013,'États-Unis',3600),(2013,'Chine',3500),(2014,'France',10000),(2014,'Espagne',5800),(2014,'États-Unis',3800),(2014,'Chine',4000),(2015,'France',10500),(2015,'Espagne',6000),(2015,'États-Unis',4000),(2015,'Chine',4500),(2016,'France',11000),(2016,'Espagne',6200),(2016,'États-Unis',4200),(2016,'Chine',5000),(2017,'France',11500),(2017,'Espagne',6400),(2017,'États-Unis',4400),(2017,'Chine',5500),(2018,'France',12000),(2018,'Espagne',6600),(2018,'États-Unis',4600),(2018,'Chine',6000),(2019,'France',12500),(2019,'Espagne',6800),(2019,'États-Unis',4800),(2019,'Chine',6500),(2020,'France',13000),(2020,'Espagne',7000),(2020,'États-Unis',5000),(2020,'Chine',7000),(2021,'France',13500),(2021,'Espagne',7200),(2021,'États-Unis',5200),(2021,'Chine',7500),(2022,'France',14000),(2022,'Espagne',7400),(2022,'États-Unis',5400),(2022,'Chine',8000),(2023,'France',14500),(2023,'Espagne',7600),(2023,'États-Unis',5600),(2023,'Chine',8500);
/*!40000 ALTER TABLE `chart13` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart14`
--

DROP TABLE IF EXISTS `chart14`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart14` (
  `ID_Attraction` int NOT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Nombre_Visiteurs_Annuels` int DEFAULT NULL,
  PRIMARY KEY (`ID_Attraction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart14`
--

LOCK TABLES `chart14` WRITE;
/*!40000 ALTER TABLE `chart14` DISABLE KEYS */;
INSERT INTO `chart14` VALUES (3,'Tanneries de Chouara','Culturelle',18000),(4,'Mausolée Moulay Idriss','Historique',12000),(5,'Madrasa Bou Inania','Éducative',10000),(6,'Jardin Jnan Sbil','Récréative',14000),(7,'Porte Bab Boujloud','Historique',16000),(8,'Musée Nejjarine des Arts et Métiers du Bois','Culturelle',8000),(9,'Zaouia de Moulay Idriss II','Spirituelle',9000),(10,'Fondouk el-Nejjarine','Historique',7000),(11,'Palais Royal de Fès','Culturelle',5000),(12,'Musée Dar Batha','Éducative',6000),(13,'Borj Nord et Musée des Armes','Historique',4000),(14,'Merinid Tombs','Historique',5000),(15,'Festival de Fès des Musiques Sacrées du Monde','Événement',25000);
/*!40000 ALTER TABLE `chart14` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart15`
--

DROP TABLE IF EXISTS `chart15`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart15` (
  `ID_Evenement` int NOT NULL,
  `Nom_Evenement` varchar(100) DEFAULT NULL,
  `Mois` varchar(20) DEFAULT NULL,
  `Nombre_Visiteurs` int DEFAULT NULL,
  PRIMARY KEY (`ID_Evenement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart15`
--

LOCK TABLES `chart15` WRITE;
/*!40000 ALTER TABLE `chart15` DISABLE KEYS */;
INSERT INTO `chart15` VALUES (1,'Festival de Fès des Musiques Sacrées du Monde','Juin',10000),(2,'Festival de la Culture Soufie','Avril',5000),(3,'Festival de Fès du Film Arabe','Octobre',8000),(4,'Salon International de l Artisanat de Fès','Mai',6000),(5,'Festival des Musiques Sacrées du Monde','Juin',15000),(6,'Festival du Miel de l Atlas','Septembre',3000),(7,'Rencontres de Fès des Cultures et Religions','Décembre',2000),(8,'Festival International de la Danse Expressionniste','Mars',4000),(9,'Semaine Gastronomique de Fès','Novembre',7000),(10,'Festival National de la Poterie et de la Céramique','Juillet',4500),(11,'Festival de l Astronomie','Août',2500),(12,'Moussem de Moulay Idriss II','Septembre',10000);
/*!40000 ALTER TABLE `chart15` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart16`
--

DROP TABLE IF EXISTS `chart16`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart16` (
  `Annee` int DEFAULT NULL,
  `Categorie` varchar(50) DEFAULT NULL,
  `Revenu_Millions_EUR` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart16`
--

LOCK TABLES `chart16` WRITE;
/*!40000 ALTER TABLE `chart16` DISABLE KEYS */;
INSERT INTO `chart16` VALUES (2015,'Hébergement',60),(2015,'Restauration',45),(2015,'Activités Touristiques',25),(2015,'Transports',20),(2015,'Souvenirs',15),(2016,'Hébergement',65),(2016,'Restauration',48),(2016,'Activités Touristiques',28),(2016,'Transports',22),(2016,'Souvenirs',18),(2017,'Hébergement',70),(2017,'Restauration',50),(2017,'Activités Touristiques',30),(2017,'Transports',24),(2017,'Souvenirs',20),(2018,'Hébergement',75),(2018,'Restauration',55),(2018,'Activités Touristiques',35),(2018,'Transports',26),(2018,'Souvenirs',22),(2019,'Hébergement',80),(2019,'Restauration',60),(2019,'Activités Touristiques',40),(2019,'Transports',28),(2019,'Souvenirs',25),(2020,'Hébergement',85),(2020,'Restauration',65),(2020,'Activités Touristiques',45),(2020,'Transports',30),(2020,'Souvenirs',27),(2021,'Hébergement',90),(2021,'Restauration',70),(2021,'Activités Touristiques',50),(2021,'Transports',32),(2021,'Souvenirs',30),(2022,'Hébergement',100),(2022,'Restauration',75),(2022,'Activités Touristiques',55),(2022,'Transports',35),(2022,'Souvenirs',33),(2023,'Hébergement',120),(2023,'Restauration',80),(2023,'Activités Touristiques',50),(2023,'Transports',40),(2023,'Souvenirs',30);
/*!40000 ALTER TABLE `chart16` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart2`
--

DROP TABLE IF EXISTS `chart2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart2` (
  `Annee` int DEFAULT NULL,
  `NombreEtablissements` int DEFAULT NULL,
  `CapaciteAccueil` int DEFAULT NULL,
  `TauxOccupation` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart2`
--

LOCK TABLES `chart2` WRITE;
/*!40000 ALTER TABLE `chart2` DISABLE KEYS */;
INSERT INTO `chart2` VALUES (2010,300,15000,60),(2011,310,15500,62),(2012,320,16000,64),(2013,330,16500,66),(2014,340,17000,68),(2015,350,17500,70),(2016,360,18000,72),(2017,370,18500,74),(2018,380,19000,76),(2019,390,19500,78),(2020,380,18000,40),(2021,382,19000,50),(2022,384,19500,60);
/*!40000 ALTER TABLE `chart2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart3`
--

DROP TABLE IF EXISTS `chart3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart3` (
  `Annee` int NOT NULL,
  `BudgetBas` decimal(6,2) DEFAULT NULL,
  `BudgetMoyen` decimal(6,2) DEFAULT NULL,
  `BudgetEleve` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`Annee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart3`
--

LOCK TABLES `chart3` WRITE;
/*!40000 ALTER TABLE `chart3` DISABLE KEYS */;
INSERT INTO `chart3` VALUES (2000,150.00,400.00,800.00),(2001,160.00,420.00,850.00),(2002,170.00,440.00,900.00),(2003,180.00,460.00,950.00),(2004,190.00,480.00,1000.00),(2005,200.00,500.00,1050.00),(2006,210.00,520.00,1100.00),(2007,220.00,550.00,1150.00),(2008,230.00,580.00,1200.00),(2009,240.00,600.00,1250.00),(2010,250.00,630.00,1300.00),(2011,260.00,650.00,1350.00),(2012,270.00,680.00,1400.00),(2013,280.00,700.00,1450.00),(2014,290.00,730.00,1500.00),(2015,300.00,750.00,1550.00),(2016,310.00,780.00,1600.00),(2017,320.00,800.00,1650.00),(2018,330.00,830.00,1700.00),(2019,340.00,850.00,1750.00),(2020,350.00,880.00,1800.00),(2021,360.00,900.00,1850.00),(2022,370.00,930.00,1900.00);
/*!40000 ALTER TABLE `chart3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart4`
--

DROP TABLE IF EXISTS `chart4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart4` (
  `TypeHebergement` varchar(50) DEFAULT NULL,
  `Printemps` int DEFAULT NULL,
  `Ete` int DEFAULT NULL,
  `Automne` int DEFAULT NULL,
  `Hiver` int DEFAULT NULL,
  `Remarques` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart4`
--

LOCK TABLES `chart4` WRITE;
/*!40000 ALTER TABLE `chart4` DISABLE KEYS */;
INSERT INTO `chart4` VALUES ('Hôtels',3,5,4,3,'Plus longs séjours en été'),('Riads',4,6,5,4,'Préférence pour les séjours en riads'),('Appartements',7,10,7,6,'Séjours plus longs pour l\'indépendance'),('Auberges',2,3,2,2,'Courts séjours à budget limité');
/*!40000 ALTER TABLE `chart4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart5`
--

DROP TABLE IF EXISTS `chart5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart5` (
  `Annee` int DEFAULT NULL,
  `Nouveaux_restaurants` int DEFAULT NULL,
  `Nouveaux_cafes` int DEFAULT NULL,
  `Investissements` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart5`
--

LOCK TABLES `chart5` WRITE;
/*!40000 ALTER TABLE `chart5` DISABLE KEYS */;
INSERT INTO `chart5` VALUES (2010,7,15,41.64),(2011,8,16,43.73),(2012,9,17,45.82),(2013,9,19,47.91),(2014,10,20,50.00),(2015,12,22,55.00),(2016,12,24,60.00),(2017,14,26,65.00),(2018,14,28,70.00),(2019,16,30,75.00),(2020,8,15,40.00),(2021,10,20,45.00),(2022,18,36,80.00),(2023,20,40,85.00);
/*!40000 ALTER TABLE `chart5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart6`
--

DROP TABLE IF EXISTS `chart6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart6` (
  `Annee` int DEFAULT NULL,
  `Cuisine_Marocaine` int DEFAULT NULL,
  `Cuisine_Internationale` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart6`
--

LOCK TABLES `chart6` WRITE;
/*!40000 ALTER TABLE `chart6` DISABLE KEYS */;
INSERT INTO `chart6` VALUES (2010,60,40),(2011,62,38),(2012,64,36),(2013,65,35),(2014,66,34),(2015,67,33),(2016,68,32),(2017,69,31),(2018,70,30),(2019,71,29),(2020,72,28),(2021,73,27),(2022,74,26),(2023,75,25);
/*!40000 ALTER TABLE `chart6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart7`
--

DROP TABLE IF EXISTS `chart7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart7` (
  `Annee` int DEFAULT NULL,
  `Nouveaux_Emplois` int DEFAULT NULL,
  `Nombre_Total_Employes` int DEFAULT NULL,
  `Taux_Croissance_Emploi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart7`
--

LOCK TABLES `chart7` WRITE;
/*!40000 ALTER TABLE `chart7` DISABLE KEYS */;
INSERT INTO `chart7` VALUES (2010,500,2500,'9.1'),(2011,550,2800,'10%'),(2012,600,3200,'8.3%'),(2013,650,3600,'7.7%'),(2014,700,4000,'7.1%'),(2015,750,4400,'6.7%'),(2016,800,4800,'6.3%'),(2017,850,5200,'6.0%'),(2018,900,5600,'5.8%'),(2019,950,6000,'5.6%'),(2020,1000,6500,'6.5%'),(2021,1050,7050,'7.7%'),(2022,1100,7700,'9.2%'),(2023,1150,8350,'8.4%');
/*!40000 ALTER TABLE `chart7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart8`
--

DROP TABLE IF EXISTS `chart8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart8` (
  `Annee` int DEFAULT NULL,
  `Nouveaux_Etablissements` int DEFAULT NULL,
  `Investissements_Millions_Dirhams` decimal(10,2) DEFAULT NULL,
  `Popularite_Cuisine_Marocaine` decimal(5,2) DEFAULT NULL,
  `Nombre_Employes` int DEFAULT NULL,
  `Taux_Croissance_Emploi` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart8`
--

LOCK TABLES `chart8` WRITE;
/*!40000 ALTER TABLE `chart8` DISABLE KEYS */;
INSERT INTO `chart8` VALUES (2010,15,30.00,65.00,150,5.00),(2011,18,35.00,68.00,170,7.00),(2012,20,40.00,70.00,180,8.00),(2013,22,45.00,72.00,190,6.00),(2014,25,50.00,75.00,200,5.00),(2015,28,55.00,78.00,210,7.00),(2016,30,60.00,80.00,220,8.00),(2017,33,65.00,82.00,230,9.00),(2018,36,70.00,85.00,240,7.00),(2019,40,75.00,87.00,250,6.00),(2020,42,80.00,90.00,260,5.00),(2021,45,85.00,92.00,270,7.00),(2022,48,90.00,95.00,280,8.00),(2023,50,95.00,98.00,290,9.00);
/*!40000 ALTER TABLE `chart8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chart9`
--

DROP TABLE IF EXISTS `chart9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chart9` (
  `Année` int DEFAULT NULL,
  `Taxis_existants` int DEFAULT NULL,
  `Nombre_total_de_taxis_à_Fès` int DEFAULT NULL,
  `Taux_de_croissance_annuel` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chart9`
--

LOCK TABLES `chart9` WRITE;
/*!40000 ALTER TABLE `chart9` DISABLE KEYS */;
INSERT INTO `chart9` VALUES (2010,350,350,7.87),(2011,380,380,8.57),(2012,420,420,10.53),(2013,460,460,9.52),(2014,510,560,21.74),(2015,560,610,8.93),(2016,620,670,9.84),(2017,680,730,8.96),(2018,750,800,9.59),(2019,820,870,8.75),(2020,850,900,3.45),(2021,900,950,5.56);
/*!40000 ALTER TABLE `chart9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaires`
--

LOCK TABLES `commentaires` WRITE;
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservations` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telephone` int DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `Destination` varchar(255) DEFAULT NULL,
  `NombreDePersonnes` int DEFAULT NULL,
  `DateArrivee` date DEFAULT NULL,
  `DateDepart` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'project'
--

--
-- Dumping routines for database 'project'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-02 23:56:10
