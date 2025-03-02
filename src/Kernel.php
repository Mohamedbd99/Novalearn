<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureContainer(ContainerConfigurator $container): void
    {
        // Chargez toutes les configurations de packages
        $container->import('../config/{packages}/*.yaml');
        $container->import('../config/{packages}/'.$this->environment.'/*.yaml');

        // Chargez vos services
        if (is_file($conf = $this->getProjectDir().'/config/services.yaml')) {
            $container->import('../config/services.yaml');
            $container->import('../config/{services}_'.$this->environment.'.yaml');
        } elseif (is_file($conf = $this->getProjectDir().'/config/services.php')) {
            (require $conf)($container->withPath($conf), $this);
        }
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        // Chargez les routes spécifiques à l'environnement
        $routes->import('../config/{routes}/'.$this->environment.'/*.yaml');
        // Chargez toutes les autres routes
        $routes->import('../config/{routes}/*.yaml');

        // Chargez éventuellement le fichier routes.yaml racine
        if (is_file($conf = $this->getProjectDir().'/config/routes.yaml')) {
            $routes->import('../config/routes.yaml');
        } elseif (is_file($conf = $this->getProjectDir().'/config/routes.php')) {
            (require $conf)($routes->withPath($conf), $this);
        }
    }
}
