<?php

namespace Nokaut\Bundle\ApiClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Get configuration
 *
 * @package DependencyInjection
 * @author Patryk Szlagowski <patryk.szlagowski@nokaut.pl>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('api_client', 'array');

        $rootNode
            ->children()
                ->scalarNode('key.private')->end()
                ->scalarNode('key.public')->end()
                ->scalarNode('baseUrl')->default('http://order-api.nokaut.pl/v1.0/')->end()
                ->scalarNode()->end()
        ;

        return $treeBuilder;
    }
}
