<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_snappy.pdf' shared service.

$this->services['knp_snappy.pdf'] = $instance = new \Knp\Snappy\Pdf('/usr/local/bin/wkhtmltopdf', $this->parameters['knp_snappy.pdf.options'], array());

$instance->setLogger(${($_ = isset($this->services['monolog.logger.snappy']) ? $this->services['monolog.logger.snappy'] : $this->load(__DIR__.'/getMonolog_Logger_SnappyService.php')) && false ?: '_'});
$instance->setTemporaryFolder($this->targetDirs[0]);

return $instance;
