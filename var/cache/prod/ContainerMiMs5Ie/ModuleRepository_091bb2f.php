<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder049a8 = null;
    private $initializerf6d8f = null;
    private static $publicProperties9b319 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getList', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getInstalledModules', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getMustBeConfiguredModules', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getUpgradableModules', array(), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'setActionUrls', array('collection' => $collection), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        return $this->valueHolder049a8->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerf6d8f = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder049a8) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder049a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder049a8->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerf6d8f && ($this->initializerf6d8f->__invoke($valueHolder049a8, $this, '__get', ['name' => $name], $this->initializerf6d8f) || 1) && $this->valueHolder049a8 = $valueHolder049a8;
        if (isset(self::$publicProperties9b319[$name])) {
            return $this->valueHolder049a8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
