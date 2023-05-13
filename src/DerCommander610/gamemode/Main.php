<?php
namespace DerCommander610\gamemode;

use DerCommander610\gamemode\Commands\gamemodeadventure;
use DerCommander610\gamemode\Commands\gamemodespectator;
use DerCommander610\gamemode\Commands\gamemodesurvival;
use DerCommander610\gamemode\Commands\gamemodecreative;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase {
    use SingletonTrait;

    public function onEnable(): void{
        self::setInstance($this);
        self::saveConfig();
        self::getServer()->getCommandMap()->registerAll($this->getName(), [
            new gamemodecreative(), new gamemodesurvival(), new gamemodeadventure(), new gamemodespectator()
        ]);
    }
}