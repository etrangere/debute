<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder727bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer48d2e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties83efb = [
        
    ];

    public function getConnection()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getConnection', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getMetadataFactory', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getExpressionBuilder', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'beginTransaction', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getCache', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'transactional', array('func' => $func), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->transactional($func);
    }

    public function commit()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'commit', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->commit();
    }

    public function rollback()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'rollback', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getClassMetadata', array('className' => $className), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'createQuery', array('dql' => $dql), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'createNamedQuery', array('name' => $name), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'createQueryBuilder', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'flush', array('entity' => $entity), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'clear', array('entityName' => $entityName), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->clear($entityName);
    }

    public function close()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'close', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->close();
    }

    public function persist($entity)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'persist', array('entity' => $entity), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'remove', array('entity' => $entity), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'refresh', array('entity' => $entity), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'detach', array('entity' => $entity), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'merge', array('entity' => $entity), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'contains', array('entity' => $entity), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getEventManager', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getConfiguration', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'isOpen', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getUnitOfWork', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getProxyFactory', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'initializeObject', array('obj' => $obj), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'getFilters', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'isFiltersStateClean', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'hasFilters', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return $this->valueHolder727bc->hasFilters();
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

        $instance->initializer48d2e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder727bc) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder727bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder727bc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, '__get', ['name' => $name], $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        if (isset(self::$publicProperties83efb[$name])) {
            return $this->valueHolder727bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder727bc;

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

        $targetObject = $this->valueHolder727bc;
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
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder727bc;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder727bc;
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
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, '__isset', array('name' => $name), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder727bc;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder727bc;
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
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, '__unset', array('name' => $name), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder727bc;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder727bc;
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
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, '__clone', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        $this->valueHolder727bc = clone $this->valueHolder727bc;
    }

    public function __sleep()
    {
        $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, '__sleep', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;

        return array('valueHolder727bc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer48d2e = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer48d2e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer48d2e && ($this->initializer48d2e->__invoke($valueHolder727bc, $this, 'initializeProxy', array(), $this->initializer48d2e) || 1) && $this->valueHolder727bc = $valueHolder727bc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder727bc;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder727bc;
    }


}
