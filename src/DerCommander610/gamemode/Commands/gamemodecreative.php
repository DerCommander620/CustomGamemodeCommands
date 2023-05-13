<?php
namespace DerCommander610\gamemode\Commands;

use DerCommander610\gamemode\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\player\GameMode;

class gamemodecreative extends Command{

    public function __construct(){
        parent::__construct("gm1", "Gamemode 1 Command", "gm1", ["gamemode1", "g1"]);
        parent::setPermission("gm.command.creative");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        $config = Main::getInstance()->getConfig();
        if($sender instanceof Player){
            if($sender->hasPermission("gm.command.creative")){
                $sender->sendMessage($config->get("Prefix") . " §7You succefully set your Gamemode to Creative!");
                $sender->setGamemode(GameMode::CREATIVE());
                return true;
            }
        }else{
            $sender->sendMessage($config->get("use.In-Game"));
        }
        return true;
    }
}
