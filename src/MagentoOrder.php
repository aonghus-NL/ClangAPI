<?php
namespace Clang;

class MagentoOrder {

  /**
   * @var string
   */
  public $quoteId;

  /**
   * @var float
   */
  public $subtotalInclTax;

  /**
   * @var string
   */
  public $couponCode;

  /**
   * @var int
   */
  public $totalQtyOrdered;

  /**
   * @var float
   */
  public $weight;

  /**
   * @var string
   */
  public $taxString;

  /**
   * @var float
   */
  public $shippingInclTax;

  /**
   * @var string
   */
  public $discountDescription;

  /**
   * @var float
   */
  public $shippingDiscountAmount;

  /**
   * @var int
   */
  public $totalItemCount;

  /**
   * @var string
   */
  public $status;

  /**
   * @var string
   */
  public $externalOrderId;

  /**
   * @var string
   */
  public $note;

  /**
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $storeview;

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
  public $shippingCost;

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
  public $rewardPoints;

  /**
   * @var string
   */
  public $billingFirstname;

  /**
   * @var string
   */
  public $billingMiddlename;

  /**
   * @var string
   */
  public $billingTitle;

  /**
   * @var string
   */
  public $billingLastname;

  /**
   * @var string
   */
  public $billingAddress;

  /**
   * @var string
   */
  public $billingZipCode;

  /**
   * @var int
   */
  public $billingPoBox;

  /**
   * @var string
   */
  public $billingCity;

  /**
   * @var string
   */
  public $billingState;

  /**
   * @var string
   */
  public $billingCountry;

  /**
   * @var string
   */
  public $billingCompanyName;

  /**
   * @var string
   */
  public $billingPhone;

  /**
   * @var string
   */
  public $billingEmailAddress;

  /**
   * @var string
   */
  public $shippingFirstname;

  /**
   * @var string
   */
  public $shippingMiddlename;

  /**
   * @var string
   */
  public $shippingTitle;

  /**
   * @var string
   */
  public $shippingLastname;

  /**
   * @var string
   */
  public $shippingAddress;

  /**
   * @var string
   */
  public $shippingZipCode;

  /**
   * @var int
   */
  public $shippingPoBox;

  /**
   * @var string
   */
  public $shippingCity;

  /**
   * @var string
   */
  public $shippingState;

  /**
   * @var string
   */
  public $shippingCountry;

  /**
   * @var string
   */
  public $shippingCompanyName;

  /**
   * @var string
   */
  public $shippingPhone;

  /**
   * @var string
   */
  public $paymentMethod;

  /**
   * @var string
   */
  public $shippingMethod;

  /**
   * @var int
   */
  public $orderDate;

  /**
   * @var MagentoProduct[]
   */
  public $products;

  /**
   * @var string
   */
  public $billingPrefix;

  /**
   * @var string
   */
  public $billingSuffix;

  /**
   * @var string
   */
  public $shippingPrefix;

  /**
   * @var string
   */
  public $shippingSuffix;

}
