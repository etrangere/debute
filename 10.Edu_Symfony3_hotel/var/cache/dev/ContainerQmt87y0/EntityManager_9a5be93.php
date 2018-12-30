<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder864b0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9d76d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties54b32 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getConnection', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getMetadataFactory', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getExpressionBuilder', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'beginTransaction', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getCache', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'transactional', array('func' => $func), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->transactional($func);
    }

    public function commit()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'commit', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->commit();
    }

    public function rollback()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'rollback', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getClassMetadata', array('className' => $className), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'createQuery', array('dql' => $dql), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'createNamedQuery', array('name' => $name), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'createQueryBuilder', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'flush', array('entity' => $entity), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'clear', array('entityName' => $entityName), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->clear($entityName);
    }

    public function close()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'close', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->close();
    }

    public function persist($entity)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'persist', array('entity' => $entity), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'remove', array('entity' => $entity), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'refresh', array('entity' => $entity), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'detach', array('entity' => $entity), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'merge', array('entity' => $entity), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'contains', array('entity' => $entity), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getEventManager', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getConfiguration', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'isOpen', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getUnitOfWork', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getProxyFactory', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'initializeObject', array('obj' => $obj), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'getFilters', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'isFiltersStateClean', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'hasFilters', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return $this->valueHolder864b0->hasFilters();
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

        $instance->initializer9d76d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder864b0) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder864b0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder864b0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, '__get', ['name' => $name], $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        if (isset(self::$publicProperties54b32[$name])) {
            return $this->valueHolder864b0->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder864b0;

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

        $targetObject = $this->valueHolder864b0;
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
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder864b0;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder864b0;
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
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, '__isset', array('name' => $name), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder864b0;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder864b0;
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
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, '__unset', array('name' => $name), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder864b0;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder864b0;
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
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, '__clone', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        $this->valueHolder864b0 = clone $this->valueHolder864b0;
    }

    public function __sleep()
    {
        $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, '__sleep', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;

        return array('valueHolder864b0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer9d76d = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer9d76d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9d76d && ($this->initializer9d76d->__invoke($valueHolder864b0, $this, 'initializeProxy', array(), $this->initializer9d76d) || 1) && $this->valueHolder864b0 = $valueHolder864b0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder864b0;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder864b0;
    }


}
