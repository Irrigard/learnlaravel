<?php
namespace App\Http\Controllers;

class TestController extends Controller
{
    public function show($id1, $id2)
    {
        return $id1 + $id2;
    }
}
