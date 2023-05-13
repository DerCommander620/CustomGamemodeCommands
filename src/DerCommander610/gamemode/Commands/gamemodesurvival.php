<?php
namespace DerCommander610\gamemode\Commands;

use DerCommander610\gamemode\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\player\GameMode;

class gamemodesurvival extends Command{

    public function __construct(){
        parent::__construct("gm0", "Gamemode 0 Command", "gm0", ["gamemode0", "g0"]);
        parent::setPermission("gm.command.survival");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        $config = Main::getInstance()->getConfig();
        if($sender instanceof Player){
            if($sender->hasPermission("gm.command.survival")){
                $sender->sendMessage($config->get("Prefix") . " §7You succefully set your Gamemode to Survival!");
                $sender->setGamemode(GameMode::SURVIVAL());
                return true;
            }
        }else{
            $sender->sendMessage($config->get("use.In-Game"));
        }
    return true;
    }
}
