<?php
namespace Clang;

class MagentoProduct {

  /**
   * @var int
   */
  public $storeId;

  /**
   * @var int
   */
  public $orderItemId;

  /**
   * @var Option[]
   */
  public $attributes;

  /**
   * @var int
   */
  public $id;

  /**
   * @var int
   */
  public $externalProductId;

  /**
   * @var string
   */
  public $sku;

  /**
   * @var string
   */
  public $name;

  /**
   * @var string
   */
  public $description;

  /**
   * @var string
   */
  public $url;

  /**
   * @var string
   */
  public $image;

  /**
   * @var int
   */
  public $orderId;

  /**
   * @var int
   */
  public $quantity;

  /**
   * @var float
   */
  public $priceEx;

  /**
   * @var float
   */
  public $price;

  /**
   * @var float
   */
  public $discount;

  /**
   * @var MagentoCategory[]
   */
  public $categories;

  /**
   * @var int[]
   */
  public $related;

  /**
   * @var int[]
   */
  public $upSell;

  /**
   * @var int[]
   */
  public $crossSell;

}
