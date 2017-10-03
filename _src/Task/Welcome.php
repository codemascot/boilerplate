<?php # -*- coding: utf-8 -*-

namespace TheDramatistBoilerplate\Task;

use
	BrightNucleus\Boilerplate\Scripts\Task;

/**
 * Class Welcome
 *
 * @package TheDramatistBoilerplate\Task
 */
class Welcome extends Task\AbstractTask {

	/**
	 * Pints boilerplate logo
	 */
	public function complete() {

		$logo = <<<ASCI
  _____   _              ____                                       _     _         _   
 |_   _| | |__     ___  |  _ \   _ __    __ _   _ __ ___     __ _  | |_  (_)  ___  | |_ 
   | |   | '_ \   / _ \ | | | | | '__|  / _` | | '_ ` _ \   / _` | | __| | | / __| | __|
   | |   | | | | |  __/ | |_| | | |    | (_| | | | | | | | | (_| | | |_  | | \__ \ | |_ 
   |_|   |_| |_|  \___| |____/  |_|     \__,_| |_| |_| |_|  \__,_|  \__| |_| |___/  \__|
																							   
  ____            _   _                         _           _          
 | __ )    ___   (_) | |   ___   _ __   _ __   | |   __ _  | |_    ___ 
 |  _ \   / _ \  | | | |  / _ \ | '__| | '_ \  | |  / _` | | __|  / _ \
 | |_) | | (_) | | | | | |  __/ | |    | |_) | | | | (_| | | |_  |  __/
 |____/   \___/  |_| |_|  \___| |_|    | .__/  |_|  \__,_|  \__|  \___|
									   |_|
ASCI;

		$this->io->write( "<info>{$logo}</info>" );
	}

}