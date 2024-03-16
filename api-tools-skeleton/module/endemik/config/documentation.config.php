<?php
return [
    'endemik\\V1\\Rest\\Animal\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/animal"
       },
       "first": {
           "href": "/animal?page={page}"
       },
       "prev": {
           "href": "/animal?page={page}"
       },
       "next": {
           "href": "/animal?page={page}"
       },
       "last": {
           "href": "/animal?page={page}"
       }
   }
   "_embedded": {
       "animal": [
           {
               "_links": {
                   "self": {
                       "href": "/animal[/:animal_id]"
                   }
               }
              "common-name": "",
              "scientific-name": "",
              "image": "",
              "description": "",
              "control-program": ""
           }
       ]
   }
}',
                'description' => '/animal',
            ],
            'POST' => [
                'request' => '{
   "common-name": "",
   "scientific-name": "",
   "image": "",
   "description": "",
   "control-program": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/animal[/:animal_id]"
       }
   }
   "common-name": "",
   "scientific-name": "",
   "image": "",
   "description": "",
   "control-program": ""
}',
                'description' => '/animal[/:animal_id]',
            ],
            'description' => \endemik\V1\Rest\Animal\AnimalCollection::class,
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/animal[/:animal_id]"
       }
   }
   "common-name": "",
   "scientific-name": "",
   "image": "",
   "description": "",
   "control-program": ""
}',
                'description' => '/animal',
            ],
            'PUT' => [
                'request' => '{
   "common-name": "",
   "scientific-name": "",
   "image": "",
   "description": "",
   "control-program": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/animal[/:animal_id]"
       }
   }
   "common-name": "",
   "scientific-name": "",
   "image": "",
   "description": "",
   "control-program": ""
}',
                'description' => '/animal[/:animal_id]',
            ],
            'DELETE' => [
                'request' => '{
   "common-name": "",
   "scientific-name": "",
   "image": "",
   "description": "",
   "control-program": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/animal[/:animal_id]"
       }
   }
   "common-name": "",
   "scientific-name": "",
   "image": "",
   "description": "",
   "control-program": ""
}',
                'description' => '/animal[/:animal_id]',
            ],
            'description' => \endemik\V1\Rest\Animal\AnimalEntity::class,
        ],
        'description' => 'Animal',
    ],
    'endemik\\V1\\Rest\\Plant\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/plant"
       },
       "first": {
           "href": "/plant?page={page}"
       },
       "prev": {
           "href": "/plant?page={page}"
       },
       "next": {
           "href": "/plant?page={page}"
       },
       "last": {
           "href": "/plant?page={page}"
       }
   }
   "_embedded": {
       "plant": [
           {
               "_links": {
                   "self": {
                       "href": "/plant[/:plant_id]"
                   }
               }
              "common_name": "Usual name of the plant",
              "scientific_name": "Scientific name of the plant",
              "image": "Picture of the plant",
              "description": "Long description of the plant",
              "control_program": "type of program adopted to control plant proliferation"
           }
       ]
   }
}',
                'description' => '/plant',
            ],
            'POST' => [
                'request' => '{
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/plant[/:plant_id]"
       }
   }
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'description' => '/plant[/:plant_id]',
            ],
            'description' => \endemik\V1\Rest\Plant\PlantCollection::class,
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/plant[/:plant_id]"
       }
   }
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'description' => '/plant',
            ],
            'PUT' => [
                'request' => '{
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/plant[/:plant_id]"
       }
   }
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'description' => '/plant[/:plant_id]',
            ],
            'DELETE' => [
                'request' => '{
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/plant[/:plant_id]"
       }
   }
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'description' => '/plant[/:plant_id]',
            ],
            'description' => \endemik\V1\Rest\Plant\PlantEntity::class,
            'PATCH' => [
                'description' => '/plant[/:plant_id]',
                'request' => '{
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/plant[/:plant_id]"
       }
   }
   "common_name": "Usual name of the plant",
   "scientific_name": "Scientific name of the plant",
   "image": "Picture of the plant",
   "description": "Long description of the plant",
   "control_program": "type of program adopted to control plant proliferation"
}',
            ],
        ],
        'description' => 'Plant',
    ],
];
