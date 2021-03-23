<?php
namespace App\Http\Controllers;

class TestController extends Controller
{
    public function show()
    {
        return view('test.show', ['arr' => ['country' => 'United Kingdom', 'city' => 'London', 'age'=>30, 'salary'=>30000, 'str'=>'Trusted string'], 'weekDay'=>3, 'month'=>5, 'numArr'=>[1, 2]]);
    }
}
