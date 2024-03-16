<?php
namespace endemik\V1\Rest\Plant;

class PlantResourceFactory
{
    public function __invoke($services)
    {
        return new PlantResource();
    }
}
