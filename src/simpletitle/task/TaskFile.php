<?php
namespace simpletitle\task;

use pocketmine\utils\Config;
use pocketmine\scheduler\Task;
use pocketmine\Player;

use simpletitle\Main;

class TaskFile extends Task{
	public Main $plugin;
	public Player $player;
	
	public function __construct(Main $plugin, Player $player){
		$this->plugin = $plugin;
		$this->player = $player;
	}
	
	public function onRun(int $CurrentTick){
		$player_variable = $this->player;
		$plugin = $this->plugin;
		$values = array_values($plugin->config->get("configurations"));
		
        	$title_0 = $values[1];
        	$title_0 = str_replace("{player}", $player_variable->getName(), $title_0);
		$title_0 = str_replace($values[0], "§", $title_0);
		
        	$title_1 = $values[2];
        	$title_1 = str_replace("{player}", $player_variable->getName(), $title_1);
		$title_1 = str_replace($values[0], "§", $title_1);
        
        	$player_variable->addTitle($title_0, $title_1);
	}
}
