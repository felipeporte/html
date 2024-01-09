<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder049a8 = null;
    private $initializerf6d8f = null;
    private static $publicProperties9b319 = [
        
    ];
    public function getConnection()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getConnection', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getMetadataFactory', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getExpressionBuilder', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'beginTransaction', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getCache', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'transactional', array('func' => $func), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'commit', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->commit();
    }
    public function rollback()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'rollback', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getClassMetadata', array('className' => $className), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'createQuery', array('dql' => $dql), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'createNamedQuery', array('name' => $name), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'createQueryBuilder', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'flush', array('entity' => $entity), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'clear', array('entityName' => $entityName), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->clear($entityName);
    }
    public function close()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'close', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->close();
    }
    public function persist($entity)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'persist', array('entity' => $entity), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'remove', array('entity' => $entity), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'refresh', array('entity' => $entity), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'detach', array('entity' => $entity), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'merge', array('entity' => $entity), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'contains', array('entity' => $entity), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getEventManager', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getConfiguration', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'isOpen', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getUnitOfWork', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getProxyFactory', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'initializeObject', array('obj' => $obj), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getFilters', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'isFiltersStateClean', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'hasFilters', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf6d8f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder049a8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder049a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder049a8->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, '__get', ['name' => $name], $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        if (isset(self::$publicProperties9b319[$name])) {
            return $this->valueHolder049a8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder049a8;
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
        $targetObject = $this->valueHolder049a8;
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
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder049a8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder049a8;
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
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, '__isset', array('name' => $name), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder049a8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder049a8;
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
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, '__unset', array('name' => $name), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder049a8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder049a8;
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
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, '__clone', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        $this->valueHolder049a8 = clone $this->valueHolder049a8;
    }
    public function __sleep()
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, '__sleep', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return array('valueHolder049a8');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf6d8f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf6d8f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'initializeProxy', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder049a8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder049a8;
    }
}
