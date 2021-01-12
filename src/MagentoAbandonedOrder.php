<?php
namespace Clang;

class MagentoAbandonedOrder {
  public int $id; // long
  public int $quoteId; // long
  public string $storeview; // string
  public int $storeviewId; // long
  public int $customerId; // long
  public float $subtotal; // double
  public float $total; // double
  public float $taxAmount; // double
  public float $discount; // double
  public string $currency; // string
  public int $createDate; // long

  /**
   * @var MagentoProduct[]
   */
  public array $products; // ArrayOfMagentoProduct
}
