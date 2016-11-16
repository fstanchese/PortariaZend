<?php

namespace Portaria;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Portaria\Form\ModeloForm;
use Portaria\Form\UnidadeForm;
use Portaria\Form\MoradorForm;
use Portaria\Form\VeiculoForm;
use Portaria\Service\CorService;
use Portaria\Service\MarcaService;
use Portaria\Service\ModeloService;
use Portaria\Service\UnidadeTipoService;
use Portaria\Service\BlocoService;
use Portaria\Service\UnidadeService;
use Portaria\Service\MoradorService;
use Portaria\Service\MoradorTipoService;
use Portaria\Service\VeiculoService;


class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    // Add this method:
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
           		'Portaria\Form\VeiculoForm' => function($em){
            		return new VeiculoForm($em->get('Doctrine\ORM\EntityManager'));
           		},
                'Portaria\Service\CorService' => function($em){
                    return new CorService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\MarcaService' => function($em){
                	return new MarcaService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\ModeloService' => function($em){
                	return new ModeloService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\UnidadeTipoService' => function($em){
                	return new UnidadeTipoService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\MoradorTipoService' => function($em){
                	return new MoradorTipoService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\BlocoService' => function($em){
                	return new BlocoService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\UnidadeService' => function($em){
                	return new UnidadeService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\MoradorService' => function($em){
                	return new MoradorService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Service\VeiculoService' => function($em){
                	return new VeiculoService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Form\ModeloForm' => function($em){
                	return new ModeloForm($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Form\UnidadeForm' => function($em){
                	return new UnidadeForm($em->get('Doctrine\ORM\EntityManager'));
                },
                'Portaria\Form\MoradorForm' => function($em){
                	return new MoradorForm($em->get('Doctrine\ORM\EntityManager'));
                },
            )
        );
    }
}