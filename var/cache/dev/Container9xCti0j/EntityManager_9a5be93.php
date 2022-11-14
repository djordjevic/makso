<?php

namespace Container9xCti0j;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereb78e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer18d30 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties74670 = [
        
    ];

    public function getConnection()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getConnection', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getMetadataFactory', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getExpressionBuilder', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'beginTransaction', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getCache', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'transactional', array('func' => $func), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'commit', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->commit();
    }

    public function rollback()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'rollback', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getClassMetadata', array('className' => $className), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'createQuery', array('dql' => $dql), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'createNamedQuery', array('name' => $name), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'createQueryBuilder', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'flush', array('entity' => $entity), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'clear', array('entityName' => $entityName), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->clear($entityName);
    }

    public function close()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'close', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->close();
    }

    public function persist($entity)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'persist', array('entity' => $entity), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'remove', array('entity' => $entity), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'refresh', array('entity' => $entity), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'detach', array('entity' => $entity), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'merge', array('entity' => $entity), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'contains', array('entity' => $entity), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getEventManager', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getConfiguration', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'isOpen', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getUnitOfWork', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getProxyFactory', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'initializeObject', array('obj' => $obj), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'getFilters', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'isFiltersStateClean', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'hasFilters', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return $this->valueHoldereb78e->hasFilters();
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

        $instance->initializer18d30 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldereb78e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereb78e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereb78e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__get', ['name' => $name], $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        if (isset(self::$publicProperties74670[$name])) {
            return $this->valueHoldereb78e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

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

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__isset', array('name' => $name), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__unset', array('name' => $name), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__clone', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $this->valueHoldereb78e = clone $this->valueHoldereb78e;
    }

    public function __sleep()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__sleep', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return array('valueHoldereb78e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer18d30 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer18d30;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'initializeProxy', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb78e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb78e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
