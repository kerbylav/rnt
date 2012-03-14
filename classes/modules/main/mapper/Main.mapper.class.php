<?php
/*
 * 
 * Project Name : Really new topics
 * Copyright (C) 2011 Alexei Lukin. All rights reserved.
 * License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */


Class PluginRNT_ModuleMain_MapperMain extends Mapper {

	public function GetLastReadTopic($iId)
	{
		$sql = "SELECT UNIX_TIMESTAMP(date_read) as dr FROM ".Config::Get('db.table.topic_read')." where user_id=?d order by date_read desc limit 0,1";
		if ($aRow=$this->oDb->selectRow($sql,$iId)) {
				return $aRow['dr'];
		}
		return null;
	}

}
?>