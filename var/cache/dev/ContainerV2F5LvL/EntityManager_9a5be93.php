<?php

namespace ContainerV2F5LvL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3d0b2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7178e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties67161 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getConnection', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getMetadataFactory', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getExpressionBuilder', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'beginTransaction', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getCache', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'transactional', array('func' => $func), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->transactional($func);
    }

    public function commit()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'commit', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->commit();
    }

    public function rollback()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'rollback', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getClassMetadata', array('className' => $className), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'createQuery', array('dql' => $dql), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'createNamedQuery', array('name' => $name), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'createQueryBuilder', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'flush', array('entity' => $entity), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'clear', array('entityName' => $entityName), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->clear($entityName);
    }

    public function close()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'close', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->close();
    }

    public function persist($entity)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'persist', array('entity' => $entity), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'remove', array('entity' => $entity), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'refresh', array('entity' => $entity), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'detach', array('entity' => $entity), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'merge', array('entity' => $entity), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'contains', array('entity' => $entity), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getEventManager', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getConfiguration', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'isOpen', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getUnitOfWork', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getProxyFactory', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'initializeObject', array('obj' => $obj), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'getFilters', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'isFiltersStateClean', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'hasFilters', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return $this->valueHolder3d0b2->hasFilters();
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

        $instance->initializer7178e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3d0b2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3d0b2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3d0b2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, '__get', ['name' => $name], $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        if (isset(self::$publicProperties67161[$name])) {
            return $this->valueHolder3d0b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d0b2;

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

        $targetObject = $this->valueHolder3d0b2;
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
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d0b2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3d0b2;
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
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, '__isset', array('name' => $name), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d0b2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3d0b2;
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
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, '__unset', array('name' => $name), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d0b2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3d0b2;
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
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, '__clone', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        $this->valueHolder3d0b2 = clone $this->valueHolder3d0b2;
    }

    public function __sleep()
    {
        $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, '__sleep', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;

        return array('valueHolder3d0b2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7178e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7178e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7178e && ($this->initializer7178e->__invoke($valueHolder3d0b2, $this, 'initializeProxy', array(), $this->initializer7178e) || 1) && $this->valueHolder3d0b2 = $valueHolder3d0b2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3d0b2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3d0b2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
