<?php
namespace DataStructures;

/**
 * 
 * Stack Data Structure Class
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class Stack
{
    /**
     * the internal array data
     *
     * @var array
     */
    private array $data = [];

    /**
     * add method
     *
     * @param mixed $item
     * @return void
     */
    public function add($item)
    {
        array_push($this->data, $item);
    }

    /**
     * get the top ( last inserted ) item
     *
     * @return mixed|null
     */
    public function getTop()
    {
        return array_pop($this->data);
    }

    /**
     * return the items number
     *
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * return true if the stack is empty
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return count($this->data) === 0;
    }
}
