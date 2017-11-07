<?php # -*- coding: utf-8 -*-

namespace TheDramatistBoilerplate\Task;

use
	BrightNucleus\Boilerplate\Scripts\Task,
	Composer\Util;

/**
 * Class SanitizeLibraryFiles
 *
 * @package TheDramatistBoilerplate\Task
 */
class SanitizeLibraryFiles extends Task\AbstractTask {

	/**
	 * Remove asset directories if the package is of type
	 * project or library
	 */
	public function complete() {

		$type     = $this->getConfigKey( 'Placeholders', 'type' )[ 'value' ];
		$wp_types = [ 'wordpress-theme', 'wordpress-plugin' ];
		if ( in_array( $type, $wp_types ) ) {
			return;
		}

		$base_dir = $this->getConfigKey( 'BaseDir' );
		$fs       = new Util\Filesystem;
		$this->io->write( "Removing assets directories" );

		$fs->removeDirectory( "{$base_dir}/assets" );
		$fs->removeDirectory( "{$base_dir}/w-org-assets" );
		$fs->removeDirectory( "{$base_dir}/src/Assets" );

		$this->io->write( "Removing gruntfile.js and package.json" );

		$fs->remove( "{$base_dir}/gruntfile.js" );
		$fs->remove( "{$base_dir}/package.json" );

	}

}
