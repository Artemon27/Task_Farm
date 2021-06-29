<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;

class farmController extends Controller
{
    //
    public function index(){
        $farm = new Farm;
        $farm->add('caw', 10);
        $farm->add('chicken', 20);
        echo "Кур:".$farm->count('chicken')."<br>";
        echo "Коров:".$farm->count('caw')."<br><br>";
        $farm->collect(7);
        echo "Собрано яиц:".$farm->countPr('egg')."<br>";
        echo "Собрано молока:".$farm->countPr('milk')."<br><br>";
        $farm->add('caw', 1);
        $farm->add('chicken', 5);
        echo "Кур:".$farm->count('chicken')."<br>";
        echo "Коров:".$farm->count('caw')."<br><br>";
        $farm->collect(7);
        echo "Собрано яиц:".$farm->countPr('egg')."<br>";
        echo "Собрано молока:".$farm->countPr('milk')."<br><br>";
    }
}
