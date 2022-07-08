<?php

namespace DataStructures\List;



/**
 * Doubly Linked List
 * 
 * a simple representation of dlinked lists
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class DLinkedList
{
    /**
     * internal trait
     */
    use TraverseListTrait;
    /**
     * the *head node
     *
     * @var DNode
     */
    private DNode $head;
    /**
     * the *tail node
     *
     * @var DNode
     */
    private DNode $tail;


    /**
     * insert a node in list
     *
     * @param mixed $value
     * @return void
     */
    public function insert($value)
    {
        $node = new DNode($value);

        if (!isset($this->head)) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $node->Previous = $this->tail;
            $this->tail->Next = $node;
            $this->tail = $node;
        }
    }

    /**
     * delete a node in list
     *
     * @param mixed $value
     * @return void
     */
    public function delete($value)
    {
        $node = $this->head;
        // case 1: list is empty
        if (!isset($node)) return false;

        if ($node->getValue() === $value) {
            if ($node === $this->tail) {
                // case 2: removing the only node
                unset($this->head);
                unset($this->tail);
            } else {
                // case 3: removing the head
                $this->head = $this->head->Next;
                unset($this->head->Previous);
            }
            return true;
        }

        while (isset($node->Next) and ($node->Next->getValue() != $value)) {
            $node = $node->Next;
        }

        if (isset($node->Next)) {
            if ($node->Next === $this->tail) {
                // case 4: removing the tail
                $this->tail = $node->Next->Previous;
                unset($node->Next);
            } else {
                $node->Next = $node->Next->Next;
                $node->Next->Previous = $node;
            }

            return true;
        }

        return false;
    }


    /**
     * traverse in reverse mode
     *
     * @return Generator
     */
    public function rtraverse()
    {
        $node = $this->tail;
        while (isset($node)) {
            yield $node->getValue();
            $node = isset($node->Previous) ? $node->Previous : null;
        }
    }
}