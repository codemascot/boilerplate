<?php # -*- coding: utf-8 -*-

namespace TheDramatistBoilerplate\Task;

use
	TheDramatistBoilerplate,
	BrightNucleus\Boilerplate\Scripts\Task,
	Composer\Util;

/**
 * Class FormatAutoloadNamespace
 *
 * @package TheDramatistBoilerplate\Task
 */
class FormatAutoloadNamespace extends Task\AbstractTask {

	/**
	 * Formats the provided namespace for usage in composer
	 * autoloader configuration
	 */
	public function complete() {

		$namespace = $this->getConfigKey( 'Placeholders', 'namespace' );
		$namespace_autoload = TheDramatistBoilerplate\SetupHelper::getAutoloadNamespace( $namespace[ 'value' ] );
		$this->config[ 'Placeholders' ][ 'namespace_autoload' ] = [
			'name'        => 'Autoload namespace',
			'description' => 'Namespace for composer autoload configuration',
			'value'       => $namespace_autoload,
		];
	}
}