<?php
/*
 * 
 * Project Name : Really new topics
 * Copyright (C) 2011 Alexei Lukin. All rights reserved.
 * License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */


if (!class_exists('Plugin')) {
	die('Hacking attemp!');
}

define('RNT_VERSION', '0.0.1');

class PluginRNT extends Plugin
{
	protected $sTemplatesUrl = "";

	protected $aInherits=array(
		'module'  =>array('ModuleUser'=>'_ModuleUser')    
	);
	
	public function Activate()
	{
		return true;
	}


	public function Deactivate()
	{
		return true;
	}

	public function Init()
	{
		$sTemplatesUrl = Plugin::GetTemplatePath('PluginRNT');
	}

}

?>
