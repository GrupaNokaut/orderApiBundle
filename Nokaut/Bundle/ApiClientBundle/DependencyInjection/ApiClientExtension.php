<?php

namespace Nokaut\Bundle\ApiClientBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Set configuration to container
 *
 * @package DependencyInjection
 * @author Patryk Szlagowski <patryk.szlagowski@nokaut.pl>
 */
class ApiClientExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('nokaut.api.key.public', $config['key.public']);
        $container->setParameter('nokaut.api.key.private', $config['key.private']);
        $container->setParameter('nokaut.api.baseUrl', $config['baseUrl']);
    }
}
