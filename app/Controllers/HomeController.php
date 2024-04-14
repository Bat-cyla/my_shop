<?php
namespace App\Controllers;
use App\Models\ProductModel;
class HomeController extends Controller
{
    public function index()
    {
        $this->templateEngine->display('index.tpl');

    }

    public function store()
    {
        $product = new ProductModel();
        $productsArr=$product->getProducts();
        $this->templateEngine->assign('productsArr', $productsArr);
        $this->templateEngine->display('store.tpl');
    }
    public function show($id)
    {
        $product = new ProductModel();
        $product=$product->getProduct($id);
        $this->templateEngine->assign('product', $product);
        $this->templateEngine->display('show.tpl');
    }

}