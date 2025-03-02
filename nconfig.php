<?php 
/*=======================================================================
  86it Network Config File
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
if(realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) exit('Access Denied');

global $dbhost2, $dbname2, $dbuname2, $db2, $network_prefix; 

# un-comment this to enable network support
define('network', 'enabled');
if ( defined('network') ):
$dbhost2 = 'localhost';
$dbname2 = 'hub_db';
$dbuname2 = 'hub_readonly'; # you must ask the 86it webmaster for a network id and password!
$dbpass2 = 'xwdNPADv86readonly'; # you must ask the 86it webmaster for a network id and password!
$network_prefix = 'network';
endif;
?>
