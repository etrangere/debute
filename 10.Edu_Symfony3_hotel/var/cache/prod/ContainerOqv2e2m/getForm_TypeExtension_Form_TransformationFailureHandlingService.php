<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.form.transformation_failure_handling' shared service.

return $this->services['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->load('getTranslatorService.php')) && false ?: '_'});
