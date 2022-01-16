<?php

namespace ContainerGIIiS0s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MPAO_FxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mPAO.Fx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mPAO.Fx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'trickGroupRepository' => ['privates', 'App\\Repository\\TrickGroupRepository', 'getTrickGroupRepositoryService', true],
            'trickRepository' => ['privates', 'App\\Repository\\TrickRepository', 'getTrickRepositoryService', true],
        ], [
            'entityManagerInterface' => '?',
            'slugger' => '?',
            'trickGroupRepository' => 'App\\Repository\\TrickGroupRepository',
            'trickRepository' => 'App\\Repository\\TrickRepository',
        ]);
    }
}
