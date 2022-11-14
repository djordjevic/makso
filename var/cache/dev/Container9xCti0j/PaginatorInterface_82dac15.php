<?php

namespace Container9xCti0j;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereb78e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer18d30 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties74670 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        if ($this->valueHoldereb78e === $returnValue = $this->valueHoldereb78e->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer18d30 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldereb78e) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldereb78e = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__get', ['name' => $name], $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        if (isset(self::$publicProperties74670[$name])) {
            return $this->valueHoldereb78e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

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

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__isset', array('name' => $name), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__unset', array('name' => $name), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb78e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereb78e;
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
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__clone', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        $this->valueHoldereb78e = clone $this->valueHoldereb78e;
    }

    public function __sleep()
    {
        $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, '__sleep', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;

        return array('valueHoldereb78e');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer18d30 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer18d30;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer18d30 && ($this->initializer18d30->__invoke($valueHoldereb78e, $this, 'initializeProxy', array(), $this->initializer18d30) || 1) && $this->valueHoldereb78e = $valueHoldereb78e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb78e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb78e;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
