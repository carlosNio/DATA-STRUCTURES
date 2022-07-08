<?php

namespace DataStructures\List;


/**
 * internal trait
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
trait TraverseListTrait
{

    /**
     * check if a value exists in list
     *
     * @param mixed $value
     * @return boolean
     */
    public function contains($value)
    {
        return is_object($this->find($value));
    }

    /**
     * find a value in list
     *
     * @param mixed $value
     * @return TreeNode|null
     */
    public function find($value)
    {
        $node = $this->head;
        // search
        while (isset($node) and $value != $node->getValue()) {
            $node = $node->Next ?? null;
        }
        // result
        return $node;
    }

    /**
     * traverse a linked list
     *
     * @return Generator
     */
    public function traverse()
    {
        $node = $this->head;
        while (isset($node)) {
            yield $node->getValue();
            $node = $node->Next;
        }
    }
}
