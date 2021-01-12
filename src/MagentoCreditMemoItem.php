<?php
namespace Clang;

class MagentoCreditMemoItem {
  public int $storeId; // long
  public int $orderItemId; // long
  public string $externalProductId; // string
  public string $sku; // string
  public string $name; // string
  public float $price; // double
  public float $priceInclTax; // double
  public string $weeeTaxApplied; // string
  public float $weeeTaxAppliedAmount; // double
  public float $weeeTaxAppliedRowAmount; // double
  public string $weeeTaxDisposition; // string
  public string $weeeTaxRowDisposition; // string
  public int $quantity; // long
  public float $rowTotal; // double
  public float $rowTotalInclTax; // double
  public float $taxAmount; // double
  public float $hiddenTaxAmount; // double
  public int $backToStock; // long
  public string $createdAt; // string
  public string $updatedAt; // string
  public float $basePrice; // double
  public float $baseCost; // double
  public float $basePriceInclTax; // double
  public float $baseWeeeTaxAppliedAmount; // double
  public float $baseWeeeTaxAppliedRowAmount; // double
  public float $baseWeeeTaxAppliedRowAmnt; // double
  public string $baseWeeeTaxDisposition; // string
  public string $baseWeeeTaxRowDisposition; // string
  public float $baseRowTotal; // double
  public float $baseRowTotalInclTax; // double
  public float $baseTaxAmount; // double
  public float $baseHiddenTaxAmount; // double
}
