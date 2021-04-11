<?php
namespace App\Http\Controllers;


class PostController extends Controller
{
    private $posts;

    public function __construct()
    {
        $this->posts = [
            1 => [
                'title'  => 'Тайтл страницы 1',
                'author' => 'Автор страницы 1',
                'date'   => 'Дата публикации страницы 1',
                'teaser' => 'Короткое описание страницы 1',
                'text'   => 'Полный текст страницы 1'
            ],
            2 => [
                'title'  => 'Тайтл страницы 2',
                'author' => 'Автор страницы 2',
                'date'   => 'Дата публикации страницы 2',
                'teaser' => 'Короткое описание страницы 2',
                'text'   => 'Полный текст страницы 2'
            ],
            3 => [
                'title'  => 'Тайтл страницы 3',
                'author' => 'Автор страницы 3',
                'date'   => 'Дата публикации страницы 3',
                'teaser' => 'Короткое описание страницы 3',
                'text'   => 'Полный текст страницы 3'
            ],
            4 => [
                'title'  => 'Тайтл страницы 4',
                'author' => 'Автор страницы 4',
                'date'   => 'Дата публикации страницы 4',
                'teaser' => 'Короткое описание страницы 4',
                'text'   => 'Полный текст страницы 4'
            ],
            5 => [
                'title'  => 'Тайтл страницы 5',
                'author' => 'Автор страницы 5',
                'date'   => 'Дата публикации страницы 5',
                'teaser' => 'Короткое описание страницы 5',
                'text'   => 'Полный текст страницы 5'
            ]
        ];
    }

    public function showOne($id)
    {
        if (array_key_exists($id, $this->posts))
        {
            return view('post.inh', ['post'=>$this->posts[$id]]);
        } else {
            return view('post.notFound', ['id'=>$id]);
        }
    }

    public function showAll()
    {
        return view('post.showAll', ['posts'=>$this->posts]);
    }
}
