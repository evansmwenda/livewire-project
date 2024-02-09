<?php

namespace App\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $newComment;
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolore eveniet voluptate, debitis magni excepturi necessitatibus itaque nisi praesentium a fuga nihil repellendus expedita nostrum adipisci deleniti sequi repellat iusto placeat totam hic. Quisquam nostrum assumenda vel repudiandae nisi qui repellendus quis dignissimos quidem est odit alias, placeat labore exercitationem!',
            'created_at' => '3 min ago',
            'author' => 'mwenda',
        ]
    ];

    public function addComment(){
        //add comment to comments array
        array_unshift($this->comments,
        [
            'body' => 'Lorem ipgni exceptur!',
            'created_at' => '1 min ago',
            'author' => 'mwenda',
        ]) ;
    }    
    public function render()
    {
        return view('livewire.comments');
    }
}
