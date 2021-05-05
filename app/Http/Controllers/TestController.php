<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $links = [['text' => 'text1', 'href' => 'href1'],['text' => 'text2', 'href' => 'href2'],['text' => 'text3', 'href' => 'href3']];
    private $employees = [
        [
            'number' => 'Номер',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'salary' => 'Зарплата'
        ],
        [
            'name' => 'user1',
            'surname' => 'surname1',
            'salary' => 1000
        ],
        [
            'name' => 'user2',
            'surname' => 'surname2',
            'salary' => 2000
        ],
        [
            'name' => 'user3',
            'surname' => 'surname3',
            'salary' => 3000
        ],
        [
            'name' => 'user4',
            'surname' => 'surname4',
            'salary' => 4000
        ],
        [
            'name' => 'user5',
            'surname' => 'surname5',
            'salary' => 5000
        ]
    ];
    private $users = [
        [
            'number' => 'Номер',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'banned' => 'Статус',
        ],
        [
            'name' => 'user1',
            'surname' => 'surname1',
            'banned' => true,
        ],
        [
            'name' => 'user2',
            'surname' => 'surname2',
            'banned' => false,
        ],
        [
            'name' => 'user3',
            'surname' => 'surname3',
            'banned' => true,
        ],
        [
            'name' => 'user4',
            'surname' => 'surname4',
            'banned' => false,
        ],
        [
            'name' => 'user5',
            'surname' => 'surname5',
            'banned' => false,
        ]
    ];

    public function show()
    {
        return view('test.show', ['arr' => ['country' => 'United Kingdom', 'city' => 'London', 'age'=>30, 'salary'=>30000, 'str'=>'Trusted string'], 'weekDay'=>3, 'month'=>5, 'numArr'=>[1, 2, 3, 4, 5, 6, 7], 'strArr'=>['String 1', 'String 2', 'String 3'], 'data'=>1,
            'users' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25],
            'employees' => [['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000],['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000], ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000]], 'emptyArr'=>[]]);
    }

    public function getContent()
    {
        return view('test.inh', ['content'=>'content', 'title'=>'Page Title', 'links'=>$this->links, 'employees'=>$this->employees, 'users'=>$this->users, 'strArr'=>['String 1', 'String 2', 'String 3'],
            'daysArr'=>range(1, date('t', time())), 'today'=>date('j', time())]);
    }

    public function form()
    {
        return view('test.form');
    }

    public function result(Request $request, $id1, $id2)
    {
        if ($request->isMethod('get'))
        {
            return view('test.form');
        }
        if ($request->isMethod('post'))
        {
            return view('test.result', ['input'=>$request->only('name', 'surname', 'login'), 'id1'=>$id1, 'id2'=>$id2]);
        }
    }

    public function method(Request $request)
    {
        $isFlag = $request->is('test/*') ? 'true' : 'false';
        return view('test.method', ['methods'=>['path'=>$request->path(), 'url'=>$request->url(), 'FullUrl'=>$request->fullUrl(), 'FullUrlWithQuery'=>$request->fullUrlWithQuery(['param2' => '2']), 'is' => $isFlag]]);
    }
}
