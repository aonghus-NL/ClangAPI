<?php
namespace Clang;

class MagentoCreditMemoItem {
  public $storeId; // long
  public $orderItemId; // long
  public $externalProductId; // string
  public $sku; // string
  public $name; // string
  public $price; // double
  public $priceInclTax; // double
  public $weeeTaxApplied; // string
  public $weeeTaxAppliedAmount; // double
  public $weeeTaxAppliedRowAmount; // double
  public $weeeTaxDisposition; // string
  public $weeeTaxRowDisposition; // string
  public $quantity; // long
  public $rowTotal; // double
  public $rowTotalInclTax; // double
  public $taxAmount; // double
  public $hiddenTaxAmount; // double
  public $backToStock; // long
  public $createdAt; // string
  public $updatedAt; // string
  public $basePrice; // double
  public $baseCost; // double
  public $basePriceInclTax; // double
  public $baseWeeeTaxAppliedAmount; // double
  public $baseWeeeTaxAppliedRowAmount; // double
  public $baseWeeeTaxAppliedRowAmnt; // double
  public $baseWeeeTaxDisposition; // string
  public $baseWeeeTaxRowDisposition; // string
  public $baseRowTotal; // double
  public $baseRowTotalInclTax; // double
  public $baseTaxAmount; // double
  public $baseHiddenTaxAmount; // double
}