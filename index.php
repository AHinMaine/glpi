<?php
/*
 ----------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2005 by the INDEPNET Development Team.
 
 http://indepnet.net/   http://glpi.indepnet.org
 ----------------------------------------------------------------------

 LICENSE

	This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
*/
 
// ----------------------------------------------------------------------
// Original Author of file:
// Purpose of file:
// ----------------------------------------------------------------------

// Test si config_db n'existe pas on lance l'installation

include ("_relpos.php");
if(!file_exists($phproot ."/glpi/config/config_db.php")) {
	include($phproot ."/install.php");
	die();
}
else
{
include ($phproot . "/glpi/includes.php");

// Start the page
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
echo "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">";
echo "<head><title>GLPI Login</title>\n";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1 \" />\n";
echo "<meta http-equiv=\"Content-Script-Type\" content=\"text/javascript\" />\n";
echo "<link rel='shortcut icon' type='images/x-icon' href='".$HTMLRel."pics/favicon.ico' />";

// Appel CSS


echo "<link rel='stylesheet'  href='".$HTMLRel."styles.css' type='text/css' media='screen' />";



echo "</head>";

// Body with configured stuff

echo "<body>";


// contenu

echo "<div id='contenulogin'>";

echo "<div id='logo-login'>";
echo "<img src=\"".$HTMLRel."pics/logo-glpi-login.png\"  alt=\"Logo GLPI Powered By Indepnet\" title=\"Powered By Indepnet\" /><br />";
echo "<a href=\"http://GLPI.indepnet.org/\" class='sous_logo'>";
	echo "GLPI version ".$cfg_install["version"]."";
	echo "</a>";
echo "</div>";

echo "<div id='boxlogin'>";

echo "<form action='login.php' method='post'>";

echo "<fieldset>";
echo "<legend>Identification</legend>";


echo "<p><span><label>Login............. :  </label></span><span> <input type='text' name='login_name' id='login_name' maxlength='30' /></span></p>";


echo "<p><span><label>Password....... : </label></span><span><input type='password' name='login_password' id='login_password' maxlength='30' /> </span></p>";

echo "</fieldset>";

echo "<p><span> <input type='submit' name='submit' value='Login' class='submit' /></span></p>";
echo "</form>";

 
echo "<p> <img src='".$HTMLRel."pics/key.png' alt='keys' /> </p>";


echo "</div>";
echo "</div>";

// fin contenu



// End

	
	
}
echo "</body></html>";


?>
