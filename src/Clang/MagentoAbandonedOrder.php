<?php
namespace Clang;

class MagentoAbandonedOrder {
  public $id; // long
  public $quoteId; // long
  public $storeview; // string
  public $storeviewId; // long
  public $customerId; // long
  public $subtotal; // double
  public $total; // double
  public $taxAmount; // double
  public $discount; // double
  public $currency; // string
  public $createDate; // long
  public $products; // ArrayOfMagentoProduct
}