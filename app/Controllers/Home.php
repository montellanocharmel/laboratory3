<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function shop($value='')
    {
        $data = [
            'products' => $this->product->findAll()
        ];
        return view('products', $data);
    }

    public function index()
    {
        $data = [
            'products' => $this->product->findAll()
        ];
        return view('index', $data);
    }
}
