<?php
require_once "autoload.php";

use DataStructures\List\DLinkedList;
use DataStructures\List\LinkedList;
use DataStructures\Queue;
use DataStructures\Stack;
use DataStructures\Tree\Tree;

/**
 * DEMO CODES
 * 
 * follow the examples of how to use these data structures
 */


/**
 * STACK
 */
// $stack = new Stack;
// $stack->add('carlos');
// $stack->add('carlito');
// $stack->add('altino');
// $stack->add('ernesto');

// while (!$stack->isEmpty()) {
//     echo "item: {$stack->getTop()} \n";
// }

/**
 * QUEUE
 */
// $queue = new Queue;
// $queue->add('carlos');
// $queue->add('carlito');
// $queue->add('altino');
// $queue->add('ernesto');

// while (!$queue->isEmpty()) {
//     echo "item: {$queue->getHead()} \n";
// }


// /**
//  * LINKED LIST
//  */
//  $list = new LinkedList;
//  $list->insert(12);
//  $list->insert(33);
//  $list->insert(13);
//  $list->insert(11);
//  $list->insert(40);
//  $list->insert(44);

// $list->delete(131);
// $gen = $list->traverse();

// foreach ($gen as $key => $value) {
//     echo "{$key} => {$value}\n";
// }



// /**
//  * DOUBLY LINKED LIST
//  */
// $list = new DLinkedList;
// $list->insert(12);
// $list->insert(1);
// $list->insert(11);
// $list->insert(14);

// $gen = $list->traverse();

// foreach ($gen as $key => $value) {
//     echo "{$key} => {$value}\n";
// }


/**
 * BST
 */

// $tree = new Tree;
// $tree->insert(60);
// $tree->insert(12);
// $tree->insert(90);
// $tree->insert(4);
// $tree->insert(41);
// $tree->insert(29);
// $tree->insert(23);
// $tree->insert(37);
// $tree->insert(1);
// $tree->delete(12);