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
class PluginRNT_ModuleUser extends PluginRNT_Inherit_ModuleUser {

	public function Authorization(ModuleUser_EntityUser $oUser,$bRemember=true) {
		$res=parent::Authorization($oUser,$bRemember);
		if ($res!==false)
		{ 
			$this->Session_Set('last_read_topic_since',$this->PluginRNT_ModuleMain_GetLastReadTopic($oUser->getId()));
		}
		
		return $res;
	}
}
?>