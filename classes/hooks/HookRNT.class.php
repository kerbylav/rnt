<?php
/*
 *
 * Project Name : Really new topics
 * Copyright (C) 2011 Alexei Lukin. All rights reserved.
 * License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */


/**
 * Регистрация хуков
 *
 */
class PluginRNT_HookRNT extends Hook {

	public function RegisterHook() {
		$this->AddHook('init_action', 'InitAction', __CLASS__);
	}

	public function InitAction() {
		if ($this->User_IsAuthorization())
		{
			if ($ss=$this->Session_Get('last_read_topic_since'))
			{
				$ss=time()-$ss;
				Config::Set('module.topic.new_time',$ss);
			}
		}
	}

}
?>