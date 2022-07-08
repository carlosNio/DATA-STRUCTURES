<?php

namespace DataStructures\List;


/**
 * DoublyLinked Node
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class DNode
{
    /**
     * the node value
     *
     * @var mixed
     */
    protected $value;

    /**
     * the previous node
     *
     * @var DNode|null
     */
    public DNode|null $Previous = null;
    /**
     * the next node
     *
     * @var DNode|null
     */
    public DNode|null $Next = null;
    
    
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}