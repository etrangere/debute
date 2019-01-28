<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf6e3d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbd8f3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbb283 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getConnection', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getMetadataFactory', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getExpressionBuilder', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'beginTransaction', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getCache', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'transactional', array('func' => $func), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->transactional($func);
    }

    public function commit()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'commit', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->commit();
    }

    public function rollback()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'rollback', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getClassMetadata', array('className' => $className), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'createQuery', array('dql' => $dql), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'createNamedQuery', array('name' => $name), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'createQueryBuilder', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'flush', array('entity' => $entity), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'clear', array('entityName' => $entityName), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->clear($entityName);
    }

    public function close()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'close', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->close();
    }

    public function persist($entity)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'persist', array('entity' => $entity), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'remove', array('entity' => $entity), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'refresh', array('entity' => $entity), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'detach', array('entity' => $entity), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'merge', array('entity' => $entity), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'contains', array('entity' => $entity), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getEventManager', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getConfiguration', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'isOpen', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getUnitOfWork', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getProxyFactory', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'initializeObject', array('obj' => $obj), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'getFilters', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'isFiltersStateClean', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'hasFilters', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return $this->valueHolderf6e3d->hasFilters();
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

        $instance->initializerbd8f3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf6e3d) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf6e3d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf6e3d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, '__get', ['name' => $name], $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        if (isset(self::$publicPropertiesbb283[$name])) {
            return $this->valueHolderf6e3d->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6e3d;

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

        $targetObject = $this->valueHolderf6e3d;
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
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6e3d;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf6e3d;
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
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, '__isset', array('name' => $name), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6e3d;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf6e3d;
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
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, '__unset', array('name' => $name), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6e3d;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf6e3d;
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
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, '__clone', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        $this->valueHolderf6e3d = clone $this->valueHolderf6e3d;
    }

    public function __sleep()
    {
        $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, '__sleep', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;

        return array('valueHolderf6e3d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerbd8f3 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializerbd8f3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbd8f3 && ($this->initializerbd8f3->__invoke($valueHolderf6e3d, $this, 'initializeProxy', array(), $this->initializerbd8f3) || 1) && $this->valueHolderf6e3d = $valueHolderf6e3d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf6e3d;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderf6e3d;
    }


}
