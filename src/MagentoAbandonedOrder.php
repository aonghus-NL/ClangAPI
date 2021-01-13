<?php
namespace Clang;

class MagentoAbandonedOrder {

  /**
   * @var int
   */
  public $id;

  /**
   * @var int
   */
  public $quoteId;

  /**
   * @var string
   */
  public $storeview;

  /**
   * @var int
   */
  public $storeviewId;

  /**
   * @var int
   */
  public $customerId;

  /**
   * @var float
   */
  public $subtotal;

  /**
   * @var float
   */
  public $total;

  /**
   * @var float
   */
  public $taxAmount;

  /**
   * @var float
   */
  public $discount;

  /**
   * @var string
   */
  public $currency;

  /**
   * @var int
   */
  public $createDate;

  /**
   * @var MagentoProduct[]
   */
  public $products;

}
