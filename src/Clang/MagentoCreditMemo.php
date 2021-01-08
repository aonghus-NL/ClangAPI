<?php
namespace Clang;

class MagentoCreditMemo {
  public $id; // long
  public $externalOrderId; // string
  public $customerId; // long
  public $globalCurrencyCode; // string
  public $storeCurrencyCode; // string
  public $orderCurrencyCode; // string
  public $storeToBaseRate; // double
  public $storeToOrderRate; // double
  public $discountDescription; // string
  public $shippingTaxAmount; // double
  public $totalQuantity; // long
  public $adjustmentPositive; // string
  public $adjustmentNegative; // string
  public $subtotal; // double
  public $subtotalInclTax; // double
  public $grandTotal; // double
  public $taxAmount; // double
  public $discountAmount; // double
  public $shippingAmount; // double
  public $shippingInclTax; // double
  public $adjustment; // string
  public $hiddenTaxAmount; // double
  public $offlineRequested; // string
  public $doTransaction; // boolean
  public $state; // string
  public $incrementId; // long
  public $createdAt; // string
  public $updatedAt; // string
  public $baseCurrencyCode; // string
  public $baseToGlobalRate; // double
  public $baseToOrderRate; // double
  public $baseShippingTaxAmount; // double
  public $baseShippingAmount; // double
  public $baseAdjustmentPositive; // double
  public $baseAdjustmentNegative; // double
  public $baseSubtotal; // double
  public $baseSubtotalInclTax; // double
  public $baseGrandTotal; // double
  public $baseTaxAmount; // double
  public $baseDiscountAmount; // double
  public $baseShippingInclTax; // double
  public $baseCost; // double
  public $baseAdjustment; // double
  public $baseHiddenTaxAmount; // double
  public $items; // ArrayOfMagentoCreditMemoItem
}
