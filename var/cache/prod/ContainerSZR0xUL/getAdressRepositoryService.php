<?php

namespace ContainerSZR0xUL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdressRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AdressRepository' shared autowired service.
     *
     * @return \App\Repository\AdressRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AdressRepository'] = new \App\Repository\AdressRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
