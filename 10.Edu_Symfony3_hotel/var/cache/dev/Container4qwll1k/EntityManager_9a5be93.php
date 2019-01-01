<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderb25fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6619c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfbfff = [
        
    ];

    public function getConnection()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getConnection', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getMetadataFactory', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getExpressionBuilder', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'beginTransaction', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getCache', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'transactional', array('func' => $func), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->transactional($func);
    }

    public function commit()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'commit', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->commit();
    }

    public function rollback()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'rollback', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getClassMetadata', array('className' => $className), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'createQuery', array('dql' => $dql), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'createNamedQuery', array('name' => $name), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'createQueryBuilder', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'flush', array('entity' => $entity), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'clear', array('entityName' => $entityName), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->clear($entityName);
    }

    public function close()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'close', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->close();
    }

    public function persist($entity)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'persist', array('entity' => $entity), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'remove', array('entity' => $entity), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'refresh', array('entity' => $entity), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'detach', array('entity' => $entity), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'merge', array('entity' => $entity), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'contains', array('entity' => $entity), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getEventManager', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getConfiguration', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'isOpen', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getUnitOfWork', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getProxyFactory', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'initializeObject', array('obj' => $obj), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'getFilters', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'isFiltersStateClean', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'hasFilters', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return $this->valueHolderb25fb->hasFilters();
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

        $instance->initializer6619c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb25fb) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb25fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb25fb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, '__get', ['name' => $name], $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        if (isset(self::$publicPropertiesfbfff[$name])) {
            return $this->valueHolderb25fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb25fb;

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

        $targetObject = $this->valueHolderb25fb;
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
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb25fb;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderb25fb;
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
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, '__isset', array('name' => $name), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb25fb;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb25fb;
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
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, '__unset', array('name' => $name), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb25fb;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb25fb;
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
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, '__clone', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        $this->valueHolderb25fb = clone $this->valueHolderb25fb;
    }

    public function __sleep()
    {
        $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, '__sleep', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;

        return array('valueHolderb25fb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer6619c = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer6619c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6619c && ($this->initializer6619c->__invoke($valueHolderb25fb, $this, 'initializeProxy', array(), $this->initializer6619c) || 1) && $this->valueHolderb25fb = $valueHolderb25fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb25fb;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderb25fb;
    }


}
