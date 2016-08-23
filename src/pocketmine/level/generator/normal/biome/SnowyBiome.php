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

abstract class SnowyBiome extends NormalBiome{

	public function __construct(){
		$this->setGroundCover([
			Block::get(Block::SNOW_LAYER, 0),
			Block::get(Block::STAINED_CLAY, 9),
			Block::get(Block::STAINED_CLAY, 9),
			Block::get(Block::STAINED_CLAY, 9),
		]);
	}
}