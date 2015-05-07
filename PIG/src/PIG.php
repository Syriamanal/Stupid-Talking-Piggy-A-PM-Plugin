<?php
namespace PIG;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
class Main extends PluginBase {

public function onEnable(){
$this->getLogger()->info(TextFormat::DARK_GREEN . "<Pig>" . "Pig Has Loaded!");
}
public function onPlaerJoin(PlayerJoinEvent $event){}
$p = $event->getPlayer();
$p->sendMessage("<Pig> Welcome To Quantum Works MC!");

}
