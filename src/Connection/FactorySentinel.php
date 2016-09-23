<?php

namespace Predis\Connection;

class FactorySentinel extends Factory
{
    /**
     * {@inheritdoc}
     */
    protected function prepareConnectionPassword(NodeConnectionInterface $connection, ParametersInterface $parameters)
    {
        // skipping authorisation for sentinel connect
    }

    /**
     * {@inheritdoc}
     */
    protected function prepareConnectionDatabase(NodeConnectionInterface $connection, ParametersInterface $parameters)
    {
        // skipping database selecting for sentinel connect
    }

}
