<?php
namespace App\Controllers;
use App\Models\ProductModel;
class HomeController extends Controller
{

    public function index()
    {
        $product = new ProductModel();
        $productsArr = $product->getProducts();
        $this->templateEngine->assign('productsArr', $productsArr);
        if(isset($_SESSION['auth'])){
            if ($_SESSION['status'] == 1) {
                $admin = true;
                $this->templateEngine->assign('admin', $admin);
                }
            }
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