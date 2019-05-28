<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2019-05-01 01:39:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:39:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:39:07 --> Total execution time: 1.5253
DEBUG - 2019-05-01 01:39:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:39:08 --> Total execution time: 0.3414
DEBUG - 2019-05-01 01:39:11 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:39:11 --> Total execution time: 0.2463
DEBUG - 2019-05-01 01:39:11 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:39:11 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:39:11 --> Total execution time: 0.3241
DEBUG - 2019-05-01 01:39:11 --> Total execution time: 0.5332
DEBUG - 2019-05-01 01:39:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:39:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:39:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 01:39:19 --> Query error: Table 'bd_intec.catalogoestatuspaquetes' doesn't exist - Invalid query: SELECT `paquete_envio`.*, `Descripcion_lab`, `DescripcionEstatusPaquete`, `paquete_envio`.`IdEstatusPaquete`, (SELECT COUNT(IdEquipo) FROM equipo_orden WHERE IdPaqueteEnvio =paquete_envio.IdPaqueteEnvio)as TotalEquiposPaquete
FROM `paquete_envio`
JOIN `laboratorio` ON `paquete_envio`.`IdLaboratorio` = `laboratorio`.`IdLaboratorio`
JOIN `catalogoestatuspaquetes` ON `paquete_envio`.`IdEstatusPaquete` = `catalogoestatuspaquetes`.`IdEstatusPaquete`
WHERE `IdOrden` = '3'
DEBUG - 2019-05-01 01:39:27 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:39:28 --> Total execution time: 0.5826
DEBUG - 2019-05-01 01:40:39 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:40:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:40:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 01:40:39 --> Query error: Table 'bd_intec.catalogoestatuspaquetes' doesn't exist - Invalid query: SELECT `paquete_envio`.*, `Descripcion_lab`, `DescripcionEstatusPaquete`, `paquete_envio`.`IdEstatusPaquete`, (SELECT COUNT(IdEquipo) FROM equipo_orden WHERE IdPaqueteEnvio =paquete_envio.IdPaqueteEnvio)as TotalEquiposPaquete
FROM `paquete_envio`
JOIN `laboratorio` ON `paquete_envio`.`IdLaboratorio` = `laboratorio`.`IdLaboratorio`
JOIN `catalogoestatuspaquetes` ON `paquete_envio`.`IdEstatusPaquete` = `catalogoestatuspaquetes`.`IdEstatusPaquete`
WHERE `IdOrden` = '2'
DEBUG - 2019-05-01 01:42:59 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:00 --> Total execution time: 0.3956
DEBUG - 2019-05-01 01:43:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:01 --> Total execution time: 0.3765
DEBUG - 2019-05-01 01:43:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:04 --> Total execution time: 0.2699
DEBUG - 2019-05-01 01:43:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:05 --> Total execution time: 0.2632
DEBUG - 2019-05-01 01:43:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:08 --> Total execution time: 0.3124
DEBUG - 2019-05-01 01:43:15 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:16 --> Total execution time: 0.3133
DEBUG - 2019-05-01 01:43:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:17 --> Total execution time: 0.3197
DEBUG - 2019-05-01 01:43:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:23 --> Total execution time: 0.3376
DEBUG - 2019-05-01 01:43:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:24 --> Total execution time: 0.3234
DEBUG - 2019-05-01 01:43:24 --> Total execution time: 0.5204
DEBUG - 2019-05-01 01:43:27 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:27 --> Total execution time: 0.2926
DEBUG - 2019-05-01 01:43:27 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:27 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:28 --> Total execution time: 0.3238
DEBUG - 2019-05-01 01:43:28 --> Total execution time: 0.5575
DEBUG - 2019-05-01 01:43:28 --> Total execution time: 0.7604
DEBUG - 2019-05-01 01:43:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:30 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 01:43:30 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 01:43:31 --> Total execution time: 1.4589
DEBUG - 2019-05-01 01:43:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:49 --> Total execution time: 0.2993
DEBUG - 2019-05-01 01:43:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:50 --> Total execution time: 0.3813
DEBUG - 2019-05-01 01:43:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:53 --> Total execution time: 0.2960
DEBUG - 2019-05-01 01:43:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:43:54 --> Total execution time: 0.3920
DEBUG - 2019-05-01 01:43:54 --> Total execution time: 0.6020
DEBUG - 2019-05-01 01:44:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:44:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:44:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 01:44:12 --> Query error: Unknown column 'IdOrden' in 'field list' - Invalid query: INSERT INTO `paquete_envio` (`IdOrden`, `Descripcion`, `IdLaboratorio`, `IdEstatusPaquete`) VALUES ('4', NULL, '2', 1)
DEBUG - 2019-05-01 01:44:12 --> DB Transaction Failure
DEBUG - 2019-05-01 01:44:39 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:44:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:44:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:44:39 --> Total execution time: 0.3211
DEBUG - 2019-05-01 01:44:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:44:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:44:40 --> Total execution time: 0.3108
DEBUG - 2019-05-01 01:44:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:44:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:44:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:44:43 --> Total execution time: 0.2564
DEBUG - 2019-05-01 01:44:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:44:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:44:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:44:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:44:43 --> Total execution time: 0.3898
DEBUG - 2019-05-01 01:44:43 --> Total execution time: 0.5915
DEBUG - 2019-05-01 01:44:47 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:44:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:44:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 01:44:48 --> Query error: Unknown column 'IdOrden' in 'field list' - Invalid query: INSERT INTO `paquete_envio` (`IdOrden`, `Descripcion`, `IdLaboratorio`, `IdEstatusPaquete`) VALUES ('4', NULL, '2', 1)
DEBUG - 2019-05-01 01:44:48 --> DB Transaction Failure
DEBUG - 2019-05-01 01:49:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:49:24 --> Total execution time: 0.3378
DEBUG - 2019-05-01 01:49:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:49:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:49:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:49:25 --> Total execution time: 0.2996
DEBUG - 2019-05-01 01:51:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:51:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:51:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:51:00 --> Total execution time: 0.5375
DEBUG - 2019-05-01 01:51:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:51:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:51:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:51:05 --> Total execution time: 0.2751
DEBUG - 2019-05-01 01:51:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:51:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:51:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:51:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:51:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:51:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:51:05 --> Total execution time: 0.3449
DEBUG - 2019-05-01 01:51:06 --> Total execution time: 0.5636
DEBUG - 2019-05-01 01:51:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:51:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:51:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 01:51:25 --> Total execution time: 0.5873
DEBUG - 2019-05-01 01:54:44 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 01:54:44 --> Query error: Table 'bd_intec.catalogoestatuspaquetes' doesn't exist - Invalid query: SELECT `paquete_envio`.*, `Descripcion_lab`, `DescripcionEstatusPaquete`, `paquete_envio`.`IdEstatusPaquete`, (SELECT COUNT(IdEquipo) FROM equipo_orden WHERE IdPaqueteEnvio =paquete_envio.IdPaqueteEnvio)as TotalEquiposPaquete
FROM `paquete_envio`
JOIN `laboratorio` ON `paquete_envio`.`IdLaboratorio` = `laboratorio`.`IdLaboratorio`
JOIN `catalogoestatuspaquetes` ON `paquete_envio`.`IdEstatusPaquete` = `catalogoestatuspaquetes`.`IdEstatusPaquete`
WHERE `IdOrden` = '4'
DEBUG - 2019-05-01 01:54:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 01:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 01:54:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 01:54:48 --> Query error: Table 'bd_intec.catalogoestatuspaquetes' doesn't exist - Invalid query: SELECT `paquete_envio`.*, `Descripcion_lab`, `DescripcionEstatusPaquete`, `paquete_envio`.`IdEstatusPaquete`, (SELECT COUNT(IdEquipo) FROM equipo_orden WHERE IdPaqueteEnvio =paquete_envio.IdPaqueteEnvio)as TotalEquiposPaquete
FROM `paquete_envio`
JOIN `laboratorio` ON `paquete_envio`.`IdLaboratorio` = `laboratorio`.`IdLaboratorio`
JOIN `catalogoestatuspaquetes` ON `paquete_envio`.`IdEstatusPaquete` = `catalogoestatuspaquetes`.`IdEstatusPaquete`
WHERE `IdOrden` = '4'
DEBUG - 2019-05-01 02:55:14 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:14 --> Total execution time: 0.1448
DEBUG - 2019-05-01 02:55:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 02:55:18 --> Severity: Notice --> Undefined property: stdClass::$IdUsuario C:\xampp\htdocs\SC_INTEC\application\controllers\Login_Controller.php 75
ERROR - 2019-05-01 02:55:18 --> Severity: Notice --> Undefined property: stdClass::$NombreUsuario C:\xampp\htdocs\SC_INTEC\application\controllers\Login_Controller.php 76
ERROR - 2019-05-01 02:55:18 --> Severity: Notice --> Undefined property: stdClass::$ApellidosUsuario C:\xampp\htdocs\SC_INTEC\application\controllers\Login_Controller.php 76
DEBUG - 2019-05-01 02:55:18 --> Total execution time: 0.2166
DEBUG - 2019-05-01 02:55:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:21 --> Total execution time: 0.3020
DEBUG - 2019-05-01 02:55:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:22 --> Total execution time: 0.4484
DEBUG - 2019-05-01 02:55:27 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:28 --> Total execution time: 0.3519
DEBUG - 2019-05-01 02:55:29 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:29 --> Total execution time: 0.5080
DEBUG - 2019-05-01 02:55:32 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:32 --> Total execution time: 0.2733
DEBUG - 2019-05-01 02:55:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:49 --> Total execution time: 0.2944
DEBUG - 2019-05-01 02:55:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:50 --> Total execution time: 0.2866
DEBUG - 2019-05-01 02:55:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:54 --> Total execution time: 0.2845
DEBUG - 2019-05-01 02:55:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:55:55 --> Total execution time: 0.3005
DEBUG - 2019-05-01 02:55:56 --> Total execution time: 0.4600
DEBUG - 2019-05-01 02:55:59 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:55:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:55:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:00 --> Total execution time: 0.2930
DEBUG - 2019-05-01 02:56:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:00 --> Total execution time: 0.3164
DEBUG - 2019-05-01 02:56:00 --> Total execution time: 0.5711
DEBUG - 2019-05-01 02:56:00 --> Total execution time: 0.8172
DEBUG - 2019-05-01 02:56:02 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:03 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 02:56:03 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 02:56:03 --> Total execution time: 0.8979
DEBUG - 2019-05-01 02:56:14 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:14 --> Total execution time: 0.2903
DEBUG - 2019-05-01 02:56:15 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:15 --> Total execution time: 0.3035
DEBUG - 2019-05-01 02:56:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 02:56:18 --> Query error: Unknown column 'IdOrden' in 'where clause' - Invalid query: SELECT `paquete_envio`.*, `Descripcion_lab`, `DescripcionEstatusPaquete`, `paquete_envio`.`IdEstatusPaquete`, (SELECT COUNT(IdEquipo) FROM equipo_orden WHERE IdPaqueteEnvio =paquete_envio.IdPaqueteEnvio)as TotalEquiposPaquete
FROM `paquete_envio`
JOIN `laboratorio` ON `paquete_envio`.`IdLaboratorio` = `laboratorio`.`IdLaboratorio`
JOIN `catalogoestatuspaquetes` ON `paquete_envio`.`IdEstatusPaquete` = `catalogoestatuspaquetes`.`IdEstatusPaquete`
WHERE `IdOrden` = '1'
DEBUG - 2019-05-01 02:56:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:20 --> Total execution time: 0.2465
DEBUG - 2019-05-01 02:56:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:56:20 --> Total execution time: 0.3399
DEBUG - 2019-05-01 02:56:20 --> Total execution time: 0.5563
DEBUG - 2019-05-01 02:56:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:56:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:56:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 02:56:34 --> Query error: Unknown column 'IdOrden' in 'field list' - Invalid query: INSERT INTO `paquete_envio` (`IdOrden`, `Descripcion`, `IdLaboratorio`, `IdEstatusPaquete`) VALUES ('1', NULL, '2', 1)
DEBUG - 2019-05-01 02:56:34 --> DB Transaction Failure
DEBUG - 2019-05-01 02:58:51 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:58:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:58:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 02:58:52 --> Query error: Unknown column 'IdOrden' in 'field list' - Invalid query: INSERT INTO `paquete_envio` (`IdOrden`, `Descripcion`, `IdLaboratorio`, `IdEstatusPaquete`) VALUES ('1', NULL, '2', 1)
DEBUG - 2019-05-01 02:58:52 --> DB Transaction Failure
DEBUG - 2019-05-01 02:58:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:58:54 --> Total execution time: 0.2781
DEBUG - 2019-05-01 02:58:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:58:55 --> Total execution time: 0.3364
DEBUG - 2019-05-01 02:58:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:58:57 --> Total execution time: 0.2594
DEBUG - 2019-05-01 02:58:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:58:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:58:58 --> Total execution time: 0.3309
DEBUG - 2019-05-01 02:58:58 --> Total execution time: 0.5387
DEBUG - 2019-05-01 02:59:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:59:00 --> Total execution time: 0.2663
DEBUG - 2019-05-01 02:59:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:59:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 02:59:00 --> Total execution time: 0.3615
DEBUG - 2019-05-01 02:59:01 --> Total execution time: 0.5719
DEBUG - 2019-05-01 02:59:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 02:59:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 02:59:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 02:59:05 --> Query error: Unknown column 'IdOrden' in 'field list' - Invalid query: INSERT INTO `paquete_envio` (`IdOrden`, `Descripcion`, `IdLaboratorio`, `IdEstatusPaquete`) VALUES ('1', NULL, '2', 1)
DEBUG - 2019-05-01 02:59:05 --> DB Transaction Failure
DEBUG - 2019-05-01 03:02:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:02:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:02:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:02:55 --> Total execution time: 0.3252
DEBUG - 2019-05-01 03:02:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:02:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:02:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:02:56 --> Total execution time: 0.3211
DEBUG - 2019-05-01 03:04:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:18 --> Total execution time: 0.3056
DEBUG - 2019-05-01 03:04:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:19 --> Total execution time: 0.3815
DEBUG - 2019-05-01 03:04:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:21 --> Total execution time: 0.2654
DEBUG - 2019-05-01 03:04:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:36 --> Total execution time: 0.3021
DEBUG - 2019-05-01 03:04:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:42 --> Total execution time: 0.3032
DEBUG - 2019-05-01 03:04:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:43 --> Total execution time: 0.2993
DEBUG - 2019-05-01 03:04:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:49 --> Total execution time: 0.3166
DEBUG - 2019-05-01 03:04:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:49 --> Total execution time: 0.2752
DEBUG - 2019-05-01 03:04:52 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:52 --> Total execution time: 0.2956
DEBUG - 2019-05-01 03:04:52 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:52 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:52 --> Total execution time: 0.2753
DEBUG - 2019-05-01 03:04:53 --> Total execution time: 0.4894
DEBUG - 2019-05-01 03:04:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:04:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:04:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:04:57 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 03:04:57 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 03:04:57 --> Total execution time: 0.8489
DEBUG - 2019-05-01 03:05:04 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:04 --> Total execution time: 0.3846
DEBUG - 2019-05-01 03:05:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:05 --> Total execution time: 0.3650
DEBUG - 2019-05-01 03:05:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:07 --> Total execution time: 0.2487
DEBUG - 2019-05-01 03:05:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:08 --> Total execution time: 0.3307
DEBUG - 2019-05-01 03:05:08 --> Total execution time: 0.5354
DEBUG - 2019-05-01 03:05:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:21 --> Total execution time: 0.2719
DEBUG - 2019-05-01 03:05:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:22 --> Total execution time: 0.3326
DEBUG - 2019-05-01 03:05:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:24 --> Total execution time: 0.2695
DEBUG - 2019-05-01 03:05:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:25 --> Total execution time: 0.3983
DEBUG - 2019-05-01 03:05:25 --> Total execution time: 0.6265
DEBUG - 2019-05-01 03:05:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:34 --> Total execution time: 0.2817
DEBUG - 2019-05-01 03:05:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:34 --> Total execution time: 0.3344
DEBUG - 2019-05-01 03:05:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:05:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:05:43 --> Total execution time: 0.1130
DEBUG - 2019-05-01 03:08:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:08:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:08:18 --> Total execution time: 0.3986
DEBUG - 2019-05-01 03:08:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:08:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:08:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:08:19 --> Total execution time: 0.3690
DEBUG - 2019-05-01 03:08:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:08:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:08:23 --> Total execution time: 0.2867
DEBUG - 2019-05-01 03:08:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:08:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:08:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:08:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:08:23 --> Total execution time: 0.3692
DEBUG - 2019-05-01 03:08:24 --> Total execution time: 0.5903
DEBUG - 2019-05-01 03:08:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:08:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:08:28 --> Total execution time: 0.1076
DEBUG - 2019-05-01 03:09:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:09:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:09:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:09:23 --> Total execution time: 0.4330
DEBUG - 2019-05-01 03:09:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:09:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:09:24 --> Total execution time: 0.4091
DEBUG - 2019-05-01 03:09:29 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:09:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:09:29 --> Total execution time: 0.1150
DEBUG - 2019-05-01 03:10:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:10:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:10:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:10:05 --> Total execution time: 0.5852
DEBUG - 2019-05-01 03:13:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:13:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:13:55 --> Total execution time: 0.1459
DEBUG - 2019-05-01 03:14:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:14:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:14:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:14:00 --> Total execution time: 0.3047
DEBUG - 2019-05-01 03:14:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:14:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:14:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:14:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:14:01 --> Total execution time: 0.5566
DEBUG - 2019-05-01 03:14:01 --> Total execution time: 0.8134
DEBUG - 2019-05-01 03:14:31 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:14:31 --> Total execution time: 0.2856
DEBUG - 2019-05-01 03:14:31 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:14:31 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:14:31 --> Total execution time: 0.5760
DEBUG - 2019-05-01 03:14:32 --> Total execution time: 0.8504
DEBUG - 2019-05-01 03:46:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:46:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:46:03 --> Total execution time: 0.2868
DEBUG - 2019-05-01 03:46:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:46:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:46:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:46:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:46:04 --> Total execution time: 0.3473
DEBUG - 2019-05-01 03:46:04 --> Total execution time: 0.5676
DEBUG - 2019-05-01 03:46:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:46:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:46:06 --> Total execution time: 0.6462
DEBUG - 2019-05-01 03:46:51 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:46:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:46:51 --> Total execution time: 0.1157
DEBUG - 2019-05-01 03:50:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:50:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:50:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:50:40 --> Total execution time: 0.3968
DEBUG - 2019-05-01 03:50:41 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:50:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:50:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:50:42 --> Total execution time: 0.4790
DEBUG - 2019-05-01 03:50:46 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:50:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:50:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:50:46 --> Total execution time: 0.1177
DEBUG - 2019-05-01 03:54:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:54:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:54:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:54:12 --> Total execution time: 0.3406
DEBUG - 2019-05-01 03:54:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:54:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:54:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:54:13 --> Total execution time: 0.3806
DEBUG - 2019-05-01 03:54:16 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:54:16 --> Total execution time: 0.0942
DEBUG - 2019-05-01 03:55:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:55:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:55:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:55:22 --> Total execution time: 0.3826
DEBUG - 2019-05-01 03:55:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:55:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:55:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:55:23 --> Total execution time: 0.3810
DEBUG - 2019-05-01 03:55:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:55:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:55:25 --> Total execution time: 0.1571
DEBUG - 2019-05-01 03:59:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:59:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:59:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:59:23 --> Total execution time: 0.4458
DEBUG - 2019-05-01 03:59:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:59:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:59:23 --> Total execution time: 0.4274
DEBUG - 2019-05-01 03:59:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 03:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 03:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 03:59:28 --> Total execution time: 0.0954
DEBUG - 2019-05-01 04:01:01 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:01:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:01:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:01:01 --> Total execution time: 0.3637
DEBUG - 2019-05-01 04:01:02 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:01:02 --> Total execution time: 0.3905
DEBUG - 2019-05-01 04:01:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:01:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:01:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:01:06 --> Total execution time: 0.1002
DEBUG - 2019-05-01 04:24:11 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:24:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:24:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:24:11 --> Total execution time: 0.1484
DEBUG - 2019-05-01 04:24:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:24:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:24:13 --> Total execution time: 0.1341
DEBUG - 2019-05-01 04:24:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:24:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:24:28 --> Total execution time: 0.1041
DEBUG - 2019-05-01 04:25:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:12 --> Total execution time: 0.0942
DEBUG - 2019-05-01 04:25:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:24 --> Total execution time: 0.3014
DEBUG - 2019-05-01 04:25:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:25 --> Total execution time: 0.3117
DEBUG - 2019-05-01 04:25:31 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:32 --> Total execution time: 0.2846
DEBUG - 2019-05-01 04:25:32 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:32 --> Total execution time: 0.3261
DEBUG - 2019-05-01 04:25:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:35 --> Total execution time: 0.2602
DEBUG - 2019-05-01 04:25:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:36 --> Total execution time: 0.4446
DEBUG - 2019-05-01 04:25:51 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:51 --> Total execution time: 0.2750
DEBUG - 2019-05-01 04:25:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:25:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:25:55 --> Total execution time: 0.3252
DEBUG - 2019-05-01 04:26:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:26:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:26:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:26:19 --> Total execution time: 0.2760
DEBUG - 2019-05-01 04:26:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:26:23 --> Total execution time: 0.3166
DEBUG - 2019-05-01 04:26:29 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:26:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:26:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:26:29 --> Total execution time: 0.2768
DEBUG - 2019-05-01 04:27:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:26 --> Total execution time: 0.2670
DEBUG - 2019-05-01 04:27:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:29 --> Total execution time: 0.2977
DEBUG - 2019-05-01 04:27:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:33 --> Total execution time: 0.2787
DEBUG - 2019-05-01 04:27:39 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:40 --> Total execution time: 0.2918
DEBUG - 2019-05-01 04:27:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:41 --> Total execution time: 0.2879
DEBUG - 2019-05-01 04:27:51 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:52 --> Total execution time: 0.2776
DEBUG - 2019-05-01 04:27:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:53 --> Total execution time: 0.2745
DEBUG - 2019-05-01 04:27:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:56 --> Total execution time: 0.2697
DEBUG - 2019-05-01 04:27:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:56 --> Total execution time: 0.2805
DEBUG - 2019-05-01 04:27:56 --> Total execution time: 0.4780
DEBUG - 2019-05-01 04:27:57 --> Total execution time: 0.7677
DEBUG - 2019-05-01 04:27:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:27:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:27:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:27:58 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 04:27:58 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 04:27:58 --> Total execution time: 0.8800
DEBUG - 2019-05-01 04:28:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:28:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:28:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:28:07 --> Total execution time: 0.3020
DEBUG - 2019-05-01 04:28:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:28:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:28:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:28:08 --> Total execution time: 0.4415
DEBUG - 2019-05-01 04:30:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:07 --> Total execution time: 0.2578
DEBUG - 2019-05-01 04:30:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:08 --> Total execution time: 0.3859
DEBUG - 2019-05-01 04:30:08 --> Total execution time: 0.5973
DEBUG - 2019-05-01 04:30:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:20 --> Total execution time: 0.2734
DEBUG - 2019-05-01 04:30:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:21 --> Total execution time: 0.3210
DEBUG - 2019-05-01 04:30:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:24 --> Total execution time: 0.2519
DEBUG - 2019-05-01 04:30:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:25 --> Total execution time: 0.3404
DEBUG - 2019-05-01 04:30:25 --> Total execution time: 0.5500
DEBUG - 2019-05-01 04:30:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:43 --> Total execution time: 0.2632
DEBUG - 2019-05-01 04:30:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:43 --> Total execution time: 0.3536
DEBUG - 2019-05-01 04:30:44 --> Total execution time: 0.5762
DEBUG - 2019-05-01 04:30:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:48 --> Total execution time: 0.2818
DEBUG - 2019-05-01 04:30:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:30:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:30:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:30:49 --> Total execution time: 0.3481
DEBUG - 2019-05-01 04:36:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:36:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:36:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:36:54 --> Total execution time: 0.2801
DEBUG - 2019-05-01 04:36:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:36:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:36:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:36:55 --> Total execution time: 0.3136
DEBUG - 2019-05-01 04:36:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:36:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:36:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:36:57 --> Total execution time: 0.3003
DEBUG - 2019-05-01 04:37:10 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:11 --> Total execution time: 0.3011
DEBUG - 2019-05-01 04:37:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:12 --> Total execution time: 0.2845
DEBUG - 2019-05-01 04:37:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:18 --> Total execution time: 0.2778
DEBUG - 2019-05-01 04:37:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:22 --> Total execution time: 0.3031
DEBUG - 2019-05-01 04:37:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:23 --> Total execution time: 0.3135
DEBUG - 2019-05-01 04:37:24 --> Total execution time: 0.4912
DEBUG - 2019-05-01 04:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:26 --> Total execution time: 0.3123
DEBUG - 2019-05-01 04:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:26 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:26 --> Total execution time: 0.3536
DEBUG - 2019-05-01 04:37:27 --> Total execution time: 0.8092
DEBUG - 2019-05-01 04:37:27 --> Total execution time: 1.1989
DEBUG - 2019-05-01 04:37:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:30 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 04:37:30 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 04:37:31 --> Total execution time: 0.8987
DEBUG - 2019-05-01 04:37:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:33 --> Total execution time: 0.3247
DEBUG - 2019-05-01 04:37:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:34 --> Total execution time: 0.3507
DEBUG - 2019-05-01 04:37:37 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:37 --> Total execution time: 0.3159
DEBUG - 2019-05-01 04:37:37 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:37 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:38 --> Total execution time: 0.3201
DEBUG - 2019-05-01 04:37:38 --> Total execution time: 0.5346
DEBUG - 2019-05-01 04:37:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:50 --> Total execution time: 0.2835
DEBUG - 2019-05-01 04:37:51 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:51 --> Total execution time: 0.3226
DEBUG - 2019-05-01 04:37:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:54 --> Total execution time: 0.2662
DEBUG - 2019-05-01 04:37:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:37:54 --> Total execution time: 0.3333
DEBUG - 2019-05-01 04:37:54 --> Total execution time: 0.5272
DEBUG - 2019-05-01 04:38:01 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:38:02 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:38:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:38:02 --> Total execution time: 0.2790
DEBUG - 2019-05-01 04:38:02 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:38:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:38:03 --> Total execution time: 0.3260
DEBUG - 2019-05-01 04:41:58 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:41:58 --> Total execution time: 0.3631
DEBUG - 2019-05-01 04:41:59 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:41:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:41:59 --> Total execution time: 0.4879
DEBUG - 2019-05-01 04:42:29 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:42:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:42:29 --> Total execution time: 0.5691
DEBUG - 2019-05-01 04:43:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:43:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:43:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:43:55 --> Total execution time: 0.3648
DEBUG - 2019-05-01 04:43:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:43:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:43:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:43:56 --> Total execution time: 0.5133
DEBUG - 2019-05-01 04:44:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:44:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:44:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:44:00 --> Total execution time: 0.1331
DEBUG - 2019-05-01 04:46:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:46:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:46:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:46:36 --> Total execution time: 0.3413
DEBUG - 2019-05-01 04:46:37 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:46:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:46:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:46:37 --> Total execution time: 0.4642
DEBUG - 2019-05-01 04:46:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 04:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 04:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 04:46:40 --> Total execution time: 0.1093
DEBUG - 2019-05-01 05:07:32 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:07:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:07:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:07:33 --> Total execution time: 0.3312
DEBUG - 2019-05-01 05:07:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:07:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:07:34 --> Total execution time: 0.3778
DEBUG - 2019-05-01 05:07:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:07:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-05-01 05:07:36 --> Severity: error --> Exception: syntax error, unexpected ':' C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 78
DEBUG - 2019-05-01 05:07:39 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:07:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-05-01 05:07:39 --> Severity: error --> Exception: syntax error, unexpected ':' C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 78
DEBUG - 2019-05-01 05:08:32 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:08:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:08:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:08:32 --> Total execution time: 0.3981
DEBUG - 2019-05-01 05:08:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:08:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:08:33 --> Total execution time: 0.4002
DEBUG - 2019-05-01 05:08:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:08:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-05-01 05:08:35 --> Severity: error --> Exception: syntax error, unexpected ':' C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 78
DEBUG - 2019-05-01 05:08:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:08:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2019-05-01 05:08:50 --> Severity: error --> Exception: syntax error, unexpected ':' C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 78
DEBUG - 2019-05-01 05:09:26 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:09:27 --> Total execution time: 0.4954
DEBUG - 2019-05-01 05:09:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:09:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:09:28 --> Total execution time: 0.3993
DEBUG - 2019-05-01 05:09:31 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:09:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:09:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:09:31 --> Total execution time: 0.1151
DEBUG - 2019-05-01 05:09:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:09:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:09:54 --> Total execution time: 0.2966
DEBUG - 2019-05-01 05:09:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:09:55 --> Total execution time: 0.4022
DEBUG - 2019-05-01 05:10:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:10:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:10:00 --> Total execution time: 0.1013
DEBUG - 2019-05-01 05:10:09 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:10:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:10:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:10:09 --> Severity: Notice --> Undefined variable: Fecha C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 94
ERROR - 2019-05-01 05:10:09 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:10:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = NULL, `IdEstatusPaquete` = NULL, `$Fecha` = NULL
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:12:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:12:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:12:08 --> Total execution time: 0.3888
DEBUG - 2019-05-01 05:12:09 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:12:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:12:09 --> Total execution time: 0.4783
DEBUG - 2019-05-01 05:12:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:12:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:12:13 --> Total execution time: 0.1427
DEBUG - 2019-05-01 05:12:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:12:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:12:23 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:12:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = '1', `IdEstatusPaquete` = '1', `FechaEnv` = '2019-01-01'
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:13:10 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:13:11 --> Total execution time: 0.3382
DEBUG - 2019-05-01 05:13:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:13:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:13:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:13:12 --> Total execution time: 0.4290
DEBUG - 2019-05-01 05:13:14 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:13:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:13:14 --> Total execution time: 0.0956
DEBUG - 2019-05-01 05:13:53 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:13:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:13:53 --> Total execution time: 0.3038
DEBUG - 2019-05-01 05:13:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:13:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:13:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:13:54 --> Total execution time: 0.3734
DEBUG - 2019-05-01 05:13:58 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:13:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:13:58 --> Total execution time: 0.0972
DEBUG - 2019-05-01 05:15:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:15:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:15:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:15:06 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:15:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = '2', `IdEstatusPaquete` = 3, `FechaEnv` = '2020-01-01'
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:15:11 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:15:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:15:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:15:11 --> Total execution time: 0.1003
DEBUG - 2019-05-01 05:16:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:16:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:16:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:16:19 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
DEBUG - 2019-05-01 05:16:19 --> Total execution time: 0.1612
DEBUG - 2019-05-01 05:16:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:16:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:16:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:16:20 --> Total execution time: 0.1144
DEBUG - 2019-05-01 05:16:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:16:25 --> Total execution time: 0.1156
DEBUG - 2019-05-01 05:16:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:16:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:16:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:16:30 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
DEBUG - 2019-05-01 05:16:30 --> Total execution time: 0.1211
DEBUG - 2019-05-01 05:16:33 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:16:33 --> Total execution time: 0.1107
DEBUG - 2019-05-01 05:17:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:17:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:17:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:17:03 --> Total execution time: 0.2871
DEBUG - 2019-05-01 05:17:04 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:17:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:17:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:17:04 --> Total execution time: 0.3636
DEBUG - 2019-05-01 05:17:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:17:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:17:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:17:06 --> Total execution time: 0.1111
DEBUG - 2019-05-01 05:17:16 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:17:16 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:17:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = '2', `IdEstatusPaquete` = 3, `FechaEnv` = '2019-01-01'
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:17:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:17:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:17:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:17:28 --> Severity: Notice --> Undefined variable: Fecha C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 96
ERROR - 2019-05-01 05:17:28 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:17:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= NULL
WHERE `IdPaqueteEnvio`. IS NULL' at line 1 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = NULL, `IdEstatusPaquete` = 2,  = NULL
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:18:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:18:08 --> Severity: Notice --> Undefined variable: Fecha C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 96
ERROR - 2019-05-01 05:18:08 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:18:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= NULL
WHERE `IdPaqueteEnvio`. IS NULL' at line 1 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = NULL, `IdEstatusPaquete` = 2,  = NULL
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:18:11 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:18:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:18:11 --> Severity: Notice --> Undefined variable: Fecha C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 96
ERROR - 2019-05-01 05:18:11 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= NULL
WHERE `IdPaqueteEnvio`. IS NULL' at line 1 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = NULL, `IdEstatusPaquete` = 2,  = NULL
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:18:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:18:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:18:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:18:17 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:18:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = '2', `IdEstatusPaquete` = 3, `FechaEnv` = '2019-01-01'
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:18:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:18:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:18:22 --> Severity: Notice --> Undefined variable: Fecha C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 96
ERROR - 2019-05-01 05:18:22 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:18:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= NULL
WHERE `IdPaqueteEnvio`. IS NULL' at line 1 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = NULL, `IdEstatusPaquete` = 2,  = NULL
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:18:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:18:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:18:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:18:54 --> Severity: Notice --> Undefined variable: Fecha C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 96
ERROR - 2019-05-01 05:18:54 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= NULL
WHERE `IdPaqueteEnvio`. IS NULL' at line 1 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = NULL, `IdEstatusPaquete` = 1,  = NULL
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:19:02 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:19:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:19:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:19:02 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:19:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = '2', `IdEstatusPaquete` = 2, `FechaEnv` = '2019-01-01'
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:19:04 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:19:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:19:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:19:04 --> Severity: Notice --> Undefined variable: Fecha C:\xampp\htdocs\SC_INTEC\application\controllers\Paquetes_Controller.php 96
ERROR - 2019-05-01 05:19:04 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
ERROR - 2019-05-01 05:19:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= NULL
WHERE `IdPaqueteEnvio`. IS NULL' at line 1 - Invalid query: UPDATE `paquete_envio` SET `IdPaqueteEnvio` = NULL, `IdEstatusPaquete` = 1,  = NULL
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:19:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:19:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:19:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:19:57 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 45
DEBUG - 2019-05-01 05:19:57 --> Total execution time: 0.1277
DEBUG - 2019-05-01 05:19:58 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:19:58 --> Total execution time: 0.1139
DEBUG - 2019-05-01 05:20:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:20:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:20:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:20:05 --> Total execution time: 0.1779
DEBUG - 2019-05-01 05:20:41 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:20:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:20:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:20:42 --> Total execution time: 0.3698
DEBUG - 2019-05-01 05:20:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:20:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:20:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:20:43 --> Total execution time: 0.4689
DEBUG - 2019-05-01 05:20:46 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:20:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:20:46 --> Total execution time: 0.1122
DEBUG - 2019-05-01 05:20:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:20:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:20:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:20:55 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 44
DEBUG - 2019-05-01 05:20:55 --> Total execution time: 0.1428
DEBUG - 2019-05-01 05:20:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:20:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:20:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:20:57 --> Total execution time: 0.1460
DEBUG - 2019-05-01 05:21:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:21:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:21:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:21:06 --> Total execution time: 0.1335
DEBUG - 2019-05-01 05:22:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:22:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:22:49 --> Total execution time: 0.4629
DEBUG - 2019-05-01 05:22:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:22:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:22:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:22:50 --> Total execution time: 0.4979
DEBUG - 2019-05-01 05:22:58 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:22:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:22:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:22:58 --> Total execution time: 0.1207
DEBUG - 2019-05-01 05:23:09 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:23:09 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 44
ERROR - 2019-05-01 05:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdEstatusPaquete` = 2, `FechaEnv` = '2019-01-01'
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:23:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:23:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:23:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:23:21 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 44
ERROR - 2019-05-01 05:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IS NULL' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdEstatusPaquete` = 2, `FechaEnv` = '2019-01-01'
WHERE `IdPaqueteEnvio`. IS NULL
DEBUG - 2019-05-01 05:26:09 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:26:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:26:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:26:10 --> Total execution time: 0.4274
DEBUG - 2019-05-01 05:26:11 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:26:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:26:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:26:11 --> Total execution time: 0.5583
DEBUG - 2019-05-01 05:26:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:26:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:26:25 --> Total execution time: 0.1254
DEBUG - 2019-05-01 05:26:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:26:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:26:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:26:35 --> Severity: Notice --> Undefined variable: IdPaqueteEnvio C:\xampp\htdocs\SC_INTEC\application\models\Paquetes_Model.php 44
DEBUG - 2019-05-01 05:26:35 --> Total execution time: 0.1455
DEBUG - 2019-05-01 05:26:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:26:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:26:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:26:37 --> Total execution time: 0.1363
DEBUG - 2019-05-01 05:26:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:26:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:26:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:26:42 --> Total execution time: 0.2672
DEBUG - 2019-05-01 05:27:14 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:27:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:27:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:27:14 --> Total execution time: 0.1312
DEBUG - 2019-05-01 05:29:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:29:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:29:19 --> Total execution time: 0.1319
DEBUG - 2019-05-01 05:29:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:29:20 --> Total execution time: 0.1121
DEBUG - 2019-05-01 05:29:24 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:29:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:29:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:29:24 --> Total execution time: 0.1187
DEBUG - 2019-05-01 05:29:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:29:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:29:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:29:42 --> Total execution time: 0.1472
DEBUG - 2019-05-01 05:29:44 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:29:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:29:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:29:44 --> Total execution time: 0.1240
DEBUG - 2019-05-01 05:30:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:30:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:30:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:30:41 --> Total execution time: 0.3619
DEBUG - 2019-05-01 05:30:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:30:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:30:42 --> Total execution time: 0.4589
DEBUG - 2019-05-01 05:30:47 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:30:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:30:47 --> Total execution time: 0.0987
DEBUG - 2019-05-01 05:30:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:30:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '1'' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdEstatusPaquete` = 3, `FechaRecLab` = '2020-01-01'
WHERE `IdPaqueteEnvio`. = '1'
DEBUG - 2019-05-01 05:31:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:31:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:31:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:31:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '1'' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdEstatusPaquete` = 3, `FechaRecLab` = '2020-01-01'
WHERE `IdPaqueteEnvio`. = '1'
DEBUG - 2019-05-01 05:33:44 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:33:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2019-05-01 05:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '2'' at line 2 - Invalid query: UPDATE `paquete_envio` SET `IdEstatusPaquete` = 3, `FechaRecLab` = '2020-01-01'
WHERE `IdPaqueteEnvio`. = '2'
DEBUG - 2019-05-01 05:33:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:33:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:33:49 --> Total execution time: 0.3110
DEBUG - 2019-05-01 05:33:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:33:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:33:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:33:50 --> Total execution time: 0.3349
DEBUG - 2019-05-01 05:33:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:33:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:33:54 --> Total execution time: 0.0969
DEBUG - 2019-05-01 05:34:37 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:34:37 --> Total execution time: 0.3747
DEBUG - 2019-05-01 05:34:37 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:34:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:34:38 --> Total execution time: 0.3565
DEBUG - 2019-05-01 05:34:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:34:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:34:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:34:40 --> Total execution time: 0.1139
DEBUG - 2019-05-01 05:34:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:34:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:34:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:34:48 --> Total execution time: 0.1066
DEBUG - 2019-05-01 05:34:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:34:50 --> Total execution time: 0.1090
DEBUG - 2019-05-01 05:34:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:34:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:34:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:34:56 --> Total execution time: 0.1110
DEBUG - 2019-05-01 05:35:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:35:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:35:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:35:05 --> Total execution time: 0.1143
DEBUG - 2019-05-01 05:35:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:35:07 --> Total execution time: 0.1132
DEBUG - 2019-05-01 05:35:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:35:20 --> Total execution time: 0.0976
DEBUG - 2019-05-01 05:36:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:36:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:36:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:36:49 --> Total execution time: 0.1036
DEBUG - 2019-05-01 05:36:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:36:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:36:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:36:50 --> Total execution time: 0.1121
DEBUG - 2019-05-01 05:36:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:36:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:36:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:36:55 --> Total execution time: 0.1106
DEBUG - 2019-05-01 05:37:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:37:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:37:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:37:21 --> Total execution time: 0.1055
DEBUG - 2019-05-01 05:37:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:37:23 --> Total execution time: 0.1129
DEBUG - 2019-05-01 05:37:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:37:28 --> Total execution time: 0.0966
DEBUG - 2019-05-01 05:39:38 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:39:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:39:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:39:38 --> Total execution time: 0.3556
DEBUG - 2019-05-01 05:39:39 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:39:39 --> Total execution time: 0.4023
DEBUG - 2019-05-01 05:39:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:39:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:39:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:39:42 --> Total execution time: 0.1206
DEBUG - 2019-05-01 05:41:41 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:41:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:41:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:41:41 --> Total execution time: 0.1072
DEBUG - 2019-05-01 05:41:43 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:41:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:41:43 --> Total execution time: 0.1146
DEBUG - 2019-05-01 05:41:46 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:41:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:41:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:41:46 --> Total execution time: 0.1064
DEBUG - 2019-05-01 05:43:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:43:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:43:24 --> Total execution time: 0.1178
DEBUG - 2019-05-01 05:47:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:47:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:47:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:47:49 --> Total execution time: 0.4079
DEBUG - 2019-05-01 05:47:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:47:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:47:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:47:50 --> Total execution time: 0.5169
DEBUG - 2019-05-01 05:47:52 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:47:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:47:52 --> Total execution time: 0.1188
DEBUG - 2019-05-01 05:48:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:48:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:48:08 --> Total execution time: 0.1049
DEBUG - 2019-05-01 05:48:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 05:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 05:48:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 05:48:08 --> Total execution time: 0.1073
DEBUG - 2019-05-01 06:38:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:23 --> No URI present. Default controller set.
DEBUG - 2019-05-01 06:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:23 --> Total execution time: 0.1533
DEBUG - 2019-05-01 06:38:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:25 --> Total execution time: 0.1894
DEBUG - 2019-05-01 06:38:29 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:29 --> Total execution time: 0.1177
DEBUG - 2019-05-01 06:38:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:35 --> Total execution time: 0.2965
DEBUG - 2019-05-01 06:38:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:35 --> Total execution time: 0.3044
DEBUG - 2019-05-01 06:38:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:40 --> Total execution time: 0.2760
DEBUG - 2019-05-01 06:38:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:41 --> Total execution time: 0.3238
DEBUG - 2019-05-01 06:38:58 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:38:59 --> Total execution time: 0.2791
DEBUG - 2019-05-01 06:39:02 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:03 --> Total execution time: 0.2787
DEBUG - 2019-05-01 06:39:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:04 --> Total execution time: 0.3059
DEBUG - 2019-05-01 06:39:04 --> Total execution time: 0.4722
DEBUG - 2019-05-01 06:39:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:06 --> Total execution time: 0.2849
DEBUG - 2019-05-01 06:39:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:06 --> Total execution time: 0.3084
DEBUG - 2019-05-01 06:39:07 --> Total execution time: 0.5265
DEBUG - 2019-05-01 06:39:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:08 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 06:39:08 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 06:39:09 --> Total execution time: 0.9550
DEBUG - 2019-05-01 06:39:59 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:39:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:39:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:39:59 --> Total execution time: 0.2914
DEBUG - 2019-05-01 06:40:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:00 --> Total execution time: 0.3340
DEBUG - 2019-05-01 06:40:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:04 --> Total execution time: 0.0999
DEBUG - 2019-05-01 06:40:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:07 --> Total execution time: 0.2595
DEBUG - 2019-05-01 06:40:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:08 --> Total execution time: 0.3789
DEBUG - 2019-05-01 06:40:08 --> Total execution time: 0.6115
DEBUG - 2019-05-01 06:40:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:18 --> Total execution time: 0.3073
DEBUG - 2019-05-01 06:40:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:19 --> Total execution time: 0.3788
DEBUG - 2019-05-01 06:40:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:22 --> Total execution time: 0.1087
DEBUG - 2019-05-01 06:40:31 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:31 --> Total execution time: 0.1080
DEBUG - 2019-05-01 06:40:31 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:31 --> Total execution time: 0.1093
DEBUG - 2019-05-01 06:40:41 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:41 --> Total execution time: 0.1073
DEBUG - 2019-05-01 06:40:41 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:41 --> Total execution time: 0.1311
DEBUG - 2019-05-01 06:40:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:50 --> Total execution time: 0.1127
DEBUG - 2019-05-01 06:40:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:50 --> Total execution time: 0.1067
DEBUG - 2019-05-01 06:40:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:57 --> Total execution time: 0.1152
DEBUG - 2019-05-01 06:40:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:40:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:40:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:40:57 --> Total execution time: 0.1147
DEBUG - 2019-05-01 06:41:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:41:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:41:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:41:06 --> Total execution time: 0.1071
DEBUG - 2019-05-01 06:41:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:41:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:41:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:41:06 --> Total execution time: 0.1071
DEBUG - 2019-05-01 06:49:15 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:49:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:49:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:49:16 --> Total execution time: 0.3048
DEBUG - 2019-05-01 06:49:16 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:49:16 --> Total execution time: 0.3308
DEBUG - 2019-05-01 06:49:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:49:21 --> Total execution time: 0.1172
DEBUG - 2019-05-01 06:50:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:50:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:50:42 --> Total execution time: 0.2863
DEBUG - 2019-05-01 06:50:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:50:42 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:50:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:50:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:50:42 --> Total execution time: 0.3548
DEBUG - 2019-05-01 06:50:43 --> Total execution time: 0.5499
DEBUG - 2019-05-01 06:50:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:50:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:50:49 --> Total execution time: 0.2797
DEBUG - 2019-05-01 06:50:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:50:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:50:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:50:50 --> Total execution time: 0.3254
DEBUG - 2019-05-01 06:50:51 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:50:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:50:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:50:51 --> Total execution time: 0.2711
DEBUG - 2019-05-01 06:51:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:01 --> Total execution time: 0.2624
DEBUG - 2019-05-01 06:51:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:06 --> Total execution time: 0.2882
DEBUG - 2019-05-01 06:51:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:07 --> Total execution time: 0.2728
DEBUG - 2019-05-01 06:51:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:12 --> Total execution time: 0.2953
DEBUG - 2019-05-01 06:51:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:13 --> Total execution time: 0.3008
DEBUG - 2019-05-01 06:51:15 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:15 --> Total execution time: 0.2905
DEBUG - 2019-05-01 06:51:15 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:15 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:16 --> Total execution time: 0.3568
DEBUG - 2019-05-01 06:51:16 --> Total execution time: 0.5767
DEBUG - 2019-05-01 06:51:16 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:17 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 06:51:17 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 06:51:17 --> Total execution time: 0.8658
DEBUG - 2019-05-01 06:51:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:23 --> Total execution time: 0.2776
DEBUG - 2019-05-01 06:51:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:23 --> Total execution time: 0.3043
DEBUG - 2019-05-01 06:51:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:25 --> Total execution time: 0.2553
DEBUG - 2019-05-01 06:51:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:26 --> Total execution time: 0.3234
DEBUG - 2019-05-01 06:51:26 --> Total execution time: 0.5415
DEBUG - 2019-05-01 06:51:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:35 --> Total execution time: 0.2907
DEBUG - 2019-05-01 06:51:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:51:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:51:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:51:36 --> Total execution time: 0.3352
DEBUG - 2019-05-01 06:53:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:12 --> Total execution time: 0.3288
DEBUG - 2019-05-01 06:53:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:13 --> Total execution time: 0.5549
DEBUG - 2019-05-01 06:53:16 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:16 --> Total execution time: 0.0993
DEBUG - 2019-05-01 06:53:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:17 --> Total execution time: 0.2744
DEBUG - 2019-05-01 06:53:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:17 --> Total execution time: 0.3508
DEBUG - 2019-05-01 06:53:17 --> Total execution time: 0.5593
DEBUG - 2019-05-01 06:53:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:26 --> Total execution time: 0.3004
DEBUG - 2019-05-01 06:53:26 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:26 --> Total execution time: 0.3334
DEBUG - 2019-05-01 06:53:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:34 --> Total execution time: 0.1100
DEBUG - 2019-05-01 06:53:39 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:53:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:53:39 --> Total execution time: 0.1017
DEBUG - 2019-05-01 06:58:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:58:50 --> Total execution time: 0.2706
DEBUG - 2019-05-01 06:58:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:58:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:58:51 --> Total execution time: 0.3333
DEBUG - 2019-05-01 06:58:51 --> Total execution time: 0.5370
DEBUG - 2019-05-01 06:58:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:58:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:58:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:58:55 --> Total execution time: 0.2992
DEBUG - 2019-05-01 06:58:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:58:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:58:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:58:56 --> Total execution time: 0.3430
DEBUG - 2019-05-01 06:59:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:00 --> Total execution time: 0.2540
DEBUG - 2019-05-01 06:59:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:03 --> Total execution time: 0.2637
DEBUG - 2019-05-01 06:59:14 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:15 --> Total execution time: 0.2773
DEBUG - 2019-05-01 06:59:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:17 --> Total execution time: 0.2888
DEBUG - 2019-05-01 06:59:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:21 --> Total execution time: 0.3048
DEBUG - 2019-05-01 06:59:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:22 --> Total execution time: 0.2770
DEBUG - 2019-05-01 06:59:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:25 --> Total execution time: 0.3064
DEBUG - 2019-05-01 06:59:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:26 --> Total execution time: 0.3144
DEBUG - 2019-05-01 06:59:26 --> Total execution time: 0.5915
DEBUG - 2019-05-01 06:59:26 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:27 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 06:59:27 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 06:59:27 --> Total execution time: 0.8745
DEBUG - 2019-05-01 06:59:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:34 --> Total execution time: 0.2957
DEBUG - 2019-05-01 06:59:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:35 --> Total execution time: 0.3037
DEBUG - 2019-05-01 06:59:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:36 --> Total execution time: 0.0929
DEBUG - 2019-05-01 06:59:39 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:40 --> Total execution time: 0.2561
DEBUG - 2019-05-01 06:59:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:40 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:40 --> Total execution time: 0.3544
DEBUG - 2019-05-01 06:59:40 --> Total execution time: 0.5564
DEBUG - 2019-05-01 06:59:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:57 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:58 --> Total execution time: 0.3675
DEBUG - 2019-05-01 06:59:58 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 06:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 06:59:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 06:59:58 --> Total execution time: 0.3685
DEBUG - 2019-05-01 07:00:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:00 --> Total execution time: 0.1547
DEBUG - 2019-05-01 07:00:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:05 --> Total execution time: 0.1063
DEBUG - 2019-05-01 07:00:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:05 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:05 --> Total execution time: 0.1286
DEBUG - 2019-05-01 07:00:06 --> Total execution time: 0.1241
DEBUG - 2019-05-01 07:00:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:06 --> Total execution time: 0.1451
DEBUG - 2019-05-01 07:00:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:08 --> Total execution time: 0.3132
DEBUG - 2019-05-01 07:00:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:09 --> Total execution time: 0.3891
DEBUG - 2019-05-01 07:00:10 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:11 --> Total execution time: 0.1368
DEBUG - 2019-05-01 07:00:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:22 --> Total execution time: 0.1887
DEBUG - 2019-05-01 07:00:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:30 --> Total execution time: 0.3105
DEBUG - 2019-05-01 07:00:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:00:30 --> Total execution time: 0.4277
DEBUG - 2019-05-01 07:00:31 --> Total execution time: 0.6690
DEBUG - 2019-05-01 07:01:04 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:01:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:01:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:01:05 --> Total execution time: 0.1275
DEBUG - 2019-05-01 07:02:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:13 --> Total execution time: 0.1515
DEBUG - 2019-05-01 07:02:13 --> Total execution time: 0.1499
DEBUG - 2019-05-01 07:02:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:17 --> Total execution time: 0.4097
DEBUG - 2019-05-01 07:02:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:18 --> Total execution time: 0.3872
DEBUG - 2019-05-01 07:02:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:20 --> Total execution time: 0.2785
DEBUG - 2019-05-01 07:02:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:21 --> Total execution time: 0.3643
DEBUG - 2019-05-01 07:02:21 --> Total execution time: 0.5884
DEBUG - 2019-05-01 07:02:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:22 --> Total execution time: 0.3105
DEBUG - 2019-05-01 07:02:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:23 --> Total execution time: 0.4643
DEBUG - 2019-05-01 07:02:23 --> Total execution time: 0.7356
DEBUG - 2019-05-01 07:02:25 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:25 --> Total execution time: 0.1279
DEBUG - 2019-05-01 07:02:28 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:28 --> Total execution time: 0.1179
DEBUG - 2019-05-01 07:02:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:36 --> Total execution time: 0.1056
DEBUG - 2019-05-01 07:02:37 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:02:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:02:37 --> Total execution time: 0.1351
DEBUG - 2019-05-01 07:03:00 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:01 --> Total execution time: 0.3002
DEBUG - 2019-05-01 07:03:01 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:01 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:01 --> Total execution time: 0.4317
DEBUG - 2019-05-01 07:03:01 --> Total execution time: 0.6608
DEBUG - 2019-05-01 07:03:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:03 --> Total execution time: 0.0932
DEBUG - 2019-05-01 07:03:08 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:08 --> Total execution time: 0.1110
DEBUG - 2019-05-01 07:03:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:19 --> Total execution time: 0.3041
DEBUG - 2019-05-01 07:03:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:19 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:20 --> Total execution time: 0.3907
DEBUG - 2019-05-01 07:03:20 --> Total execution time: 0.6179
DEBUG - 2019-05-01 07:03:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:23 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:03:24 --> Total execution time: 0.1392
DEBUG - 2019-05-01 07:03:24 --> Total execution time: 0.1594
DEBUG - 2019-05-01 07:04:02 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:02 --> Total execution time: 0.2980
DEBUG - 2019-05-01 07:04:03 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:03 --> Total execution time: 0.3751
DEBUG - 2019-05-01 07:04:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:06 --> Total execution time: 0.3233
DEBUG - 2019-05-01 07:04:17 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:17 --> Total execution time: 0.2989
DEBUG - 2019-05-01 07:04:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:18 --> Total execution time: 0.3876
DEBUG - 2019-05-01 07:04:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:19 --> Total execution time: 0.6089
DEBUG - 2019-05-01 07:04:19 --> Total execution time: 0.5388
DEBUG - 2019-05-01 07:04:20 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:20 --> Total execution time: 0.2931
DEBUG - 2019-05-01 07:04:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:21 --> Total execution time: 0.3186
DEBUG - 2019-05-01 07:04:21 --> Total execution time: 0.5300
DEBUG - 2019-05-01 07:04:21 --> Total execution time: 0.7847
DEBUG - 2019-05-01 07:04:22 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:23 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 07:04:23 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 07:04:23 --> Total execution time: 0.9899
DEBUG - 2019-05-01 07:04:29 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:29 --> Total execution time: 0.2919
DEBUG - 2019-05-01 07:04:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:30 --> Total execution time: 0.3381
DEBUG - 2019-05-01 07:04:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:34 --> Total execution time: 0.2812
DEBUG - 2019-05-01 07:04:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:34 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:35 --> Total execution time: 0.3445
DEBUG - 2019-05-01 07:04:35 --> Total execution time: 0.5599
DEBUG - 2019-05-01 07:04:45 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:46 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:46 --> Total execution time: 0.3228
DEBUG - 2019-05-01 07:04:46 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:47 --> Total execution time: 0.3633
DEBUG - 2019-05-01 07:04:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:04:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:04:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:04:50 --> Total execution time: 0.0934
DEBUG - 2019-05-01 07:05:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:18 --> Total execution time: 0.2854
DEBUG - 2019-05-01 07:05:18 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:19 --> Total execution time: 0.3276
DEBUG - 2019-05-01 07:05:21 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:21 --> Total execution time: 0.2758
DEBUG - 2019-05-01 07:05:30 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:30 --> Total execution time: 0.2588
DEBUG - 2019-05-01 07:05:32 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:32 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:32 --> Total execution time: 0.3119
DEBUG - 2019-05-01 07:05:33 --> Total execution time: 0.5133
DEBUG - 2019-05-01 07:05:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:35 --> Total execution time: 0.3178
DEBUG - 2019-05-01 07:05:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:35 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:35 --> Total execution time: 0.3067
DEBUG - 2019-05-01 07:05:36 --> Total execution time: 0.6553
DEBUG - 2019-05-01 07:05:36 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:37 --> M_pdf class already loaded. Second attempt ignored.
ERROR - 2019-05-01 07:05:37 --> Severity: Notice --> Undefined variable: table2 C:\xampp\htdocs\SC_INTEC\application\controllers\Servicio_Controller.php 326
DEBUG - 2019-05-01 07:05:37 --> Total execution time: 0.7326
DEBUG - 2019-05-01 07:05:44 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:44 --> Total execution time: 0.2837
DEBUG - 2019-05-01 07:05:44 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:45 --> Total execution time: 0.3398
DEBUG - 2019-05-01 07:05:47 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:47 --> Total execution time: 0.2757
DEBUG - 2019-05-01 07:05:47 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:47 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:48 --> Total execution time: 0.3463
DEBUG - 2019-05-01 07:05:48 --> Total execution time: 0.5666
DEBUG - 2019-05-01 07:05:55 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:56 --> Total execution time: 0.2817
DEBUG - 2019-05-01 07:05:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:05:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:05:57 --> Total execution time: 0.3554
DEBUG - 2019-05-01 07:05:59 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:05:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:06:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:06:00 --> Total execution time: 0.1143
DEBUG - 2019-05-01 07:06:06 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:06:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:06:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:06:06 --> Total execution time: 0.1051
DEBUG - 2019-05-01 07:07:07 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:07:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:07:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:07:08 --> Total execution time: 0.0945
DEBUG - 2019-05-01 07:07:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:07:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:07:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:07:12 --> Total execution time: 0.3137
DEBUG - 2019-05-01 07:07:12 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:07:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:07:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:07:13 --> Total execution time: 0.3305
DEBUG - 2019-05-01 07:07:14 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:07:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:07:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:07:14 --> Total execution time: 0.0933
DEBUG - 2019-05-01 07:08:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:08:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:08:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:08:54 --> Total execution time: 0.3120
DEBUG - 2019-05-01 07:08:54 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:08:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:08:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:08:55 --> Total execution time: 0.3454
DEBUG - 2019-05-01 07:08:56 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:08:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:08:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:08:56 --> Total execution time: 0.0974
DEBUG - 2019-05-01 07:09:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:09:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:09:13 --> Total execution time: 0.1065
DEBUG - 2019-05-01 07:09:13 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:09:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:09:13 --> Total execution time: 0.1213
DEBUG - 2019-05-01 07:22:44 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:22:44 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:22:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:22:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:22:44 --> Total execution time: 0.1355
DEBUG - 2019-05-01 07:22:44 --> Total execution time: 0.1401
DEBUG - 2019-05-01 07:22:46 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:22:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:22:46 --> Total execution time: 0.1020
DEBUG - 2019-05-01 07:22:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:22:48 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:22:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:22:48 --> Total execution time: 0.1138
DEBUG - 2019-05-01 07:22:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:22:48 --> Total execution time: 0.1306
DEBUG - 2019-05-01 07:22:49 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:22:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:22:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:22:49 --> Total execution time: 0.1002
DEBUG - 2019-05-01 07:22:50 --> UTF-8 Support Enabled
DEBUG - 2019-05-01 07:22:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-05-01 07:22:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2019-05-01 07:22:50 --> Total execution time: 0.1022
