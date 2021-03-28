<?php
namespace App\Http\Controllers;

class TestController extends Controller
{
    public function show()
    {
        return view('test.show', ['arr' => ['country' => 'United Kingdom', 'city' => 'London', 'age'=>30, 'salary'=>30000, 'str'=>'Trusted string'], 'weekDay'=>3, 'month'=>5, 'numArr'=>[1, 2, 3, 4, 5, 6, 7], 'strArr'=>['String 1', 'String 2', 'String 3'], 'data'=>1,
            'users' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25],
            'employees' => [['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000],['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000], ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000]], 'emptyArr'=>[]]);
    }
}
