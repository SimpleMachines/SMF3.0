<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 3.0 Alpha 1
 */

namespace smCore\modules\smf;
use smCore, smCore\model\Module;

/**
 * Forum Module main class.
 */
class ForumModule extends Module
{
	public function load()
	{
		// Just to be on the safe side. While these don't hurt us, we don't like 'em either.
		if (isset($_REQUEST['ssi_theme']) && (int) $_REQUEST['ssi_theme'] == (int) $GLOBALS['ssi_theme'])
			die('Hacking attempt...');
		elseif (isset($_COOKIE['ssi_theme']) && (int) $_COOKIE['ssi_theme'] == (int) $GLOBALS['ssi_theme'])
			die('Hacking attempt...');
		elseif (isset($_REQUEST['ssi_layers'], $ssi_layers) && (@get_magic_quotes_gpc() ? stripslashes($_REQUEST['ssi_layers']) : $_REQUEST['ssi_layers']) == $GLOBALS['ssi_layers'])
			die('Hacking attempt...');
		if (isset($_REQUEST['context']))
			die('Hacking attempt...');

		parent::load();
	}
}
