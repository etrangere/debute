<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.my_markdown_cache' shared service.

return $this->services['doctrine_cache.providers.my_markdown_cache'] = new \Doctrine\Common\Cache\FilesystemCache('/tmp/doctrine_cache', NULL, 2);