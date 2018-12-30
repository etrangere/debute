<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder161f1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4a81 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1868e = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getConnection', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getMetadataFactory', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getExpressionBuilder', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'beginTransaction', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getCache', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'transactional', array('func' => $func), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->transactional($func);
    }

    public function commit()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'commit', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->commit();
    }

    public function rollback()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'rollback', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'createQuery', array('dql' => $dql), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'createQueryBuilder', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'flush', array('entity' => $entity), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'clear', array('entityName' => $entityName), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'close', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->close();
    }

    public function persist($entity)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'persist', array('entity' => $entity), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'remove', array('entity' => $entity), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'refresh', array('entity' => $entity), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'detach', array('entity' => $entity), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'merge', array('entity' => $entity), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'contains', array('entity' => $entity), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getEventManager', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getConfiguration', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'isOpen', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getUnitOfWork', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getProxyFactory', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'getFilters', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'isFiltersStateClean', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'hasFilters', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return $this->valueHolder161f1->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc4a81 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder161f1) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder161f1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder161f1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, '__get', ['name' => $name], $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        if (isset(self::$publicProperties1868e[$name])) {
            return $this->valueHolder161f1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder161f1;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder161f1;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder161f1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder161f1;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, '__isset', array('name' => $name), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder161f1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder161f1;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, '__unset', array('name' => $name), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder161f1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder161f1;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, '__clone', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        $this->valueHolder161f1 = clone $this->valueHolder161f1;
    }

    public function __sleep()
    {
        $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, '__sleep', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;

        return array('valueHolder161f1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerc4a81 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializerc4a81;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4a81 && ($this->initializerc4a81->__invoke($valueHolder161f1, $this, 'initializeProxy', array(), $this->initializerc4a81) || 1) && $this->valueHolder161f1 = $valueHolder161f1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder161f1;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder161f1;
    }


}
