# Packetery/nette-config-loader
## Quickstart

This extension allows you to load config file according to current environment.
Typical use case is registering different services for production and environment
(e. g. using mocking services on development and using production services for production environment).    


### Installation

You can install the extension using this command

```sh
$ composer require packetery/nette-config-loader
```

and enable the extension using your neon config.

```yml
extensions:
	configLoader: Packetery\Nette\DI\ConfigLoaderExtension
```


### Configuration
1) Set current environment in ``config.local.neon``: 
```yml
configLoader:
	environment: development
```

2) Create new config file according to your environments ``app/config/config.ENVIRONMENT.neon``, e. g. ``app/config/config.development.neon``  
