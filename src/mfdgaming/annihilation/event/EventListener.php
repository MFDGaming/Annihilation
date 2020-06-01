<?php

namespace mfdgaming\annihilation\event;

use mfdgaming\annihilation\Annihilation as Main;
use pocketmine\event\Listener;

class EventListener extends Listener {
	public function __construct(Main $main) {
		parent::__construct($main);
		$this->plugin = $main;
	}
}
