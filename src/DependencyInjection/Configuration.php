<?php

declare(strict_types=1);

namespace Endeavour\GroeigidsApiClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('groeigids_api_client');

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('api_key')->isRequired()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}