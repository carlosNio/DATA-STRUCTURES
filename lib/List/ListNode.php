<?php

namespace DataStructures\List;


/**
 * Single Node
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class ListNode
{
    /**
     * the node value
     *
     * @var mixed
     */
    protected $value;
    /**
     * the next node
     *
     * @var ListNode|null
     */
    public ListNode|null $Next = null;

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
