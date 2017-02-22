<?php

require_once ('ActiveRecord.php');
abstract class Publication extends ActiveRecord

{
   

    function __construct()
    {
        $this->type = 'publication';
    }

    abstract public function draw();
}