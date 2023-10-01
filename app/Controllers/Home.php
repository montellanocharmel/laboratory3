<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function signin()
    {
        {
            return view('signin');
        }
    }

    public function detail()
    {
        $data = [
            'products' => $this->product->findAll()
        ];
        return view('details', $data);
    }

    public function index()
    {
        $data = [
            'products' => $this->product->findAll()
        ];
        return view('index', $data);
    }
}

