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

use pocketmine\block\Block;

class MountainsBiome extends GrassyBiome{

	public function __construct(){
		parent::__construct();

		$this->setElevation(0, 127);

		$this->temperature = 2;
		$this->rainfall = 0;
		
				$this->setGroundCover([
			Block::get(Block::STAINED_CLAY, 2),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 0),
            Block::get(Block::STAINED_CLAY, 10),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 0),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 6),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 0),
			Block::get(Block::STAINED_CLAY, 4),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 0),
            Block::get(Block::STAINED_CLAY, 10),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 0),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 6),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 0),
			Block::get(Block::STAINED_CLAY, 4),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 0),
            Block::get(Block::STAINED_CLAY, 10),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 0),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 6),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 0),
			Block::get(Block::STAINED_CLAY, 4),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 7),
			Block::get(Block::STAINED_CLAY, 0),
            Block::get(Block::STAINED_CLAY, 10),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 0),
			Block::get(Block::STAINED_CLAY, 13),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 1),
			Block::get(Block::STAINED_CLAY, 6),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 14),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 11),
			Block::get(Block::STAINED_CLAY, 8),
			Block::get(Block::STAINED_CLAY, 0),
		]);
	}

	public function getName() : string{
		return "Mountains";
	}
}