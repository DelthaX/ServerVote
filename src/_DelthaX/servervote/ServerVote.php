<?php
namespace _DelthaX\servervote;
use pocketmine\plugin\PluginBase;
class ServerVote extends PluginBase{
	private static $api = null;
	private $resources = ["settings.yml", "list.yml"];
	public function onLoad(){
		if(self::$api == null) self::$api = $this;
		$this->loadResources();
	}
	
	public static function getAPI(){
		return static::$api;
	}
	private function loadResources(){
		foreach($this->resources as $file){
			$this->saveResources($file, false);
		}
	}
}
?>
