<?php

namespace App\Models;

class GoodsModel extends MainModel
{
 public function getGoods($id = null)
 {
    $model = new MainModel();
    $goodsArr = $model->query("SELECT * FROM showcase");
 }
}