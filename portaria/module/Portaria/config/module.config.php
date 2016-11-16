<?php

namespace Portaria;

return array(
    'controllers' => array(
        'invokables' => array(
            'Portaria\Controller\Cor' => 'Portaria\Controller\CorController',
			'Portaria\Controller\Marca' => 'Portaria\Controller\MarcaController',
        	'Portaria\Controller\Modelo' => 'Portaria\Controller\ModeloController',
        	'Portaria\Controller\UnidadeTipo' => 'Portaria\Controller\UnidadeTipoController',
       		'Portaria\Controller\MoradorTipo' => 'Portaria\Controller\MoradorTipoController',  
			'Portaria\Controller\Bloco' => 'Portaria\Controller\BlocoController', 
       		'Portaria\Controller\Unidade' => 'Portaria\Controller\UnidadeController', 
        	'Portaria\Controller\Morador' => 'Portaria\Controller\MoradorController',    
        	'Portaria\Controller\Veiculo' => 'Portaria\Controller\VeiculoController',        		
        ),
    ),
    'router' => array(
        'routes' => array(
            'cor' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/cor[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Portaria\Controller\Cor',
                        'action'     => 'index',
                    ),
                ),
            ),
        	'modelo' => array(
       				'type'    => 'segment',
       				'options' => array(
       						'route'    => '/modelo[/:action][/:id]',
       						'constraints' => array(
        							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        							'id'     => '[0-9]*',
        					),
        					'defaults' => array(
        							'controller' => 'Portaria\Controller\Modelo',
        							'action'     => 'index',
        					),
        			),
        	),
			'marca' => array(
				'type'    => 'segment',
        		'options' => array(
					'route'    => '/marca[/:action][/:id]',
        			'constraints' => array(
        				'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        				'id'     => '[0-9]*',
        			),
        			'defaults' => array(
        				'controller' => 'Portaria\Controller\Marca',
        				'action'     => 'index',
        			),
        		),
        	), 
     		'unidadetipo' => array(
     				'type'    => 'segment',
        			'options' => array(
        					'route'    => '/unidadetipo[/:action][/:id]',
        					'constraints' => array(
        							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        							'id'     => '[0-9]*',
        					),
        					'defaults' => array(
        							'controller' => 'Portaria\Controller\UnidadeTipo',
        							'action'     => 'index',
        					),
        			),
        	),
       		'moradortipo' => array(
        			'type'    => 'segment',
        			'options' => array(
        					'route'    => '/moradortipo[/:action][/:id]',
        					'constraints' => array(
        							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        							'id'     => '[0-9]*',
        					),
        					'defaults' => array(
        							'controller' => 'Portaria\Controller\MoradorTipo',
        							'action'     => 'index',
        					),
        			),
        	),
        	'bloco' => array(
        			'type'    => 'segment',
        			'options' => array(
        					'route'    => '/bloco[/:action][/:id]',
        					'constraints' => array(
        							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        							'id'     => '[0-9]*',
        					),
        					'defaults' => array(
        							'controller' => 'Portaria\Controller\Bloco',
        							'action'     => 'index',
        					),
        			),
        	),
       		'unidade' => array(
       				'type'    => 'segment',
        			'options' => array(
        					'route'    => '/unidade[/:action][/:id]',
        					'constraints' => array(
        							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        							'id'     => '[0-9]*',
        					),
        					'defaults' => array(
        							'controller' => 'Portaria\Controller\Unidade',
        							'action'     => 'index',
        					),
        			),
        	),
        	'morador' => array(
        			'type'    => 'segment',
        			'options' => array(
        					'route'    => '/morador[/:action][/:id]',
        					'constraints' => array(
        							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        							'id'     => '[0-9]*',
        					),
        					'defaults' => array(
        							'controller' => 'Portaria\Controller\Morador',
        							'action'     => 'index',
        					),
        			),
        	),
        	'veiculo' => array(
        			'type'    => 'segment',
        			'options' => array(
        					'route'    => '/veiculo[/:action][/:id]',
        					'constraints' => array(
        							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        							'id'     => '[0-9]*',
        					),
        					'defaults' => array(
        							'controller' => 'Portaria\Controller\Veiculo',
        							'action'     => 'index',
        					),
        			),
        	),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'portaria' => __DIR__ . '/../view',
        ),
    ),
	'doctrine' => array(
			'driver' => array(
					__NAMESPACE__ . '_driver' => array(
							'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
							'cache' => 'array',
							'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
					),
					'orm_default' => array(
							'drivers' => array(
									__NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
							),
					),
			),
	),
);