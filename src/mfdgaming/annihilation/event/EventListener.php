<?php

namespace mfdgaming\annihilation\event;

use pocketmine\event\Listener;

class EventListener extends Listener {
	public function __construct(Main $main) {
		parent::__construct($main);
		$this->plugin = $main;
	}
  

}
