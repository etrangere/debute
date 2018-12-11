<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderecbee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer02e19 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5ff27 = [
        
    ];

    public function getConnection()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getConnection', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getMetadataFactory', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getExpressionBuilder', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'beginTransaction', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getCache', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'transactional', array('func' => $func), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->transactional($func);
    }

    public function commit()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'commit', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->commit();
    }

    public function rollback()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'rollback', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getClassMetadata', array('className' => $className), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'createQuery', array('dql' => $dql), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'createNamedQuery', array('name' => $name), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'createQueryBuilder', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'flush', array('entity' => $entity), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'clear', array('entityName' => $entityName), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->clear($entityName);
    }

    public function close()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'close', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->close();
    }

    public function persist($entity)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'persist', array('entity' => $entity), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'remove', array('entity' => $entity), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'refresh', array('entity' => $entity), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'detach', array('entity' => $entity), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'merge', array('entity' => $entity), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'contains', array('entity' => $entity), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getEventManager', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getConfiguration', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'isOpen', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getUnitOfWork', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getProxyFactory', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'initializeObject', array('obj' => $obj), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'getFilters', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'isFiltersStateClean', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'hasFilters', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return $this->valueHolderecbee->hasFilters();
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

        $instance->initializer02e19 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderecbee) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderecbee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderecbee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, '__get', ['name' => $name], $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        if (isset(self::$publicProperties5ff27[$name])) {
            return $this->valueHolderecbee->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecbee;

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

        $targetObject = $this->valueHolderecbee;
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
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecbee;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderecbee;
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
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, '__isset', array('name' => $name), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecbee;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderecbee;
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
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, '__unset', array('name' => $name), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderecbee;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderecbee;
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
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, '__clone', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        $this->valueHolderecbee = clone $this->valueHolderecbee;
    }

    public function __sleep()
    {
        $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, '__sleep', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;

        return array('valueHolderecbee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer02e19 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer02e19;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer02e19 && ($this->initializer02e19->__invoke($valueHolderecbee, $this, 'initializeProxy', array(), $this->initializer02e19) || 1) && $this->valueHolderecbee = $valueHolderecbee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderecbee;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderecbee;
    }


}
