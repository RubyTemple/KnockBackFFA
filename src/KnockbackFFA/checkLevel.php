<?php

namespace KnockbackFFA;

use pocketmine\scheduler\Task;

class checkLevel extends Task {
	
	public function __construct(KnockbackFFA $plugin){
		$this->plugin = $plugin;
	}
	
	public function onRun(int $currentTick){
		$this->plugin->checkLevelTask();
	}
}
