<?php # -*- coding: utf-8 -*-

namespace TheDramatistBoilerplate\Task;

use
	BrightNucleus\Boilerplate\Scripts\Task,
	Composer\Util;

/**
 * Renames the assets files to {{package}}.*,
 *
 * @package TheDramatistBoilerplate\Task
 */
class SanitizeAssetsFiles extends Task\AbstractTask {

	/**
	 * Renames the plugin file to {{package}}.php,
	 * removes it, if the package is not of type wordpress-plugin
	 */
	public function complete() {

		$fs          = new Util\Filesystem;
		$base_dir    = $this->getConfigKey( 'BaseDir' );
		$type        = $this->getConfigKey( 'Placeholders', 'type' )[ 'value' ];
		$package     = $this->getConfigKey( 'Placeholders', 'package_key' )[ 'value' ];
		$css_file 	 = "{$base_dir}/assets/css/plugin.css";
		$js_file	 = "{$base_dir}/assets/js/plugin.js";

		if ( 'wordpress-plugin' === $type ) {

			$fs->copyThenRemove(
				$css_file,
				"{$base_dir}/assets/css/{$package}.css"
			);

			$fs->copyThenRemove(
				$js_file,
				"{$base_dir}/assets/js/{$package}.js"
			);

			return;
		}
	}
}