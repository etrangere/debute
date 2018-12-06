<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf4d9d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85529 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1681b = [
        
    ];

    public function getConnection()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getConnection', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getMetadataFactory', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getExpressionBuilder', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'beginTransaction', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getCache', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'transactional', array('func' => $func), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->transactional($func);
    }

    public function commit()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'commit', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->commit();
    }

    public function rollback()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'rollback', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getClassMetadata', array('className' => $className), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'createQuery', array('dql' => $dql), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'createNamedQuery', array('name' => $name), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'createQueryBuilder', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'flush', array('entity' => $entity), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'clear', array('entityName' => $entityName), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->clear($entityName);
    }

    public function close()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'close', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->close();
    }

    public function persist($entity)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'persist', array('entity' => $entity), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'remove', array('entity' => $entity), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'refresh', array('entity' => $entity), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'detach', array('entity' => $entity), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'merge', array('entity' => $entity), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'contains', array('entity' => $entity), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getEventManager', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getConfiguration', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'isOpen', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getUnitOfWork', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getProxyFactory', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'initializeObject', array('obj' => $obj), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'getFilters', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'isFiltersStateClean', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'hasFilters', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return $this->valueHolderf4d9d->hasFilters();
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

        $instance->initializer85529 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf4d9d) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf4d9d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf4d9d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, '__get', ['name' => $name], $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        if (isset(self::$publicProperties1681b[$name])) {
            return $this->valueHolderf4d9d->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4d9d;

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

        $targetObject = $this->valueHolderf4d9d;
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
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4d9d;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf4d9d;
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
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, '__isset', array('name' => $name), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4d9d;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf4d9d;
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
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, '__unset', array('name' => $name), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4d9d;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf4d9d;
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
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, '__clone', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        $this->valueHolderf4d9d = clone $this->valueHolderf4d9d;
    }

    public function __sleep()
    {
        $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, '__sleep', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;

        return array('valueHolderf4d9d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer85529 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer85529;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85529 && ($this->initializer85529->__invoke($valueHolderf4d9d, $this, 'initializeProxy', array(), $this->initializer85529) || 1) && $this->valueHolderf4d9d = $valueHolderf4d9d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf4d9d;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderf4d9d;
    }


}
