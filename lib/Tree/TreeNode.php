<?php
namespace DataStructures\Tree;


/**
 * Tree Node Class
 * 
 * this class represents the type of each node in tree
 * 
 * @author carlos <carlosbumbanio@gmail.com>
 */
class TreeNode
{
    /**
     * the value stored in node
     *
     * @var mixed
     */
    protected $value;
    /**
     * the left subtree
     *
     * @var TreeNode|null
     */
    public TreeNode|null $Left = null;
    /**
     * the right subtree
     *
     * @var TreeNode|null
     */
    public TreeNode|null $Right = null;

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
