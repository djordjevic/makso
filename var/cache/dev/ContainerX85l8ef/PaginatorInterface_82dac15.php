<?php

namespace ContainerX85l8ef;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb9d63 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer44500 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8e802 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;

        if ($this->valueHolderb9d63 === $returnValue = $this->valueHolderb9d63->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer44500 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderb9d63) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderb9d63 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, '__get', ['name' => $name], $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;

        if (isset(self::$publicProperties8e802[$name])) {
            return $this->valueHolderb9d63->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d63;

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

        $targetObject = $this->valueHolderb9d63;
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
        $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d63;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb9d63;
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
        $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, '__isset', array('name' => $name), $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d63;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb9d63;
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
        $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, '__unset', array('name' => $name), $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d63;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb9d63;
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
        $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, '__clone', array(), $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;

        $this->valueHolderb9d63 = clone $this->valueHolderb9d63;
    }

    public function __sleep()
    {
        $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, '__sleep', array(), $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;

        return array('valueHolderb9d63');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer44500 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer44500;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer44500 && ($this->initializer44500->__invoke($valueHolderb9d63, $this, 'initializeProxy', array(), $this->initializer44500) || 1) && $this->valueHolderb9d63 = $valueHolderb9d63;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb9d63;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb9d63;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
