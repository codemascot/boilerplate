<?php # -*- coding: utf-8 -*-

namespace TheDramatistBoilerplate\Task;

use
	BrightNucleus\Boilerplate\Scripts\Task,
	Composer\Util;

/**
 * Remove style.css and functions.php if the package type
 * is not a wordpress-theme
 *
 * @package TheDramatistBoilerplate\Task
 */
class SanitizeThemeFiles extends Task\AbstractTask {

	/**
	 * Remove style.css and functions.php if the package type
	 * is not a wordpress-theme
	 */
	public function complete() {
		$fs       = new Util\Filesystem;
		$base_dir = $this->getConfigKey( 'BaseDir' );
		$type = $this->getConfigKey( 'Placeholders', 'type' )[ 'value' ];
		if ( 'wordpress-theme' === $type ) {
			$fs->copyThenRemove( "{$base_dir}/theme-files/", $base_dir );
			return;
		}

		$this->io->write( "Removing theme files" );
		$fs->remove( "{$base_dir}/theme-files" );
		$fs->remove( "{$base_dir}/style.css" );
		$fs->remove( "{$base_dir}/functions.php" );
	}
}
