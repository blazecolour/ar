<?php
require_once('Publication.php');

class News extends Publication
{
     protected $propList = [
        'id' => [
            'type' => 'integer',
            'required' => true
        ],
        'title' => [
            'type' => 'string',
            'required' => true
        ],
        'author' => [
            'type' => 'string',
            'required' => false
        ],
        'important' => [
            'type' => 'string',
            'required' => false
        ]

    ];

    public function draw() 
    {
        if ($this->important) 
            echo '! ';
        echo $this->title . ' ' . $this->author;
        echo "\n";
    }
}