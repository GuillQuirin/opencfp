<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger.console' shared service.

$this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

$instance->pushHandler(${($_ = isset($this->services['monolog.handler.opencfp']) ? $this->services['monolog.handler.opencfp'] : $this->getMonolog_Handler_OpencfpService()) && false ?: '_'});

return $instance;