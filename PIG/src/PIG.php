<?php
namespace PIG;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase {

public function onEnable(){
$this->getLogger()->info(TextFormat::DARK_GREEN . "<Pig>" . "Pig Has Loaded!");
}
public function onSpawn(PlayerRespawnEvent $event){}

}
