<?php

class Sts_Data {

    public $label;
    public $object_id;
    public $parent_id;

    function __construct($l, $o, $p) {
        $this->label = $l;
        $this->object_id = $o;
        $this->parent_id = $p;
    } 
}

?>
