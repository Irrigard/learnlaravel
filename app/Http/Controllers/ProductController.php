<?php
namespace App\Http\Controllers;


class ProductController extends Controller
{
    private $categories;
    public function __construct()
    {
        $this->categories = [
            1 => [
                'name' => 'Категория 1',
                'products' => [
                    1 => [
                        'name'    => 'Продукт 1',
                        'cost'    => '300',
                        'inStock' => true,
                        'desc'    => 'Описание продукта 1'
                    ],
                    2 => [
                        'name'    => 'Продукт 2',
                        'cost'    => '400',
                        'inStock' => true,
                        'desc'    => 'Описание продукта 2'
                    ],
                    3 => [
                        'name'    => 'Продукт 3',
                        'cost'    => '500',
                        'inStock' => false,
                        'desc'    => 'Описание продукта 3'
                    ],
                ],
            ],
            2 => [
                'name' => 'Категория 2',
                'products' => [
                    1 => [
                        'name'    => 'Продукт 1',
                        'cost'    => '700',
                        'inStock' => true,
                        'desc'    => 'Описание продукта 1'
                    ],
                    2 => [
                        'name'    => 'Продукт 2',
                        'cost'    => '800',
                        'inStock' => false,
                        'desc'    => 'Описание продукта 2'
                    ],
                    3 => [
                        'name'    => 'Продукт 3',
                        'cost'    => '900',
                        'inStock' => false,
                        'desc'    => 'Описание продукта 3'
                    ],
                ],
            ],
        ];
    }

    public function showProduct($catId, $prodId)
    {
        if (array_key_exists($prodId, $this->categories[$catId]['products']))
        {
            return view('product.showProduct', ['product'=>$this->categories[$catId]['products'][$prodId], 'catName'=>$this->categories[$catId]['name'], 'catId'=>$catId]);
        } else {
            return view('post.notFound', ['id'=>$prodId]);
        }
    }

    public function showCategory($catId)
    {
        if (array_key_exists($catId, $this->categories))
        {
            return view('product.showCategory', ['category'=>$this->categories[$catId], 'catId'=>$catId]);
        } else {
            return view('post.notFound', ['id'=>$catId]);
        }
    }

    public function showCategoryList()
    {
        $list = [];
        foreach ($this->categories as $key=>$category)
        {
            $list[$key] = $category['name'];
        }
        return view('product.showCategoryList', ['list'=>$list]);
    }
}
