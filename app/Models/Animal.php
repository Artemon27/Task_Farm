<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Caw;
use App\Models\Chicken;

class Animal extends Model
{
    use HasFactory;    

    function __construct(){
    }

    public function kindOfAnimal($animal){
        if ($animal == 'caw'){
            return 1;
        }
        if ($animal == 'chicken'){
            return 1;
        }
        return 0;
    }

    public function newAnimal($animal, $id){
        if ($animal == 'caw'){
            return new Caw($id);
        }
        if ($animal == 'chicken'){
            return new Chicken($id);
        }
    }
}
