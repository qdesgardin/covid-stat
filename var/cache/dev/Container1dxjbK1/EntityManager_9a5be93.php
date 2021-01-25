<?php

namespace Container1dxjbK1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderac5fc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer23d1b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb8f5e = [
        
    ];

    public function getConnection()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getConnection', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getMetadataFactory', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getExpressionBuilder', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'beginTransaction', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getCache', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'transactional', array('func' => $func), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->transactional($func);
    }

    public function commit()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'commit', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->commit();
    }

    public function rollback()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'rollback', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getClassMetadata', array('className' => $className), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'createQuery', array('dql' => $dql), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'createNamedQuery', array('name' => $name), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'createQueryBuilder', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'flush', array('entity' => $entity), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'clear', array('entityName' => $entityName), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->clear($entityName);
    }

    public function close()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'close', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->close();
    }

    public function persist($entity)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'persist', array('entity' => $entity), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'remove', array('entity' => $entity), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'refresh', array('entity' => $entity), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'detach', array('entity' => $entity), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'merge', array('entity' => $entity), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'contains', array('entity' => $entity), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getEventManager', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getConfiguration', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'isOpen', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getUnitOfWork', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getProxyFactory', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'initializeObject', array('obj' => $obj), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'getFilters', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'isFiltersStateClean', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'hasFilters', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return $this->valueHolderac5fc->hasFilters();
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

        $instance->initializer23d1b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderac5fc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderac5fc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderac5fc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, '__get', ['name' => $name], $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        if (isset(self::$publicPropertiesb8f5e[$name])) {
            return $this->valueHolderac5fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac5fc;

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

        $targetObject = $this->valueHolderac5fc;
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
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac5fc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderac5fc;
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
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, '__isset', array('name' => $name), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac5fc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderac5fc;
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
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, '__unset', array('name' => $name), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac5fc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderac5fc;
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
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, '__clone', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        $this->valueHolderac5fc = clone $this->valueHolderac5fc;
    }

    public function __sleep()
    {
        $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, '__sleep', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;

        return array('valueHolderac5fc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer23d1b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer23d1b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer23d1b && ($this->initializer23d1b->__invoke($valueHolderac5fc, $this, 'initializeProxy', array(), $this->initializer23d1b) || 1) && $this->valueHolderac5fc = $valueHolderac5fc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac5fc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac5fc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
