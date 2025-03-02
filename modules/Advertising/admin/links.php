<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2005 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/06/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
    die('Access Denied');
}

global $admin_file;
$module_name = basename(dirname(dirname(__FILE__)));
get_lang($module_name);
adminmenu($admin_file.'.php?op=BannersAdmin', _BANNERS, 'icon.png');

?>