CREATE TABLE `covidrs` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nome` varchar(120) DEFAULT NULL,
 `genero` enum('F','M','O') NOT NULL,
 `idade` int(11) NOT NULL,
 `cidadeobito` varchar(75) NOT NULL,
 `cidaderesidencia` varchar(75) NOT NULL,
 `fatorderisco` tinyint(1) NOT NULL,
 `nomedoenca` varchar(250) DEFAULT NULL,
 `hospital` varchar(100) NOT NULL,
 `link1` varchar(200) DEFAULT NULL,
 `link2` varchar(200) DEFAULT NULL,
 `avatar` varchar(200) DEFAULT NULL,
 `dataobito` date NOT NULL,
 `datapub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin