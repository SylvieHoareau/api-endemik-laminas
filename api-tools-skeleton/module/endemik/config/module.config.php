<?php
return [
    'service_manager' => [
        'factories' => [
            \endemik\V1\Rest\Plant\PlantResource::class => \endemik\V1\Rest\Plant\PlantResourceFactory::class,
            \endemik\V1\Rest\Animal\AnimalResource::class => \endemik\V1\Rest\Animal\AnimalResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'endemik.rest.plant' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/plant[/:plant_id]',
                    'defaults' => [
                        'controller' => 'endemik\\V1\\Rest\\Plant\\Controller',
                    ],
                ],
            ],
            'endemik.rest.animal' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/animal[/:animal_id]',
                    'defaults' => [
                        'controller' => 'endemik\\V1\\Rest\\Animal\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'endemik.rest.plant',
            1 => 'endemik.rest.animal',
        ],
    ],
    'api-tools-rest' => [
        'endemik\\V1\\Rest\\Plant\\Controller' => [
            'listener' => \endemik\V1\Rest\Plant\PlantResource::class,
            'route_name' => 'endemik.rest.plant',
            'route_identifier_name' => 'plant_id',
            'collection_name' => 'plant',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \endemik\V1\Rest\Plant\PlantEntity::class,
            'collection_class' => \endemik\V1\Rest\Plant\PlantCollection::class,
            'service_name' => 'Plant',
        ],
        'endemik\\V1\\Rest\\Animal\\Controller' => [
            'listener' => \endemik\V1\Rest\Animal\AnimalResource::class,
            'route_name' => 'endemik.rest.animal',
            'route_identifier_name' => 'animal_id',
            'collection_name' => 'animal',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \endemik\V1\Rest\Animal\AnimalEntity::class,
            'collection_class' => \endemik\V1\Rest\Animal\AnimalCollection::class,
            'service_name' => 'Animal',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'endemik\\V1\\Rest\\Plant\\Controller' => 'HalJson',
            'endemik\\V1\\Rest\\Animal\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'endemik\\V1\\Rest\\Plant\\Controller' => [
                0 => 'application/vnd.endemik.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'endemik\\V1\\Rest\\Animal\\Controller' => [
                0 => 'application/vnd.endemik.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'endemik\\V1\\Rest\\Plant\\Controller' => [
                0 => 'application/vnd.endemik.v1+json',
                1 => 'application/json',
            ],
            'endemik\\V1\\Rest\\Animal\\Controller' => [
                0 => 'application/vnd.endemik.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \endemik\V1\Rest\Plant\PlantEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'endemik.rest.plant',
                'route_identifier_name' => 'plant_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \endemik\V1\Rest\Plant\PlantCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'endemik.rest.plant',
                'route_identifier_name' => 'plant_id',
                'is_collection' => true,
            ],
            \endemik\V1\Rest\Animal\AnimalEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'endemik.rest.animal',
                'route_identifier_name' => 'animal_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \endemik\V1\Rest\Animal\AnimalCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'endemik.rest.animal',
                'route_identifier_name' => 'animal_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'endemik\\V1\\Rest\\Plant\\Controller' => [
            'input_filter' => 'endemik\\V1\\Rest\\Plant\\Validator',
        ],
        'endemik\\V1\\Rest\\Animal\\Controller' => [
            'input_filter' => 'endemik\\V1\\Rest\\Animal\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'endemik\\V1\\Rest\\Plant\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'common_name',
                'description' => 'Usual name of the plant',
                'field_type' => 'string',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'scientific_name',
                'description' => 'Scientific name of the plant',
                'field_type' => 'string',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'image',
                'description' => 'Picture of the plant',
                'field_type' => 'string',
                'type' => \Laminas\InputFilter\FileInput::class,
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'description',
                'description' => 'Long description of the plant',
                'field_type' => 'text',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'control_program',
                'description' => 'type of program adopted to control plant proliferation',
                'field_type' => 'string',
            ],
        ],
        'endemik\\V1\\Rest\\Animal\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'common-name',
                'field_type' => 'string',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'scientific-name',
                'field_type' => 'string',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'image',
                'type' => \Laminas\InputFilter\FileInput::class,
                'field_type' => 'string',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'description',
                'field_type' => 'text',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'control-program',
                'field_type' => 'text',
            ],
        ],
    ],
];
