<?php
namespace Clang;

class MagentoShipment {
  public int $id; // long
  public string $externalShipmentId; // string
  public string $externalOrderId; // string
  public string $storeview; // string
  public int $customerId; // long
  public string $billingFirstname; // string
  public string $billingMiddlename; // string
  public string $billingPrefix; // string
  public string $billingSuffix; // string
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
  public string $shippingPrefix; // string
  public string $shippingSuffix; // string
  public string $shippingLastname; // string
  public string $shippingAddress; // string
  public string $shippingZipCode; // string
  public int $shippingPoBox; // long
  public string $shippingCity; // string
  public string $shippingState; // string
  public string $shippingCountry; // string
  public string $shippingCompanyName; // string
  public string $shippingPhone; // string
  public int $shippingDate; // long

  /**
   * @var MagentoProduct[]
   */
  public array $products; // ArrayOfMagentoProduct
}
