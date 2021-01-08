<?php
namespace Clang;

class MagentoProduct {
  public $storeId; // long
  public $orderItemId; // long
  public $attributes; // ArrayOfOption
  public $id; // long
  public $externalProductId; // long
  public $sku; // string
  public $name; // string
  public $description; // string
  public $url; // string
  public $image; // string
  public $orderId; // long
  public $quantity; // long
  public $priceEx; // double
  public $price; // double
  public $discount; // double
  public $categories; // ArrayOfMagentoCategory
  public $related; // ArrayOfInt
  public $upSell; // ArrayOfInt
  public $crossSell; // ArrayOfInt
}