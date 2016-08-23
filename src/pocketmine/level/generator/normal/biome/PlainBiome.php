<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
 *  ____            _        _     _   _
 * |  _ \ ___   ___| | _____| |_  | |_(_) ___   _ __
 * | |_) / _ \ / __| |/ / _ \ __| |  _| |/ _ \ | '_ \
 * |  __/ (_) | (__|   <  __/ |_  | |_| | (_) || | | |
 * |_|   \___/ \___|_|\_\___|\__|  \__|_|\___/ |_| |_|
 *
 * Modified by @Pockettion
*/

namespace pocketmine\level\generator\normal\biome;

use pocketmine\level\generator\populator\TallGrass;
use pocketmine\level\generator\populator\LilyPad;
use pocketmine\level\generator\populator\WaterPit;
use pocketmine\block\Block;
use pocketmine\block\Flower as FlowerBlock;
use pocketmine\level\generator\populator\Flower;
use pocketmine\level\generator\populator\Sugarcane;
use pocketmine\level\generator\populator\Tree;
use pocketmine\block\Sapling;

class PlainBiome extends GrassyBiome{

	public function __construct(){
		parent::__construct();

		$sugarcane = new Sugarcane();                                
		$sugarcane->setBaseAmount(Block::GRASS, 0);          
		$tallGrass = new TallGrass();                              
		$tallGrass->setBaseAmount(Block::GRASS, 0);        
		$waterPit = new WaterPit();                              
		$waterPit->setBaseAmount(9999);                              
                                                             
		$flower = new Flower();                                        
		$flower->setBaseAmount(15);                        
		$flower->addType([Block::WHEAT_BLOCK, 4]);        
                                                         
		$this->addPopulator($sugarcane);                
		$this->addPopulator($tallGrass);               
		$this->addPopulator($flower);                 
		$this->addPopulator($waterPit);                            

		$this->setElevation(61, 80);

		$this->temperature = 0.05;
		$this->rainfall = 0.3;
		
		$trees = new Tree(Sapling::SPRUCE); 
		$trees->setBaseAmount(10);         
		$this->addPopulator($trees);      
		
		$this->setGroundCover([
			Block::get(Block::GRASS, 0),
			Block::get(Block::DIRT, 0),
			Block::get(Block::DIRT, 0),
			Block::get(Block::DIRT, 0),
		]);
	}

	public function getName() : string{
		return "Plains";
	}
}
