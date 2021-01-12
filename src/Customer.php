<?php
namespace Clang;

class Customer {
  /**
   * @var Account[]
   */
  public string $accounts; // ArrayOfAccount

  public string $smsOptIn; // string
  public string $optIn; // string
  public int $id; // long
  public string $title; // string
  public string $lastname; // string
  public string $firstname; // string
  public string $middlename; // string
  public string $prefix; // string
  public string $suffix; // string
  public string $initials; // string
  public string $gender; // string
  public string $maritalStatus; // string
  public string $birthday; // string
  public string $birthplace; // string
  public string $address; // string
  public string $address2; // string
  public string $address3; // string
  public string $addressNumber; // string
  public string $addressNumberSuffix; // string
  public string $zipCode; // string
  public string $poBox; // string
  public string $city; // string
  public string $state; // string
  public string $country; // string
  public string $companyName; // string
  public string $department; // string
  public string $alternateAddress; // string
  public string $alternateAddress2; // string
  public string $alternateAddress3; // string
  public string $alternateAddressNumber; // string
  public string $alternateAddressNumberSuffix; // string
  public string $alternateZipCode; // string
  public string $alternateCity; // string
  public string $alternateState; // string
  public string $alternateCountry; // string
  public string $contactMan; // string
  public string $jobTitle; // string
  public string $workPhone; // string
  public string $workExtension; // string
  public string $workMobile; // string
  public string $homePhone; // string
  public string $mobilePhone; // string
  public string $faxNumber; // string
  public string $emailAddress; // string
  public string $alternateEmailAddress; // string
  public string $emailType; // string
  public string $mailStatus; // string
  public int $softBounceCount; // long
  public int $hardBounceCount; // long
  public string $website; // string
  public string $imageUrl; // string
  public string $status; // string
  public string $externalId; // string
  public string $userName; // string
  public string $password; // string
  public string $createdBy; // string
  public string $createdAt; // string
  public string $modifiedBy; // string
  public string $modifiedAt; // string

  /**
   * @var CustomerOption[]
   */
  public array $options; // ArrayOfCustomerOption
}
