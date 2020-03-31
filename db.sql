DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `k` varchar(20) NOT NULL,
  `v` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES (2,'wmj','{\"appid\":\"wmj_6bd1gtYMZBn\",\"appsecret\":\"VIGBwIvl2dwD0pST2dIMm8MZOeVX3KlT\",\"aeskey\":\"\"}','健身房免责声明</br>\r\n1、本免责声明适用于我单位健身房内的所有活动。</br>\r\n2、凡健身参加者均应当为具有完全民事行为能力人,如在活动中发生财产或人身损害后果,本单位不承担任何赔偿责任或其他法律责任,由受损害人依据法律规定和本声明依法解决;凡健身参与者均应完全阅读本声明并视为接受本声明,并必须由本人在声明最后确认同意。</br>\r\n3、健身房中参与者属于自由结合、自愿参加、风险自担、责任自负,参与者均应为完全民事行为能力者。管理者和办公室并不从健身活动中收取任何费用或盈利,亦不构成管理方的经营行为,管理方不对任何个人或机构承担民事赔偿责任或补充民事赔偿责任。</br>\r\n4、为保证运动的严肃、高效,最大限度防止运动所具有的危险、不可预知性,如果健身参与者报名参加了活动,活动参加者必须自行承担活动的危险和风险所造成的一切后果。</br>\r\n5、管理方无义务为健身参加者购买保险,参加者可以自行购买意外保险。</br>\r\n6、鉴于器械运动难免会存在不可预知的危险性,请务必仔细阅读本声明及相关责任书或健身房管理制度。同意后,本声明将自动生效并表明参加者已接受,如参加者对本声明条款存在异议或不能接受,请在活动开始时退出活动。\r\n参与者自愿参加活动并同意以上声明。</br>\r\n\r\n                                                                                                                 XXX街道综合文化站\r\n');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locks`
--

DROP TABLE IF EXISTS `locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sn` varchar(20) NOT NULL,
  `sim` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locks`
--

LOCK TABLES `locks` WRITE;
/*!40000 ALTER TABLE `locks` DISABLE KEYS */;
INSERT INTO `locks` VALUES (18,'演示','WMJ16680004',''),(17,'健身房','WMJ19000001','');
/*!40000 ALTER TABLE `locks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

