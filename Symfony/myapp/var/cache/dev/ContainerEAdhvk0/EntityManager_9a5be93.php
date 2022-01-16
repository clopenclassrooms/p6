<?php

namespace ContainerEAdhvk0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2e90d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2d4e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa2e76 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getConnection', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getMetadataFactory', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getExpressionBuilder', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'beginTransaction', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getCache', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'transactional', array('func' => $func), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->transactional($func);
    }

    public function commit()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'commit', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->commit();
    }

    public function rollback()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'rollback', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getClassMetadata', array('className' => $className), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'createQuery', array('dql' => $dql), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'createNamedQuery', array('name' => $name), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'createQueryBuilder', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'flush', array('entity' => $entity), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'clear', array('entityName' => $entityName), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->clear($entityName);
    }

    public function close()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'close', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->close();
    }

    public function persist($entity)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'persist', array('entity' => $entity), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'remove', array('entity' => $entity), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'refresh', array('entity' => $entity), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'detach', array('entity' => $entity), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'merge', array('entity' => $entity), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'contains', array('entity' => $entity), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getEventManager', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getConfiguration', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'isOpen', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getUnitOfWork', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getProxyFactory', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'initializeObject', array('obj' => $obj), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'getFilters', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'isFiltersStateClean', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'hasFilters', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return $this->valueHolder2e90d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2d4e2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2e90d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2e90d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2e90d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, '__get', ['name' => $name], $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        if (isset(self::$publicPropertiesa2e76[$name])) {
            return $this->valueHolder2e90d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e90d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e90d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e90d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e90d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, '__isset', array('name' => $name), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e90d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2e90d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, '__unset', array('name' => $name), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e90d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2e90d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, '__clone', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        $this->valueHolder2e90d = clone $this->valueHolder2e90d;
    }

    public function __sleep()
    {
        $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, '__sleep', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;

        return array('valueHolder2e90d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2d4e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2d4e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2d4e2 && ($this->initializer2d4e2->__invoke($valueHolder2e90d, $this, 'initializeProxy', array(), $this->initializer2d4e2) || 1) && $this->valueHolder2e90d = $valueHolder2e90d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e90d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e90d;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
