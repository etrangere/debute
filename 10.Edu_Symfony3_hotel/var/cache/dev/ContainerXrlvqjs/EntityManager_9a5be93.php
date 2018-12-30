<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6b640 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf85c1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties802f5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getConnection', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getMetadataFactory', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getExpressionBuilder', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'beginTransaction', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getCache', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'transactional', array('func' => $func), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->transactional($func);
    }

    public function commit()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'commit', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->commit();
    }

    public function rollback()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'rollback', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getClassMetadata', array('className' => $className), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'createQuery', array('dql' => $dql), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'createNamedQuery', array('name' => $name), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'createQueryBuilder', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'flush', array('entity' => $entity), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'clear', array('entityName' => $entityName), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->clear($entityName);
    }

    public function close()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'close', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->close();
    }

    public function persist($entity)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'persist', array('entity' => $entity), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'remove', array('entity' => $entity), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'refresh', array('entity' => $entity), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'detach', array('entity' => $entity), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'merge', array('entity' => $entity), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'contains', array('entity' => $entity), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getEventManager', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getConfiguration', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'isOpen', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getUnitOfWork', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getProxyFactory', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'initializeObject', array('obj' => $obj), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'getFilters', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'isFiltersStateClean', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'hasFilters', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return $this->valueHolder6b640->hasFilters();
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

        $instance->initializerf85c1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6b640) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6b640 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6b640->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, '__get', ['name' => $name], $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        if (isset(self::$publicProperties802f5[$name])) {
            return $this->valueHolder6b640->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b640;

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

        $targetObject = $this->valueHolder6b640;
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
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b640;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6b640;
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
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, '__isset', array('name' => $name), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b640;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6b640;
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
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, '__unset', array('name' => $name), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b640;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6b640;
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
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, '__clone', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        $this->valueHolder6b640 = clone $this->valueHolder6b640;
    }

    public function __sleep()
    {
        $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, '__sleep', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;

        return array('valueHolder6b640');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerf85c1 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializerf85c1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf85c1 && ($this->initializerf85c1->__invoke($valueHolder6b640, $this, 'initializeProxy', array(), $this->initializerf85c1) || 1) && $this->valueHolder6b640 = $valueHolder6b640;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b640;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder6b640;
    }


}
