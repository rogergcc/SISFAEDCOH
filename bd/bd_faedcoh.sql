
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
(101, 'Yolanda Terrones', 'activo'),
(102, 'Fernando Heredia', 'activo');


	
CREATE TABLE IF NOT EXISTS `curso` (
  `codigocurso` int(11) NOT NULL AUTO_INCREMENT,
  `codigoprofesor` int(11) DEFAULT NULL,
  `nombrecurso` varchar(50) DEFAULT NULL,  
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codigocurso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `curso` (`codigocurso`, `codigoprofesor`, `nombrecurso`, `estado`) VALUES
(100, 100, 'Comunicaciones', 'activo'),
(101, 101, 'Educacion Inicial', 'activo'),
(102, 102, 'Epistemologia', 'activo');



CREATE TABLE IF NOT EXISTS `audiovisual` (
  `codigoaudiovisual` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(100) DEFAULT NULL,
  `profesor` varchar(100) DEFAULT NULL,
  `equipoproduccion` varchar(100) DEFAULT NULL,
  `produccion` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `fechaproduccion` date DEFAULT '0000-00-00',
  `sinopsis` varchar(300) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codigoaudiovisual`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

INSERT INTO `audiovisual` (`codigoaudiovisual`, `curso`, `profesor`, `equipoproduccion`, 
								`produccion`, `genero`,`fechaproduccion`,`sinopsis`,`video`,`estado`) VALUES
(1000, 'Educacion Inicial', 'Prof. Terrones', 'Apaza, Gonzales', 'Video Educativo', 'Educacion','2018/11/10','Video de educacion','El_mismo_lugar_la_merka.mp4','activo'),
(1001, 'Audivusiales 1', 'Prof Cueva', 'Carpio, Jimenes', 'fotografia y video', 'reportaje','2018/11/10','Video de reportaje','Otra _Solucion _la_merka.mp4','activo');



					
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
(101, 'Set de Television', 'A-305'),
(102, 'sala de computo Comunicaciones', 'A-306');
																														
																	
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
(102, 101, 'Armario 6 puertas', 'cerca a la puerta'),
(103, 101, 'Armario ventanas de vidrio', 'cerca a la puerta');

																																	
																	
CREATE TABLE IF NOT EXISTS `accesorio` (
  `codigoaccesorio` int(11) NOT NULL AUTO_INCREMENT,
  `codigobandeja` int(11) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `denominacion` varchar(50) DEFAULT NULL,  
  `marca` varchar(50) DEFAULT NULL,  
  `modelo` varchar(50) DEFAULT NULL,  
  `serie` varchar(50) DEFAULT NULL,    
  `observacion` varchar(200) DEFAULT NULL, 
  `imagen` varchar(100) DEFAULT NULL,  
  `estado` varchar(50) DEFAULT NULL,  
  PRIMARY KEY (`codigoaccesorio`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `accesorio` (`codigoaccesorio`, `codigobandeja`, `codigo`, `denominacion`, `marca`, `modelo`, `serie`, `observacion`, `imagen`, `estado`) VALUES
(11, 102, '33511.01.015993', 'Estante Metalico de angulo ranurado c/06 niveles y c/03 cuerpos','-','-','2.42X0.30X3.05 M','-','estante.jpg','activo'),
(12, 102, '33311.06.026628', '02 Microfono Pechero Inalambrico','SONY','od.UWP-C1','102777','-','micro.jpg','activo'),
(13, 103, '33961.07.045876', '02 Microfono Pechero Inalambrico','SONY','URX-P230','103192','-','micro.jpg','activo'),
(14, 103, '33691.07.026650', '02 Microfono Pechero Inalambrico','Sennheisgr','ew-112pG2','325587','-','micro.jpg','activo'),
(15, 103, '33691.07.045878', 'Microfono','SHURE','PG58','0.17X0.06 M','-','micro.jpg','activo'),
(16, 103, '33691.07.045879', 'Microfono','KEYOR','UDM-858','0.17X0.06 M','-','barra06.jpg','activo'),
(17, 103, '33691.07.045877', 'Microfono','SENNHEISGR','-','152346','-','barra07.jpg','activo'),
(18, 103, '33311.06.026578', 'Camara de video Sony DSR-PD170 Divicam compact Camcorder 3CCD lente Carl Zeiss','SONY','DSR-PD170','115446','-','barra08.jpg','activo'),
(19, 103, '33691.07.038784', 'Camara SONY','SONY','HVR-HD1N','410237','-','barra09.jpg','activo'),
(20, 103, '33691.07.060633', 'Camara Digital','CANON','E0S7D','1.42053E+11','-','barra10.jpg','activo'),
(21, 103, '33311.06.026579', 'Camara Digital Video HD Recorder','SONY','HVR-HD1000N','415860','-','barra11.jpg','activo'),
(22, 103, '33611.01.032627', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah034321','-','barra12.jpg','activo'),
(23, 103, '33611.01.032630', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah024588','-','barra13.jpg','activo'),
(24, 103, '33611.01.032625', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah034322','-','barra14.jpg','activo'),
(25, 103, '33611.01.032628', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah034208','-','barra15.jpg','activo'),
(26, 103, '33611.01.032631', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah034874','-','barra16.jpg','activo'),
(27, 103, '33611.01.032634', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah034067','-','barra17.jpg','activo'),
(28, 103, '33611.01.032633', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah034068','-','barra18.jpg','activo'),
(29, 103, '33611.01.032632', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah024591','-','barra19.jpg','activo'),
(30, 103, '33611.01.032626', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah034326','-','barra20.jpg','activo'),
(31, 103, '33611.01.032635', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah024590','-','barra21.jpg','activo'),
(32, 103, '33611.01.032624', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah024589','-','barra22.jpg','activo'),
(33, 103, '33611.01.032629', 'Tableta Grafica Digital Marca: Wacom Intuos Comic Pend & Touch','WACON','CTH-240','5gah024647','-','barra23.jpg','activo'),

(34, 103, '33311.01.012926', 'Proyector Multimedia Panasonic Mod.PT-LB8OU/XGA ampliable hasta UXGA/3200','PANASONIC','PT-LV80U','SD8430119','-','barra24.jpg','activo'),
(35, 103, '33311.04.012922', 'Switcher de 04 Canales Marca:Edirol MOD.V-4','EDIROL','V-4','21bx24839','-','barra25.jpg','activo'),
(36, 103, '33311.03.009613', 'Camara Fotografica Digital','PANASONIC','DMC-FZ30','0.14X0.14X0.10 M','-','barra26.jpg','activo'),

(37, 103, '33511.01.020459', 'Silla de estructura metalica tapizada en tela','-','-','0.60X0.44X0.81 M','-','barra27.jpg','activo'),
(38, 103, '33511.01.023104', 'Modulo para computadora en melamine con ruedas','-','-','1.00X0.55X0.80 M','-','barra28.jpg','activo'),
(39, 103, '33311.06.016819', 'PC incluye techado HP y mouse HP','HP','COMPAQ DC 7800P','mxj83001w5','-','barra29.jpg','activo'),
(40, 103, '33311.06.015928', 'Monitor LCD 17 pulgadas','HP','L1706','cnn7241dsp','-','barra30.jpg','activo'),
(41, 103, '33691.08.032649', 'Monitor para montar en camara marca marshall, camara top monitor','MARSHAL','Marshall Electronics M-C','383006154244','-','barra31.jpg','activo'),

(42, 103, '33691.07.060635', 'Camara digital','CANON','EOSREBEL T3','-','-','barra32.jpg','activo'),
(43, 103, '33511.01.020276', 'Silla de estrura metalica tapizado en tela','-','-','0.60X0.44X0.81 M','-','barra33.jpg','activo'),
(44, 103, '33511.01.015992', 'Modulo para computadora en melamine con ruedas','-','-','1.00X0.55X0.80 M','-','barra34.jpg','activo'),
(45, 103, '33691.07.038783', 'Pedestal para microfono','HERCULES','-','0.60X0.60X1.10 M','-','barra35.jpg','activo'),
(46, 103, '33611.01.032648', 'LAPTOP','HP','3165MGW','PD93165NG','-','barra36.jpg','activo'),
(47, 103, '33691.08.032642', 'CAMARA DE VIDEO, SONY PXW-X70 profesional XDCAM Compact CamcorderSensor','-','PXW-X70','1209432','-','barra37.jpg','activo');












																								