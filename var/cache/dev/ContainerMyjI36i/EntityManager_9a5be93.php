<?php

namespace ContainerMyjI36i;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldered8b0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera28ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties17cc7 = [
        
    ];

    public function getConnection()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getConnection', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getMetadataFactory', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getExpressionBuilder', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'beginTransaction', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getCache', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getCache();
    }

    public function transactional($func)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'transactional', array('func' => $func), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->transactional($func);
    }

    public function commit()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'commit', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->commit();
    }

    public function rollback()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'rollback', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getClassMetadata', array('className' => $className), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'createQuery', array('dql' => $dql), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'createNamedQuery', array('name' => $name), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'createQueryBuilder', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'flush', array('entity' => $entity), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'clear', array('entityName' => $entityName), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->clear($entityName);
    }

    public function close()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'close', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->close();
    }

    public function persist($entity)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'persist', array('entity' => $entity), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'remove', array('entity' => $entity), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'refresh', array('entity' => $entity), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'detach', array('entity' => $entity), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'merge', array('entity' => $entity), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getRepository', array('entityName' => $entityName), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'contains', array('entity' => $entity), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getEventManager', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getConfiguration', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'isOpen', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getUnitOfWork', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getProxyFactory', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'initializeObject', array('obj' => $obj), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'getFilters', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'isFiltersStateClean', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'hasFilters', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return $this->valueHoldered8b0->hasFilters();
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

        $instance->initializera28ed = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldered8b0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldered8b0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldered8b0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, '__get', ['name' => $name], $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        if (isset(self::$publicProperties17cc7[$name])) {
            return $this->valueHoldered8b0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8b0;

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

        $targetObject = $this->valueHoldered8b0;
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
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8b0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldered8b0;
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
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, '__isset', array('name' => $name), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8b0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldered8b0;
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
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, '__unset', array('name' => $name), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered8b0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldered8b0;
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
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, '__clone', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        $this->valueHoldered8b0 = clone $this->valueHoldered8b0;
    }

    public function __sleep()
    {
        $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, '__sleep', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;

        return array('valueHoldered8b0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera28ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera28ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera28ed && ($this->initializera28ed->__invoke($valueHoldered8b0, $this, 'initializeProxy', array(), $this->initializera28ed) || 1) && $this->valueHoldered8b0 = $valueHoldered8b0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldered8b0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldered8b0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
