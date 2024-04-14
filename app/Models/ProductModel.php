<?php

namespace App\Models;

class ProductModel extends MainModel
{
 public function getProducts($id = null)
 {
     $model = new MainModel();
     return $model->query("SELECT * FROM products");
 }
 public function getProduct($id)
 {
     $model = new MainModel();
     return $model->query("SELECT * FROM products WHERE id = $id");
 }
 public function addProduct($title, $description)
 {
     $model = new MainModel();
     return $model->query("INSERT INTO products (title, description) VALUES ('$title', '$description')");
 }
 public function updateProduct($id, $title, $description)
 {
     $model = new MainModel();
     return $model->query("UPDATE products SET title = '$title', description = '$description' WHERE id = $id");
 }
 public function deleteProduct($id)
 {
     $model = new MainModel();
     return $model->query("DELETE FROM products WHERE id = $id");
 }
}