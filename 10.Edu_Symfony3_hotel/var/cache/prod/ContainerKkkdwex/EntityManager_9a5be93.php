<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder88cb4 = null;
    private $initializer03dad = null;
    private static $publicPropertiesee7f8 = [
        
    ];
    public function getConnection()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getConnection', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getMetadataFactory', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getExpressionBuilder', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'beginTransaction', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getCache', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getCache();
    }
    public function transactional($func)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'transactional', array('func' => $func), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->transactional($func);
    }
    public function commit()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'commit', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->commit();
    }
    public function rollback()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'rollback', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getClassMetadata', array('className' => $className), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'createQuery', array('dql' => $dql), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'createNamedQuery', array('name' => $name), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'createQueryBuilder', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'flush', array('entity' => $entity), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'clear', array('entityName' => $entityName), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->clear($entityName);
    }
    public function close()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'close', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->close();
    }
    public function persist($entity)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'persist', array('entity' => $entity), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'remove', array('entity' => $entity), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'refresh', array('entity' => $entity), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'detach', array('entity' => $entity), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'merge', array('entity' => $entity), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'contains', array('entity' => $entity), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getEventManager', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getConfiguration', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'isOpen', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getUnitOfWork', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getProxyFactory', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'initializeObject', array('obj' => $obj), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'getFilters', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'isFiltersStateClean', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'hasFilters', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return $this->valueHolder88cb4->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer03dad = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder88cb4) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder88cb4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder88cb4->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, '__get', ['name' => $name], $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        if (isset(self::$publicPropertiesee7f8[$name])) {
            return $this->valueHolder88cb4->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88cb4;
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
        $targetObject = $this->valueHolder88cb4;
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
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88cb4;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder88cb4;
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
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, '__isset', array('name' => $name), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88cb4;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder88cb4;
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
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, '__unset', array('name' => $name), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88cb4;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder88cb4;
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
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, '__clone', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        $this->valueHolder88cb4 = clone $this->valueHolder88cb4;
    }
    public function __sleep()
    {
        $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, '__sleep', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
        return array('valueHolder88cb4');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer03dad = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer03dad;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer03dad && ($this->initializer03dad->__invoke($valueHolder88cb4, $this, 'initializeProxy', array(), $this->initializer03dad) || 1) && $this->valueHolder88cb4 = $valueHolder88cb4;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder88cb4;
    }
    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder88cb4;
    }
}
