<?php
namespace App\Controllers;
use App\Models\ProductModel;
class ProductController extends Controller
{
    public function showcase()
    {

        $products=new ProductModel();
        $productsArr=$products->getProducts();
        $this->templateEngine->assign('productsArr',$productsArr);
        $this->templateEngine->display('showcase.tpl');
    }
    public function create()
    {
        $this->templateEngine->display('create.tpl');
    }
    public function store()
    {
        $title=$_POST["title"];
        $desc=$_POST["desc"];
        $product=new ProductModel();
        $product->addProduct($title,$desc);
        header('location:/products');
    }
    public function show($id)
    {
        $products=new ProductModel();
        $product=$products->getProduct($id);
        $this->templateEngine->assign('product',$product);
        $this->templateEngine->display('product.tpl');


    }
    public function edit($id)
    {
        $showcase=new ProductModel();
        $product=$showcase->getProduct($id);
        $this->templateEngine->assign('product',$product);
        $this->templateEngine->display('edit.tpl');
    }

    public function update($id)
    {
        $title=$_POST["title"];
        $desc=$_POST["desc"];
        $product=new ProductModel();
        $product->updateProduct($id,$title,$desc);
        header('location:/products');
    }
    public function delete($id)
    {
        $product=new ProductModel();
        $product->deleteProduct($id);
        header('location:/products');
    }
}