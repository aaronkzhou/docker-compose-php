<?php

class Node // Node of a tree
{
    public $data;
    public $leftChild;
    public $rightChild;
    public function __construct(){
        $this->data = null;
        $this->leftChild = null;
        $this->leftChild = null;
    }
}

class BruteForceAlgebraicTree
{
    private $root; // pointer to root of a tree
    public function __construct(){
        $this->prepareTree();
    }
    /*
     * Add algebraic expression elements to tree (according to our algebraic expression)
     * P.S. brute force
     */
    private function prepareTree(){
        //the root
        $this->root = new Node();
        $this->root->data = "+";
        //left subtree
        $this->addNode("/", "L");
        $this->addNode("a", "LL");
        $this->addNode("+", "LR");
        $this->addNode("b", "LRL");
        $this->addNode("d", "LRR");
        // right subtree
        $this->addNode("/", "R");
        $this->addNode("-", "RL");
        $this->addNode("*", "RLL");
        $this->addNode("a", "RLLL");
        $this->addNode("a", "RLLR");
        $this->addNode("*", "RLR");
        $this->addNode("d", "RLRL");
        $this->addNode("d", "RLRR");
        $this->addNode("2", "RR");
    }

    /**
     * Add node to tree by given path
     *
     * @param string $data Node's data
     * @param string $location Path where new node should be inserted
     */
    private function addNode($data, $location)
    {
        $current = $this->root;
        $path = str_split($location);
        foreach ($path as $direction) {
            if ($direction == 'L') {
                if (!isset($current->leftChild)) {
                    $current->leftChild = new Node();
                }
                $current = $current->leftChild;
            }else{
                if (!isset($current->rightChild)){
                    $current->rightChild = new Node();
                }
                $current = $current->rightChild;
            }
        }

        $current->data = $data;
    }

    /**
     * Traversing tree nodes
     *
     * @param int $type Type of traverse
     */
    public function traverse($type)
    {
        switch ($type) {
            case 1:
                echo "Up to bottom traverse: ";
                $this->preOrder($this->root);
                break;
            case 2:
                echo "Left to right traverse: ";
                $this->inOrder($this->root);
                break;
            case 3:
                echo "Bottom to top traverse: ";
                $this->postOrder($this->root);
                break;
        }
    }

    /**
     * Up to bottom traverse
     *
     * @param Node $localRoot Pointer to tree's root
     */
    private function preOrder(Node $localRoot = null){
        if ($localRoot != null) {
            echo $localRoot->data . " ";
            $this->preOrder($localRoot->leftChild);
            $this->preOrder($localRoot->rightChild);
        }
    }

    /**
     * Left to right traverse
     *
     * @param Node $localRoot Pointer to tree's root
     */
    private function inOrder(Node $localRoot = null){
        if ($localRoot != null){
            // traverse the left tree
            $this->inOrder($localRoot->leftChild);
            // visit the root
            echo $localRoot->data . " ";
            // traverse the right tree
            $this->inOrder($localRoot->rightChild);
        }
    }

    /**
     * Bottom to top traverse
     *
     * @param Node $localRoot Pointer to tree's root
     */
    private function postOrder(Node $localRoot = null){
        if ($localRoot != null){
            $this->postOrder($localRoot->leftChild);
            $this->postOrder($localRoot->rightChild);
            echo $localRoot->data . " ";
        }
    }
}
$Tree = new BruteForceAlgebraicTree();
echo $Tree->traverse(1) . "\n";
echo $Tree->traverse(2) . "\n";
echo $Tree->traverse(3) . "\n";
