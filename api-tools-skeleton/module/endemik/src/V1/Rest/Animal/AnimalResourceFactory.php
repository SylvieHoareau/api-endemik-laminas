<?php
namespace endemik\V1\Rest\Animal;

class AnimalResourceFactory
{
    public function __invoke($services)
    {
        return new AnimalResource();
    }
}
