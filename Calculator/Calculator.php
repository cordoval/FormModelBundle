<?php

namespace Cordova\Bundle\FormModelBundle\Calculator;

class Calculator {

    protected $items;
    protected $result=0;

    public function push ($num)
    {
        if (!isset($this->items)) {
            $this->items = array();
        }
        $this->items[] = $num;
    }

    public function add()
    {
        foreach ($this->items as $item) {
            $this->result += $item;
        }
        $this->items = array();
    }

    public function result()
    {
        $result = $this->result;
        $this->result = 0;
        return $result;
    }
}
