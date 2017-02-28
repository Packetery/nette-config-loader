<?php
namespace Packetery\Nette\DI;

use Nette\DI\Extensions\ExtensionsExtension;

class ConfigLoaderExtension extends ExtensionsExtension {
	private $defaults = [
		'environment' => NULL,
		'configDir' => '%appDir%/config',
	];

	public function loadConfiguration() {
		$config = $this->getConfig($this->defaults);
		if(!is_dir($config['configDir'])) {
			throw new ConfigDirectoryDoesNotExistException('Cannot open config directory "' . $config['configDir'] . '".');
		}

		if(!$config['environment']) {
			throw new EnvironmentNotSetException("Missing the environment parameter in config file.");
		}

		$this->compiler->loadConfig($config['configDir'] . '/config.' . $config['environment'] . '.neon');
	}
}