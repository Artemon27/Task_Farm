<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Caw extends Animal
{
    use HasFactory;
    
    public $name = 'caw';
    public $product = 'milk';
    public $collected = 0;
    public $id;
    
    function __construct($id){
        $this->id = $id;
    }

    public function collect(){
        $random = rand(8,12);
        $this->collected = $this->collected + $random;
        return $random;
    }
}
