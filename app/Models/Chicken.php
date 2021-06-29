<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Chicken extends Animal
{
    use HasFactory;

    public $name = 'chicken';
    public $product = 'egg';
    public $collected = 0;
    public $id;
    
    function __construct($id){
        $this->id = $id;
    }
    
    public function collect(){
        $random = rand(0,1);
        $this->collected = $this->collected + $random;
        return $random;
    }
}
