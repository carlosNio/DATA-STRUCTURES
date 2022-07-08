<?php
namespace DataStructures;

/**
 * 
 * Queue Data Structure Class
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class Queue
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
     * get the head ( first inserted ) item
     *
     * @return mixed|null
     */
    public function getHead()
    {
        return array_shift($this->data);
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
     * return true if the queue is empty
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return count($this->data) === 0;
    }
}
