<?php
/******************************************************************************
 * Configuration file  --  Darkcanuck's Roborumble Server
 *
 * Copyright 2008-2011 Jerome Lavigne (jerome@darkcanuck.net)
 * Released under GPL version 3.0 http://www.gnu.org/licenses/gpl-3.0.html
 *****************************************************************************/

$db_creds = array(
	'db'     => getenv('ROBORUMBLE_DATABASE', true) ?: 'roborumble',
   	'user'   => getenv('ROBORUMBLE_USERNAME', true) ?: 'rumbleuser',
   	'server' => getenv('ROBORUMBLE_SERVER', true) ?: 'localhost',
	'passwd' => getenv('ROBORUMBLE_PASSWORD', true) ?: 'rumblepass'
	);

?>
