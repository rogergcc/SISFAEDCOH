
CREATE DATABASE IF NOT EXISTS BD_Faedcoh;
USE `BD_Faedcoh`;


CREATE TABLE IF NOT EXISTS `usuario` (
  `codusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `clave` varchar(6) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codusuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `usuario` (`codusuario`, `nombre`, `apellidos`, `email`, `clave`, `estado`) VALUES
(1, 'kevin', 'cutipa', 'kevin@hotmail.com', '123', 'activo'),
(2, 'omar', 'cueva', 'omar@hotmail.com', '123', 'activo');



CREATE TABLE IF NOT EXISTS `profesor` (
  `codigoprofesor` int(11) NOT NULL AUTO_INCREMENT,
  `nombreprofesor` varchar(50) DEFAULT NULL,  
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codigoprofesor`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `profesor` (`codigoprofesor`, `nombreprofesor`, `estado`) VALUES
(100, 'Omar Cueva', 'activo'),
(101, 'Yolanda Terrones', 'activo');


	
CREATE TABLE IF NOT EXISTS `curso` (
  `codigocurso` int(11) NOT NULL AUTO_INCREMENT,
  `codigoprofesor` int(11) DEFAULT NULL,
  `nombrecurso` varchar(50) DEFAULT NULL,  
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codigocurso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `curso` (`codigocurso`, `codigoprofesor`, `nombrecurso`, `estado`) VALUES
(100, 100, 'matematica', 'activo'),
(101, 101, 'comunicaciones', 'activo');



CREATE TABLE IF NOT EXISTS `audiovisual` (
  `codigoaudiovisual` int(11) NOT NULL AUTO_INCREMENT,
  `codigocurso` int(11) DEFAULT NULL,
  `codigoprofesor` int(11) DEFAULT NULL,
  `equipoproduccion` varchar(100) DEFAULT NULL,
  `produccion` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `fechaproduccion` date DEFAULT '0000-00-00',
  `sinopsis` varchar(300) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codigoaudiovisual`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

INSERT INTO `audiovisual` (`codigoaudiovisual`, `codigocurso`, `codigoprofesor`, `equipoproduccion`, 
								`produccion`, `genero`,`fechaproduccion`,`sinopsis`,`video`,`estado`) VALUES
(1000, 101, 101, 'Jose Apaza, Maria Gonzales, Emilia Quintana', 'fotografia y video', 'reportaje','2018/11/10','Video de reportaje','video01.mp4','activo'),
(1001, 100, 102, 'Jose Apaza, Maria Gonzales, Emilia Quintana', 'fotografia y video', 'reportaje','2018/11/10','Video de reportaje','video01.mp4','activo');



					
CREATE TABLE IF NOT EXISTS `guiaremision` (
  `codigoguiaremision` int(11) NOT NULL AUTO_INCREMENT,
  `fechatraslado` date DEFAULT '0000-00-00',
  `puntopartida` varchar(50) DEFAULT NULL,  
  `puntollegada` varchar(50) DEFAULT NULL,
  `motivotraslado` varchar(50) DEFAULT NULL,
  `nombreaccesorio` varchar(50) DEFAULT NULL,
  `responsabletraslado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigoguiaremision`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `guiaremision` (`codigoguiaremision`, `fechatraslado`, `puntopartida`, `puntollegada`, `motivotraslado`, `nombreaccesorio`, `responsabletraslado`) VALUES
(100, '2018/11/10', 'Capanique upt', 'Rectorado upt', 'Exposicion', '1 laptop lenovo codigo 112211', 'Psic Fernando Heredia'),
(101, '2018/11/10', 'Capanique upt', 'Rectorado upt', 'Exposicion', '1 pc lenovo codigo 112211', 'Psic Fernando Heredia');


															
															
CREATE TABLE IF NOT EXISTS `salatecnologica` (
  `codigosalatecnologica` int(11) NOT NULL AUTO_INCREMENT,
  `nombresalatecnologica` varchar(50) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,  
  PRIMARY KEY (`codigosalatecnologica`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `salatecnologica` (`codigosalatecnologica`, `nombresalatecnologica`, `lugar`) VALUES
(100, 'microensenanza', 'A-304'),
(101, 'audiovisuales', 'A-305'),
(102, 'sala de computo', 'A-306');
																														
																	
CREATE TABLE IF NOT EXISTS `bandeja` (
  `codigobandeja` int(11) NOT NULL AUTO_INCREMENT,
  `codigosalatecnologica` int(11) DEFAULT NULL,
  `nombrebandeja` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,  
  PRIMARY KEY (`codigobandeja`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `bandeja` (`codigobandeja`, `codigosalatecnologica`, `nombrebandeja`, `ubicacion`) VALUES
(100, 100, 'bandeja roja de microensenanza', 'al fondo de la sala'),
(101, 100, 'bandeja de madera de microensenanza', 'cerca a la puerta'),
(102, 101, 'bandeja celeste de audiovisuales', 'cerca a la puerta'),
(103, 101, 'bandeja azul de audiovisuales', 'cerca a la puerta');

																																	
																	
CREATE TABLE IF NOT EXISTS `accesorio` (
  `codigoaccesorio` int(11) NOT NULL AUTO_INCREMENT,
  `codigobandeja` int(11) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `denominacion` varchar(50) DEFAULT NULL,  
  `marca` varchar(50) DEFAULT NULL,  
  `modelo` varchar(50) DEFAULT NULL,  
  `serie` varchar(50) DEFAULT NULL,    
  `observacion` varchar(200) DEFAULT NULL,  
  `estado` varchar(50) DEFAULT NULL,  
  PRIMARY KEY (`codigoaccesorio`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `accesorio` (`codigoaccesorio`, `codigobandeja`, `codigo`, `denominacion`, `marca`, `modelo`, `serie`, `observacion`, `estado`) VALUES
(100, 100, '0011', 'camara filmadora de la bandeja roja','sony','c12','serie 1','camara nueva sony','activo'),
(101, 100, '0012', 'Lampara de la bandeja roja','Sony','ab2','serie 2','con problemas técnicos','activo'),
(102, 101, '0012', 'laptop de la bandeja de madera','Sony','ab2','serie 2','con problemas técnicos','activo'),
(103, 102, '0012', 'cpu de la bandeja celeste','Sony','ab2','serie 2','con problemas técnicos','activo');

																

																								