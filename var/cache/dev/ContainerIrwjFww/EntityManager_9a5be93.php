<?php

namespace ContainerIrwjFww;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf8e35 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3f4f9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f873 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getConnection', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getMetadataFactory', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getExpressionBuilder', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'beginTransaction', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getCache', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'transactional', array('func' => $func), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'commit', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->commit();
    }

    public function rollback()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'rollback', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getClassMetadata', array('className' => $className), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'createQuery', array('dql' => $dql), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'createNamedQuery', array('name' => $name), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'createQueryBuilder', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'flush', array('entity' => $entity), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'clear', array('entityName' => $entityName), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->clear($entityName);
    }

    public function close()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'close', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->close();
    }

    public function persist($entity)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'persist', array('entity' => $entity), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'remove', array('entity' => $entity), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'refresh', array('entity' => $entity), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'detach', array('entity' => $entity), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'merge', array('entity' => $entity), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'contains', array('entity' => $entity), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getEventManager', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getConfiguration', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'isOpen', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getUnitOfWork', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getProxyFactory', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'initializeObject', array('obj' => $obj), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'getFilters', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'isFiltersStateClean', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'hasFilters', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return $this->valueHolderf8e35->hasFilters();
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

        $instance->initializer3f4f9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf8e35) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8e35 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf8e35->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, '__get', ['name' => $name], $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        if (isset(self::$publicProperties2f873[$name])) {
            return $this->valueHolderf8e35->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8e35;

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

        $targetObject = $this->valueHolderf8e35;
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
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8e35;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8e35;
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
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, '__isset', array('name' => $name), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8e35;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf8e35;
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
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, '__unset', array('name' => $name), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8e35;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf8e35;
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
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, '__clone', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        $this->valueHolderf8e35 = clone $this->valueHolderf8e35;
    }

    public function __sleep()
    {
        $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, '__sleep', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;

        return array('valueHolderf8e35');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3f4f9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3f4f9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3f4f9 && ($this->initializer3f4f9->__invoke($valueHolderf8e35, $this, 'initializeProxy', array(), $this->initializer3f4f9) || 1) && $this->valueHolderf8e35 = $valueHolderf8e35;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8e35;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8e35;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
