<?php
namespace Clang;

class MagentoOrder {
  public string $quoteId; // string
  public float $subtotalInclTax; // double
  public string $couponCode; // string
  public int $totalQtyOrdered; // long
  public float $weight; // double
  public string $taxString; // string
  public float $shippingInclTax; // double
  public string $discountDescription; // string
  public float $shippingDiscountAmount; // double
  public int $totalItemCount; // long
  public string $status; // string
  public string $externalOrderId; // string
  public string $note; // string
  public int $id; // long
  public string $storeview; // string
  public int $customerId; // long
  public float $subtotal; // double
  public float $total; // double
  public float $taxAmount; // double
  public float $shippingCost; // double
  public float $discount; // double
  public string $currency; // string
  public int $rewardPoints; // long
  public string $billingFirstname; // string
  public string $billingMiddlename; // string
  public string $billingTitle; // string
  public string $billingLastname; // string
  public string $billingAddress; // string
  public string $billingZipCode; // string
  public int $billingPoBox; // long
  public string $billingCity; // string
  public string $billingState; // string
  public string $billingCountry; // string
  public string $billingCompanyName; // string
  public string $billingPhone; // string
  public string $billingEmailAddress; // string
  public string $shippingFirstname; // string
  public string $shippingMiddlename; // string
  public string $shippingTitle; // string
  public string $shippingLastname; // string
  public string $shippingAddress; // string
  public string $shippingZipCode; // string
  public int $shippingPoBox; // long
  public string $shippingCity; // string
  public string $shippingState; // string
  public string $shippingCountry; // string
  public string $shippingCompanyName; // string
  public string $shippingPhone; // string
  public string $paymentMethod; // string
  public string $shippingMethod; // string
  public int $orderDate; // long

  /**
   * @var MagentoProduct[]
   */
  public array $products; // ArrayOfMagentoProduct

  public string $billingPrefix; // string
  public string $billingSuffix; // string
  public string $shippingPrefix; // string
  public string $shippingSuffix; // string
}
