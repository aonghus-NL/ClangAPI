<?php
namespace Clang;

class MagentoCreditMemo {

  /**
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $externalOrderId;

  /**
   * @var int
   */
  public $customerId;

  /**
   * @var string
   */
  public $globalCurrencyCode;

  /**
   * @var string
   */
  public $storeCurrencyCode;

  /**
   * @var string
   */
  public $orderCurrencyCode;

  /**
   * @var float
   */
  public $storeToBaseRate;

  /**
   * @var float
   */
  public $storeToOrderRate;

  /**
   * @var string
   */
  public $discountDescription;

  /**
   * @var float
   */
  public $shippingTaxAmount;

  /**
   * @var int
   */
  public $totalQuantity;

  /**
   * @var string
   */
  public $adjustmentPositive;

  /**
   * @var string
   */
  public $adjustmentNegative;

  /**
   * @var float
   */
  public $subtotal;

  /**
   * @var float
   */
  public $subtotalInclTax;

  /**
   * @var float
   */
  public $grandTotal;

  /**
   * @var float
   */
  public $taxAmount;

  /**
   * @var float
   */
  public $discountAmount;

  /**
   * @var float
   */
  public $shippingAmount;

  /**
   * @var float
   */
  public $shippingInclTax;

  /**
   * @var string
   */
  public $adjustment;

  /**
   * @var float
   */
  public $hiddenTaxAmount;

  /**
   * @var string
   */
  public $offlineRequested;

  /**
   * @var bool
   */
  public $doTransaction;

  /**
   * @var string
   */
  public $state;

  /**
   * @var int
   */
  public $incrementId;

  /**
   * @var string
   */
  public $createdAt;

  /**
   * @var string
   */
  public $updatedAt;

  /**
   * @var string
   */
  public $baseCurrencyCode;

  /**
   * @var float
   */
  public $baseToGlobalRate;

  /**
   * @var float
   */
  public $baseToOrderRate;

  /**
   * @var float
   */
  public $baseShippingTaxAmount;

  /**
   * @var float
   */
  public $baseShippingAmount;

  /**
   * @var float
   */
  public $baseAdjustmentPositive;

  /**
   * @var float
   */
  public $baseAdjustmentNegative;

  /**
   * @var float
   */
  public $baseSubtotal;

  /**
   * @var float
   */
  public $baseSubtotalInclTax;

  /**
   * @var float
   */
  public $baseGrandTotal;

  /**
   * @var float
   */
  public $baseTaxAmount;

  /**
   * @var float
   */
  public $baseDiscountAmount;

  /**
   * @var float
   */
  public $baseShippingInclTax;

  /**
   * @var float
   */
  public $baseCost;

  /**
   * @var float
   */
  public $baseAdjustment;

  /**
   * @var float
   */
  public $baseHiddenTaxAmount;

  /**
   * @var MagentoCreditMemoItem[]
   */
  public $items;
}
