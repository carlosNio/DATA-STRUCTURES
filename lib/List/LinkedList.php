<?php
namespace DataStructures\List;


/**
 * Single Linked List
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class LinkedList
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
    private ListNode $head;
    /**
     * the *tail node
     *
     * @var DNode
     */
    private ListNode $tail;


    /**
     * insert a new node in list
     *
     * @param mixed $value
     * @return void
     */
    public function insert($value)
    {
        $node = new ListNode($value);

        if (!isset($this->head)) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $this->tail->Next = $node;
            $this->tail = $node;
        }
    }


    /**
     * traverse the list in reverse mode
     *
     * @return Generator
     */
    public function rtraverse()
    {
        if (isset($this->tail)) {
            $curr = $this->tail;

            while ($curr != $this->head) {
                $prev = $this->head;

                while ($prev->Next != $curr) {
                    $prev = $prev->Next;
                }

                yield $curr->getValue();
                $curr = $prev;
            }

            yield $curr->getValue();
        }
    }


    /**
     * delete a node
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
            }
            return true;
        }

        while (isset($node->Next) and ($node->Next->getValue() != $value)) {
            $node = $node->Next;
        }

        if (isset($node->Next)) {
            if ($node->Next === $this->tail) {
                // case 4: removing the tail
                $this->tail = $node;
                unset($node->Next);
            } else {
                $node->Next = isset($node->Next->Next) ? $node->Next->Next : null;
            }

            return true;
        }

        return false;
    }
}
