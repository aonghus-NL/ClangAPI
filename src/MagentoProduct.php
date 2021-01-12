<?php
namespace Clang;

class MagentoProduct {
  public int $storeId; // long
  public int $orderItemId; // long

  /**
   * @var Option[]
   */
  public array $attributes; // ArrayOfOption

  public int $id; // long
  public int $externalProductId; // long
  public string $sku; // string
  public string $name; // string
  public string $description; // string
  public string $url; // string
  public string $image; // string
  public int $orderId; // long
  public int $quantity; // long
  public float $priceEx; // double
  public float $price; // double
  public float $discount; // double

  /**
   * @var MagentoCategory[]
   */
  public array $categories; // ArrayOfMagentoCategory

  /**
   * @var int[]
   */
  public array $related; // ArrayOfInt

  /**
   * @var int[]
   */
  public array $upSell; // ArrayOfInt

  /**
   * @var int[]
   */
  public array $crossSell; // ArrayOfInt
}
