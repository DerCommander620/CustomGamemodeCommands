<?php
namespace DerCommander610\gamemode\Commands;

use DerCommander610\gamemode\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\player\GameMode;

class gamemodeadventure extends Command{

    public function __construct(){
        parent::__construct("gm2", "Gamemode 2 Command", "gm2", ["gamemode2", "g2"]);
        parent::setPermission("gm.command.adventure");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        $config = Main::getInstance()->getConfig();
        if($sender instanceof Player){
            if($sender->hasPermission("gm.command.adventure")){
                $sender->sendMessage($config->get("Prefix") . " §7You succefully set your Gamemode to Adventure!");
                $sender->setGamemode(GameMode::ADVENTURE());
                return true;
            }
        }else{
            $sender->sendMessage($config->get("use.In-Game"));
        }
        return true;
    }
}
