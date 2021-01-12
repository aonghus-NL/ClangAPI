<?php
namespace Clang;

class MagentoCreditMemo {
  public int $id; // long
  public string $externalOrderId; // string
  public int $customerId; // long
  public string $globalCurrencyCode; // string
  public string $storeCurrencyCode; // string
  public string $orderCurrencyCode; // string
  public float $storeToBaseRate; // double
  public float $storeToOrderRate; // double
  public string $discountDescription; // string
  public float $shippingTaxAmount; // double
  public int $totalQuantity; // long
  public string $adjustmentPositive; // string
  public string $adjustmentNegative; // string
  public float $subtotal; // double
  public float $subtotalInclTax; // double
  public float $grandTotal; // double
  public float $taxAmount; // double
  public float $discountAmount; // double
  public float $shippingAmount; // double
  public float $shippingInclTax; // double
  public string $adjustment; // string
  public float $hiddenTaxAmount; // double
  public string $offlineRequested; // string
  public bool $doTransaction; // boolean
  public string $state; // string
  public int $incrementId; // long
  public string $createdAt; // string
  public string $updatedAt; // string
  public string $baseCurrencyCode; // string
  public float $baseToGlobalRate; // double
  public float $baseToOrderRate; // double
  public float $baseShippingTaxAmount; // double
  public float $baseShippingAmount; // double
  public float $baseAdjustmentPositive; // double
  public float $baseAdjustmentNegative; // double
  public float $baseSubtotal; // double
  public float $baseSubtotalInclTax; // double
  public float $baseGrandTotal; // double
  public float $baseTaxAmount; // double
  public float $baseDiscountAmount; // double
  public float $baseShippingInclTax; // double
  public float $baseCost; // double
  public float $baseAdjustment; // double
  public float $baseHiddenTaxAmount; // double

  /**
   * @var MagentoCreditMemoItem[]
   */
  public array $items; // ArrayOfMagentoCreditMemoItem
}
