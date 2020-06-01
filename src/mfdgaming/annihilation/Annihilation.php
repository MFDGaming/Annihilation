<?php

namespace mfdgaming\annihilation;

use mfdgaming\annihilation\event\EventListener;
use pocketmine\plugin\PluginBase;

class Annihilation extends PluginBase {
	public function onLoad() {
		//do something
	}

	public function onEnable() {
		$this->eventsLoader([new EventListener()]);
	}

	public function onDisable() {
		//do something
	}
	
	public function eventsLoader($event) {
		foreach($event) {
			$this->getServer()->getPluginManager()->registerEvents($event, $this);
		}
		unset($event);
	}
	
	public function commandsLoader($command) {
		foreach($command) {
			$this->getServer()->getCommandMap()->register("Command", $command);
		}
		unset($command);
	}
}
