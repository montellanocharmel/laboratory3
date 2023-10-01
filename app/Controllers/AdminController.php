<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    private $product;
    
    public function __construct(){
        $this->product = new \App\Models\ProductModel();
    }

    public function delete($id){
        $this->product->delete($id);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $data = [
            'products' => $this->product->findAll(),
            'product' => $this->product->where('id', $id)->first(),
        ];
        return view('admin', $data);
    }
    
    

    public function save(){
        $id = $_POST['id'];
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'image' => $this->request->getVar('image'),
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'qty' => $this->request->getVar('qty'),
        ];
        if($id != null){
            $this->product->set($data)->where('id', $id)->update();
        }else{
            $this->product->save($data);
        }  
        return redirect()->to('admin');
    }

    public function product($product)
    {
        echo $product;
    
    }


    public function admin()  
    {
        $data = [
            'products' => $this->product->findAll()
        ];
        return view('/admin/index',$data);
    }
}
