<?php

declare(strict_types=1);

namespace tests\EcPhp\Factorial;

use ArrayAccess;
use Countable;
use Iterator;
use function array_key_exists;
use function count;
use function in_array;
use const E_USER_NOTICE;

class DuplicateArray implements ArrayAccess, Countable, Iterator
{
    /**
     * @var array<mixed>
     */
    public $keys = [];

    /**
     * @var int
     */
    public $pointer = 0;

    /**
     * @var array<mixed>
     */
    public $values = [];

    /**
     * DuplicateArray constructor.
     *
     * @param mixed[] $from
     */
    public function __construct(array $from = [])
    {
        $this->keys = array_keys($from);
        $this->values = array_values($from);
    }

    public function count()
    {
        return count($this->keys);
    }

    public function current()
    {
        return $this->values[$this->pointer];
    }

    public function key()
    {
        return $this->keys[$this->pointer];
    }

    public function next()
    {
        ++$this->pointer;
    }

    public function offsetExists($key)
    {
        return in_array($key, $this->keys, true);
    }

    // just fetches the first found entry
    public function offsetGet($key)
    {
        if (false === ($i = array_search($key, $this->keys, true))) {
            return trigger_error("Undefined offset '{$key}'", E_USER_NOTICE);
        }

        return $this->values[$i];
    }

    public function offsetSet($key, $value)
    {
        $this->keys[] = $key;
        $this->values[] = $value;
    }

    public function offsetUnset($key)
    {
        if (false !== ($i = array_search($key, $this->keys, true))) {
            unset($this->keys[$i], $this->values[$i]);

            $this->keys = array_values($this->keys);
            $this->values = array_values($this->values);
        }
    }

    public function rewind()
    {
        $this->pointer = 0;
    }

    public function valid()
    {
        return array_key_exists($this->pointer, $this->keys);
    }
}
