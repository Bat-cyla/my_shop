<?php

namespace App\Models;

class ProductModel extends MainModel
{
 public function getProducts($id = null)
 {
     return $this->query("SELECT * FROM products");
 }
 public function getProduct($id)
 {
     return $this->query("SELECT * FROM products WHERE id = $id");
 }
 public function addProduct($title, $description)
 {
     return $this->query("INSERT INTO products (title, description) VALUES ('$title', '$description')");
 }
 public function updateProduct($id, $title, $description)
 {
     return $this->query("UPDATE products SET title = '$title', description = '$description' WHERE id = $id");
 }
 public function deleteProduct($id)
 {
     return $this->query("DELETE FROM products WHERE id = $id");
 }
}