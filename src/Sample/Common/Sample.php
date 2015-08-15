<?php

namespace Sample\Common;

class Sample
{
    public $a;
    public $c;
    
    public function __construct()
    {
        $this->a = 5;
        $this->b = 6;
    }
    
    public function set($v)
    {
        $this->a = $v;
    }
    
    public function get($v)
    {
        return $this->$v;
    }
}
?>