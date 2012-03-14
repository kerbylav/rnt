<?php
/*
 *
 * Project Name : Really new topics
 * Copyright (C) 2011 Alexei Lukin. All rights reserved.
 * License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */


/**
 * Модуль
 *
 */
class PluginRNT_ModuleMain extends Module {
	protected $oMapper;

	public function Init() {
		$this->oMapper=Engine::GetMapper(__CLASS__);
	}

	public function GetLastReadTopic($iId)
	{
		return $this->oMapper->GetLastReadTopic($iId);
	}
}
?>