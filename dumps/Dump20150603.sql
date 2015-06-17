CREATE DATABASE  IF NOT EXISTS `data_base1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `data_base1`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: data_base1
-- ------------------------------------------------------
-- Server version	5.6.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ant_audio_anter`
--

DROP TABLE IF EXISTS `ant_audio_anter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ant_audio_anter` (
  `id` int(11) NOT NULL,
  `fecha_examen` datetime DEFAULT NULL,
  `resultado` varchar(45) DEFAULT NULL,
  `lugar_examen` varchar(45) DEFAULT NULL,
  `exa_audio_complemen` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_AntAudioAn` FOREIGN KEY (`id`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ant_audio_anter`
--

LOCK TABLES `ant_audio_anter` WRITE;
/*!40000 ALTER TABLE `ant_audio_anter` DISABLE KEYS */;
/*!40000 ALTER TABLE `ant_audio_anter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ant_morbidos`
--

DROP TABLE IF EXISTS `ant_morbidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ant_morbidos` (
  `id` int(11) NOT NULL,
  `hip_arterial` varchar(45) DEFAULT NULL,
  `hip_colesterolemia` varchar(45) DEFAULT NULL,
  `hipotiroidismo` varchar(45) DEFAULT NULL,
  `barotrauma` varchar(45) DEFAULT NULL,
  `diab_mellitus` varchar(45) DEFAULT NULL,
  `enf_renal` varchar(45) DEFAULT NULL,
  `trauma_ac_agudo` varchar(45) DEFAULT NULL,
  `vibraciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_AntMorb` FOREIGN KEY (`id`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ant_morbidos`
--

LOCK TABLES `ant_morbidos` WRITE;
/*!40000 ALTER TABLE `ant_morbidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ant_morbidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ant_otologicos`
--

DROP TABLE IF EXISTS `ant_otologicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ant_otologicos` (
  `id` int(11) NOT NULL,
  `aculenos_tinilus` varchar(45) DEFAULT NULL,
  `tipo_acu_tin` varchar(45) DEFAULT NULL,
  `vertigo` varchar(45) DEFAULT NULL,
  `af_pos_cabeza` varchar(45) DEFAULT NULL,
  `otalgia` varchar(45) DEFAULT NULL,
  `oido` varchar(45) DEFAULT NULL,
  `dolor` varchar(45) DEFAULT NULL,
  `otorrea` varchar(45) DEFAULT NULL,
  `otorragia` varchar(45) DEFAULT NULL,
  `otros` varchar(45) DEFAULT NULL,
  `otr_sint_otologicos` varchar(45) DEFAULT NULL,
  `hora_aparicion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_AntOtol` FOREIGN KEY (`id`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ant_otologicos`
--

LOCK TABLES `ant_otologicos` WRITE;
/*!40000 ALTER TABLE `ant_otologicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ant_otologicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ant_personales`
--

DROP TABLE IF EXISTS `ant_personales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ant_personales` (
  `id` int(11) NOT NULL,
  `trat_farmacologico` varchar(45) DEFAULT NULL,
  `trat_atuberculosis` varchar(45) DEFAULT NULL,
  `trat_aglucosidos` varchar(45) DEFAULT NULL,
  `enf_ORL` varchar(45) DEFAULT NULL,
  `fumador` varchar(45) DEFAULT NULL,
  `num_cigarrillos_dia` varchar(45) DEFAULT NULL,
  `alcohol` varchar(45) DEFAULT NULL,
  `emf_afec_otica` varchar(45) DEFAULT NULL,
  `inter_quirurgica` varchar(45) DEFAULT NULL,
  `dosis` varchar(45) DEFAULT NULL,
  `detallar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_AntPersonales` FOREIGN KEY (`id`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ant_personales`
--

LOCK TABLES `ant_personales` WRITE;
/*!40000 ALTER TABLE `ant_personales` DISABLE KEYS */;
/*!40000 ALTER TABLE `ant_personales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diagnostico`
--

DROP TABLE IF EXISTS `diagnostico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idf_diag_evaluador` varchar(45) DEFAULT NULL,
  `id_paciente` varchar(45) DEFAULT NULL,
  `id_usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `ADer250` int(11) DEFAULT NULL,
  `ODer250` int(11) DEFAULT NULL,
  `AIzq250` int(11) DEFAULT NULL,
  `OIzq250` int(11) DEFAULT NULL,
  `ADer500` int(11) DEFAULT NULL,
  `ODer500` int(11) DEFAULT NULL,
  `AIzq500` int(11) DEFAULT NULL,
  `OIzq500` int(11) DEFAULT NULL,
  `ADer1000` int(11) DEFAULT NULL,
  `ODer1000` int(11) DEFAULT NULL,
  `AIzq1000` int(11) DEFAULT NULL,
  `OIzq1000` int(11) DEFAULT NULL,
  `ADer2000` int(11) DEFAULT NULL,
  `ODer2000` int(11) DEFAULT NULL,
  `AIzq2000` int(11) DEFAULT NULL,
  `OIzq2000` int(11) DEFAULT NULL,
  `ADer3000` int(11) DEFAULT NULL,
  `ODer3000` int(11) DEFAULT NULL,
  `AIzq3000` int(11) DEFAULT NULL,
  `OIzq3000` int(11) DEFAULT NULL,
  `ADer4000` int(11) DEFAULT NULL,
  `ODer4000` int(11) DEFAULT NULL,
  `AIzq4000` int(11) DEFAULT NULL,
  `OIzq4000` int(11) DEFAULT NULL,
  `ADer6000` int(11) DEFAULT NULL,
  `ODer6000` int(11) DEFAULT NULL,
  `AIzq6000` int(11) DEFAULT NULL,
  `OIzq6000` int(11) DEFAULT NULL,
  `ADer8000` int(11) DEFAULT NULL,
  `ODer8000` int(11) DEFAULT NULL,
  `AIzq8000` int(11) DEFAULT NULL,
  `OIzq8000` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diagnostico`
--

LOCK TABLES `diagnostico` WRITE;
/*!40000 ALTER TABLE `diagnostico` DISABLE KEYS */;
INSERT INTO `diagnostico` VALUES (1,NULL,'1',NULL,'2015-04-21 08:21:26',56,56,20,67,55,56,60,56,45,67,70,45,76,78,45,67,78,89,40,78,98,90,45,89,45,45,68,90,56,56,89,110),(2,NULL,'2',NULL,'2015-04-22 07:00:31',55,40,60,40,65,65,65,60,80,65,75,65,75,65,80,70,80,70,95,70,95,75,100,70,NULL,NULL,NULL,NULL,100,NULL,100,NULL),(3,NULL,'1',NULL,'2015-04-24 18:18:05',76,87,1,5,7,87,2,4,65,87,7,87,97,87,9,9,76,7,8,76,76,87,9,9,8,98,8,5,87,76,9,54),(4,NULL,'1',NULL,'2015-06-03 18:32:27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `diagnostico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluador`
--

DROP TABLE IF EXISTS `evaluador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_PEvaluador` FOREIGN KEY (`id`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluador`
--

LOCK TABLES `evaluador` WRITE;
/*!40000 ALTER TABLE `evaluador` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ex_ruido_e_laboral`
--

DROP TABLE IF EXISTS `ex_ruido_e_laboral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ex_ruido_e_laboral` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `discoteca` varchar(45) DEFAULT NULL,
  `casa` varchar(45) DEFAULT NULL,
  `motociclismo` varchar(45) DEFAULT NULL,
  `rep_musica` varchar(45) DEFAULT NULL,
  `arma_fuego` varchar(45) DEFAULT NULL,
  `otro` varchar(45) DEFAULT NULL,
  `frec_exposicion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_ExpoRExL` FOREIGN KEY (`id`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ex_ruido_e_laboral`
--

LOCK TABLES `ex_ruido_e_laboral` WRITE;
/*!40000 ALTER TABLE `ex_ruido_e_laboral` DISABLE KEYS */;
/*!40000 ALTER TABLE `ex_ruido_e_laboral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exp_lab_ototoxicos`
--

DROP TABLE IF EXISTS `exp_lab_ototoxicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exp_lab_ototoxicos` (
  `id` int(11) NOT NULL,
  `sol_organicos` varchar(45) DEFAULT NULL,
  `quim_industriales` varchar(45) DEFAULT NULL,
  `otroSO` varchar(45) DEFAULT NULL,
  `otroQI` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_ExpoOto` FOREIGN KEY (`id`) REFERENCES `ident_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exp_lab_ototoxicos`
--

LOCK TABLES `exp_lab_ototoxicos` WRITE;
/*!40000 ALTER TABLE `exp_lab_ototoxicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `exp_lab_ototoxicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `h_laboral_exp_a`
--

DROP TABLE IF EXISTS `h_laboral_exp_a`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `h_laboral_exp_a` (
  `id` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `base` varchar(45) DEFAULT NULL,
  `seguimiento` varchar(45) DEFAULT NULL,
  `confirmacion` varchar(45) DEFAULT NULL,
  `t_ser_empresa` varchar(45) DEFAULT NULL,
  `sec_trabajo` varchar(45) DEFAULT NULL,
  `exp_ruido` varchar(45) DEFAULT NULL,
  `t_servicio` varchar(45) DEFAULT NULL,
  `t_diar_trabajo` varchar(45) DEFAULT NULL,
  `e_prot_auditiva` varchar(45) DEFAULT NULL,
  `utilizacion` varchar(45) DEFAULT NULL,
  `tipo_protector` varchar(45) DEFAULT NULL,
  `tr_anterior_ruido` varchar(45) DEFAULT NULL,
  `tr_ruido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `idf_Hlab_Expact` FOREIGN KEY (`id`) REFERENCES `ident_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `h_laboral_exp_a`
--

LOCK TABLES `h_laboral_exp_a` WRITE;
/*!40000 ALTER TABLE `h_laboral_exp_a` DISABLE KEYS */;
/*!40000 ALTER TABLE `h_laboral_exp_a` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ident_empresa`
--

DROP TABLE IF EXISTS `ident_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ident_empresa` (
  `id` int(11) NOT NULL,
  `idf_empresa` varchar(45) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Nombre_E` varchar(45) DEFAULT NULL,
  `RUT` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idf_Empresa_idx` (`idf_empresa`),
  CONSTRAINT `idf_paciente` FOREIGN KEY (`id`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ident_empresa`
--

LOCK TABLES `ident_empresa` WRITE;
/*!40000 ALTER TABLE `ident_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `ident_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Apellido` varchar(45) DEFAULT NULL,
  `Edad` varchar(45) DEFAULT NULL,
  `Cedula` varchar(45) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `Fecha_de_nacimiento` datetime DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Barrio` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Ocupacion` varchar(45) DEFAULT NULL,
  `Procedencia` varchar(45) DEFAULT NULL,
  `Fecha_Realizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'Dario Chamorro','25',NULL,'M','1989-11-17 00:00:00','Cll 9 # 8 04','San Camilo','23423','Ing',NULL,NULL),(2,'Julian Fernandez','27',NULL,'M','1988-10-22 00:00:00','Cll 4 # 4 32','Santa Clara','34657','abogado',NULL,NULL);
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-03 16:39:00
