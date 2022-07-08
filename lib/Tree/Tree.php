<?php

namespace DataStructures\Tree;



/**
 * Tree Class
 * 
 * a simple representation of a binary search tree
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class Tree
{
    /**
     * the root
     *
     * @var TreeNode|null
     */
    protected TreeNode|null $root;
    /**
     * the nodes counter
     *
     * @var integer
     */
    protected int $count = 0;


    /**
     * internal method to insertion of a node
     *
     * @param TreeNode|null $current
     * @param mixed $value the node value
     * @return void|boolean
     */
    protected function insertNode(TreeNode|null $current, $value)
    {
        if (!isset($current)) return false;

        if ($value < $current->getValue()) {
            if (!isset($current->Left)) {
                $current->Left = new TreeNode($value);
            } else {
                $this->insertNode($current->Left, $value);
            }
        } else {
            if (!isset($current->Right)) {
                $current->Right = new TreeNode($value);
            } else {
                $this->insertNode($current->Right, $value);
            }
        }
    }


    /**
     * internal method to find a node
     *
     * @param TreeNode|null $current
     * @param mixed $value the node value
     * @return TreeNode|void|null
     */
    protected function findNode(TreeNode|null $current, $value)
    {
        if (!isset($current)) return null;
        if ($current->getValue() === $value) return $current;

        if ($value > $current->getValue())
            return $this->findNode($current->Right, $value);
        else
            return $this->findNode($current->Left, $value);
    }

    /**
     * internal helper to find a node parent
     *
     * @param mixed $value the node value
     * @param TreeNode|null $node
     * @return TreeNode|null
     */
    protected function findNodeParent($value, TreeNode|null $node)
    {
        if (!isset($node)) return null;
        if ($value === $node->getValue()) return null;

        if ($value < $node->getValue()) {
            if (!isset($node->Left)) return null;
            else if ($node->Left->getValue() === $value) return $node;
            else return $this->findNodeParent($value, $node->Left);
        } else {
            if (!isset($node->Right)) return null;
            else if ($node->Right->getValue() === $value) return $node;
            else return $this->findNodeParent($value, $node->Right);
        }
    }


        /**
     * internal method for deletion of a node
     *
     * @param TreeNode|null $root
     * @param mixed $target
     * @return TreeNode|null
     */
    protected function deleteNode(TreeNode|null $root, $target)
    {
        if (!isset($root)) return $root;

        if ($target < $root->getValue()) {
            $root->Left = $this->deleteNode($root->Left, $target);
            return $root;
        } elseif ($target > $root->getValue()) {
            $root->Right = $this->deleteNode($root->Right, $target);
            return $root;
        } else {
            if (!isset($root->Left) and !isset($root->Right)) return null;

            if (!isset($root->Left) or !isset($root->Right)) {
                if (isset($root->Left)) {
                    return $root->Left;
                } else {
                    return $root->Right;
                }
            } else {
                $sucessor = $this->findMin($root->Right);
                $root->setValue($sucessor->getValue());
                $root->Right = $this->deleteNode($root->Right, $sucessor->getValue());
                return $root;
            }
        }
    }


    /**
     * internal helper to find the minimum value in bst
     *
     * @param TreeNode $node
     * @return TreeNode
     */
    protected function findMin(TreeNode $node)
    {
        if (!isset($node->Left)) return $node;
        return $this->findMin($node->Left);
    }
    
    /**
     * internal helper to find the maximum value in bst
     *
     * @param TreeNode $node
     * @return TreeNode
     */
    protected function findMax(TreeNode $node)
    {
        if (!isset($node->Right)) return $node;
        return $this->findMax($node->Right);
    }


    /**
     * insertion of a new node in bst
     *
     * @param mixed $value the node value
     * @return void
     */
    public function insert($value)
    {
        if (!isset($this->root)) {
            $this->root = new TreeNode($value);
        } else {
            $this->insertNode($this->root, $value);
        }

        $this->count += 1;
    }


    /**
     * get a boolean indicating the presence of a value in bst
     *
     * @param mixed $value the node value
     * @return boolean
     */
    public function contains($value)
    {
        if (!isset($this->root)) return false;
        $node = $this->findNode($this->root, $value);
        return isset($node);
    }

    /**
     * Find a node in bst
     *
     * @param mixed $value the node value
     * @return TreeNode|null
     */
    public function find($value)
    {
        if (!isset($this->root)) return false;
        return $this->findNode($this->root, $value);
    }


    /**
     * get the node with the maximum value
     *
     * @param mixed $value the node value
     * @return TreeNode|null
     */
    public function max($value)
    {
        $node = $this->find($value);
        if (isset($node)) return $this->findMax($node);
    }

    /**
     * get the node with the minimum value
     *
     * @param mixed $value the node value
     * @return TreeNode|null
     */
    public function min($value)
    {
        $node = $this->find($value);
        if (isset($node)) return $this->findMin($node);
    }


    /**
     * delete a node in bst
     *
     * @param mixed $value the node value
     * @return void
     */
    public function delete($value)
    {
        $this->root = $this->deleteNode($this->root, $value);
        $this->count -= 1;
        return true;
    }
}
