<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Farm extends Model
{
    use HasFactory;

    private $animals = array();
    private $count = 0;    
    private $products = array();
    private $countPr = 0;

    /*Добавить животного на ферму*/
    public function add($kind, $num){
        $animal = new animal();
        if (!$animal->kindOfAnimal($kind)){
            return;
        }
        for ($i=0;$i<$num;$i++)
        {
            $this->animals[] = $animal->newAnimal($kind, $this->count);
            $this->count++;            
        }      
        $productsin = array_keys($this->products);
        $productsout = $this->animals[$i-1]->product;
        for ($i=0; $i<$this->countPr;$i++)
        {
            if ($productsin[$i] == $productsout)
            {
                return;
            }            
        }   
        $this->countPr++;
        $this->products[$productsout] = 0; 
    }

    /*Вывод количества какого-либо вида животных*/
    public function count($kind){
        $j=0;
        for ($i=0; $i<$this->count; $i++)
        {
            if ($this->animals[$i]->name==$kind)
            {
                $j++;
            }
        }
        return $j;
    }


    /*Сбор продукции*/
    public function collect($times){
        for ($j=0;$j<$times;$j++)
        {
            for ($i=0;$i<$this->count;$i++)
            {
                $num = $this->animals[$i]->collect();
                $this->products[$this->animals[$i]->product] = $this->products[$this->animals[$i]->product] + $num;
            }   
        }        
    }

    /*Вывод количества какой-либо собранной продукции*/
    public function countPr($kind){       
        return $this->products[$kind];
    }
}
