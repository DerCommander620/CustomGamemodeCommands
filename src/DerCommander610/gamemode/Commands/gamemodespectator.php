<?php
namespace DerCommander610\gamemode\Commands;

use DerCommander610\gamemode\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\player\GameMode;

class gamemodespectator extends Command{

    public function __construct(){
        parent::__construct("gm3", "Gamemode 3 Command", "gm3", ["gamemode3", "g3"]);
        parent::setPermission("gm.command.spectator");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        $config = Main::getInstance()->getConfig();
        if($sender instanceof Player){
            if($sender->hasPermission("gm.command.spectator")){
                $sender->sendMessage($config->get("Prefix") . " §7You succefully set your Gamemode to Spectator!");
                $player->setGamemode(GameMode::SPECTATOR());
                return true;
            }
        }else{
            $sender->sendMessage($config->get("use.In-Game"));
        }
        return true;
    }
}
